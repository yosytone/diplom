<?php

namespace Drupal\diplom_news\Form;

use Drupal;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\paragraphs\Entity\ParagraphsType;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\news\Entity\News;


use \Drupal\node\Entity\Node;

use Drupal\Core\Entity\EntityInterface;



class AjaxForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * The returned ID should be a unique string that can be a valid PHP function
   * name, since it's used in hook implementation names such as
   * hook_form_FORM_ID_alter().
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'pizza_ajax_form';
  }

  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form structure.
   */

   public function buildForm(array $form, FormStateInterface $form_state, $username = NULL) {

    $p = $form_state->get('p');
    if (empty($p)) {
      $p[1] = '0';
      $form_state->set('p', $p);
    }

    $form['contacts'] = [
      '#type' => 'multivalue',
      '#title' => $this->t('Contacts'),
      'sel' => [
        '#type' => 'select',
        '#title' => $this
          ->t('Select element'),
        '#options' => [
            '1' => $this
              ->t('One'),
            '2' => $this
              ->t('two'),
        ],
      '#ajax' => [
        'callback' => '::promptCallback',
        'wrapper' => 'replace-textfield-container',
        ],
      ],
      'name' => [
        '#type' => 'textfield',
        '#title' => $this->t('Name'),
      ],
      'mail' => [
        '#type' => 'email',
        '#title' => $this->t('E-mail'),
      ],
    ];





    // The 'replace-textfield-container' container will be replaced whenever
    // 'changethis' is updated.
    $form['replace_textfield_container'] = [
      '#type' => 'container',
      '#attributes' => ['id' => 'replace-textfield-container'],
    ];
    $form['replace_textfield_container']['replace_textfield'] = [
      '#type' => 'textfield',
      '#title' => $this->t("Why"),
    ];

    // An AJAX request calls the form builder function for every change.
    // We can change how we build the form based on $form_state.
    $value = $form_state->getValue('contacts');
    // The getValue() method returns NULL by default if the form element does
    // not exist. It won't exist yet if we're building it for the first time.
    if ($value !== NULL) {
      $form['replace_textfield_container']['replace_textfield']['#description'] =
        $this->t("Say why you chose '@value'", ['@value' => $value]);
    }
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // No-op. Our form doesn't need a submit handler, because the form is never
    // submitted. We add the method here so we fulfill FormInterface.
  }

  /**
   * Handles switching the available regions based on the selected theme.
   */
  public function promptCallback($form, FormStateInterface $form_state) {
    return $form['replace_textfield_container'];
  }
}