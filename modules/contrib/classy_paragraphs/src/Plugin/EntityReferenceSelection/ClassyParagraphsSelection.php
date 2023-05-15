<?php

namespace Drupal\classy_paragraphs\Plugin\EntityReferenceSelection;

use Drupal\Core\Entity\Plugin\EntityReferenceSelection\DefaultSelection;
use Drupal\Core\Form\FormStateInterface;
use Drupal\classy_paragraphs\Entity\ClassyParagraphsStyle;

/**
 * Plugin implementation of the Entity Reference Selection plugin.
 *
 * @EntityReferenceSelection(
 *   id = "classy_paragraphs",
 *   label = @Translation("Classy paragraphs"),
 *   entity_types = {"classy_paragraphs_style"},
 *   group = "classy_paragraphs",
 *   weight = 5
 * )
 */
class ClassyParagraphsSelection extends DefaultSelection {

  /**
   * @inheritDoc
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'filter' => [
        'type' => '_none',
        'negate' => FALSE,
      ],
      'sort' => [
        'field' => '_none',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {

    $bundles = ClassyParagraphsStyle::loadMultiple();
    $bundle_options = [];
    foreach ($bundles as $bundle_name => $bundle_info) {
      $bundle_options[$bundle_name] = $bundle_info->label();
    }
    natsort($bundle_options);

    $form['filter']['type'] = [
      '#type' => 'select',
      '#title' => $this->t('Filter by'),
      '#options' => [
        '_none' => $this->t('- None -'),
        'target_bundles' => $this->t('Classy styles'),
        'starts_with' => $this->t('Machine name'),
      ],
      '#ajax' => TRUE,
      '#limit_validation_errors' => [],
      '#default_value' => $this->configuration['filter']['type'],
    ];

    if ($this->configuration['filter']['type'] != '_none') {
      if ($this->configuration['filter']['type'] === 'target_bundles') {
        $form['filter']['target_bundles'] = [
          '#type' => 'checkboxes',
          '#title' => $this->t('Classy paragraphs styles'),
          '#options' => $bundle_options,
          '#default_value' => isset($this->configuration['filter']['target_bundles']) ? (array) $this->configuration['filter']['target_bundles'] : [],
          '#description' => t('If no classes are selected, all will be allowed, independent on negate filter.'),
          '#required' => FALSE,
        ];

        $form['filter']['negate'] = [
          '#type' => 'checkbox',
          '#title' => $this->t('Negate filter'),
          '#default_value' => $this->configuration['filter']['negate'],
          '#description' => t('Possible to filter newly added classes dynamically without updating the field config.'),
          '#required' => FALSE,
        ];
      }

      if ($this->configuration['filter']['type'] === 'starts_with') {
        $form['filter']['starts_with'] = [
          '#type' => 'textfield',
          '#title' => $this->t('Classy paragraphs machine name starts with'),
          '#default_value' => isset($this->configuration['filter']['starts_with']) ? $this->configuration['filter']['starts_with'] : '',
          '#description' => t('You can filter for matching machine names.') . ' ' . t('Possible to filter newly added classes dynamically without updating the field config.'),
          '#required' => FALSE,
        ];
      }

      $form['sort']['field'] = [
        '#type' => 'select',
        '#title' => $this->t('Sort by'),
        '#options' => [
          '_none' => $this->t('- None -'),
          'id' => $this->t('Machine name'),
          'label' => $this->t('Label'),
        ],
        '#ajax' => TRUE,
        '#limit_validation_errors' => [],
        '#default_value' => $this->configuration['sort']['field'],
      ];

      if ($this->configuration['sort']['field'] != '_none') {
        // Merge-in default values.
        $this->configuration['sort'] += [
          'direction' => 'ASC',
        ];

        $form['sort']['direction'] = [
          '#type' => 'select',
          '#title' => $this->t('Sort direction'),
          '#required' => TRUE,
          '#options' => [
            'ASC' => $this->t('Ascending'),
            'DESC' => $this->t('Descending'),
          ],
          '#default_value' => $this->configuration['sort']['direction'],
        ];
      }
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  protected function buildEntityQuery($match = NULL, $match_operator = 'CONTAINS') {
    $query = parent::buildEntityQuery($match, $match_operator);

    // Used for autocomplete.
    if (isset($match)) {
      $query->condition('label', $match, $match_operator);
    }

    // Filter by machine name.
    if (!empty($this->configuration['filter']['starts_with'])) {
      $query->condition('id', $this->configuration['filter']['starts_with'], 'STARTS_WITH');
    }
    // Filter by paragraphs type/bundle name.
    if (!empty($this->configuration['filter']['target_bundles'])) {
      $query->condition('id', $this->configuration['filter']['target_bundles'], $this->configuration['filter']['negate'] ? 'NOT IN' : 'IN');
    }

    // Add the sort option.
    if (!empty($this->configuration['sort'])) {
      $sort_settings = $this->configuration['sort'];
      if ($sort_settings['field'] != '_none') {
        $query->sort($sort_settings['field'], $sort_settings['direction']);
      }
    }

    $query->addTag('classy');

    return $query;
  }

}
