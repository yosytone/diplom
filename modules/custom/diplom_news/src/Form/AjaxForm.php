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

    $form['tags'] = [
      '#type' => 'details',
      '#title' => "Tags",
      '#open' => TRUE,
      '#description' => "The description of the field.",
    ];
    $form['tags']['addtag'] = [
      '#type' => 'submit',
      '#value' => 'Загаловок',
      '#submit' => ['::addOneTag'],
      '#weight' => 100,
      '#ajax' => [
        'callback' => '::updateTagCallback',
        'wrapper' => 'tagfields-wrapper',
        'method' => 'replace',
      ],
    ];
    
    $form['tags']['addText'] = [
      '#type' => 'submit',
      '#value' => 'Текст',
      '#submit' => ['::addOneText'],
      '#weight' => 100,
      '#ajax' => [
        'callback' => '::updateTextCallback',
        'wrapper' => 'tagfields-wrapper',
        'method' => 'replace',
      ],
    ];

    $form['tags']['addYoutube'] = [
      '#type' => 'submit',
      '#value' => 'Youtube',
      '#submit' => ['::addOneYoutube'],
      '#weight' => 100,
      '#ajax' => [
        'callback' => '::updateYoutubeCallback',
        'wrapper' => 'tagfields-wrapper',
        'method' => 'replace',
      ],
    ];

    $form['tags']['addImage'] = [
      '#type' => 'submit',
      '#value' => 'Картинка',
      '#submit' => ['::addOneImage'],
      '#weight' => 100,
      '#ajax' => [
        'callback' => '::updateImageCallback',
        'wrapper' => 'tagfields-wrapper',
        'method' => 'replace',
      ],
    ];

    $form['tags']['addGallery'] = [
      '#type' => 'submit',
      '#value' => 'Галерея',
      '#submit' => ['::addOneGallery'],
      '#weight' => 100,
      '#ajax' => [
        'callback' => '::updateGalleryCallback',
        'wrapper' => 'tagfields-wrapper',
        'method' => 'replace',
      ],
    ];

    $form['tags']['tag_values'] = [
      '#type' => 'container',
      '#tree' => TRUE,
      '#prefix' => '<div id="tagfields-wrapper">',
      '#suffix' => '</div>',
    ];

    foreach ($p as $key => $value) {
      if ($value == 0 || $value == 1) {
        $form['tags']['tag_values'][$key] = [
          '#type' => 'textfield',
          '#title' => $this
            ->t('Subject'),
          '#value' => '1',
        ];
      }

      if ($value == 2) {
        $form['tags']['tag_values'][$key] = [
          '#type' => 'text_format',
          '#title' => $this->t('Description'),
          '#format' => 'rich_text',
        ];
      }

      if ($value == 3) {
        $form['tags']['tag_values'][$key] = [
          '#type' => 'textfield',
          '#title' => $this
            ->t('Youtube'),
          '#value' => '1',
        ];
      }

      if ($value == 4) {
        $form['tags']['tag_values'][$key] = [
          '#type' => 'managed_file',
          '#title' => 'my file',
          '#name' => 'my_custom_file',
          //'#multiple' => TRUE,
          '#description' => $this->t('my file description'),
          '#upload_location' => 'public://'
        ];
      }

      if ($value == 5) {
        $form['tags']['tag_values'][$key] = [
          '#type' => 'managed_file',
          '#title' => 'my file',
          '#name' => 'my_custom_file',
          '#multiple' => TRUE,
          '#description' => $this->t('my file description'),
          '#upload_location' => 'public://'
        ];
      }

      $form['tags']['tag_values'][$key+1] = [
        '#type' => 'submit',
        '#value' => $key+1,
        '#submit' => ['::DeleteParagraph'],
        '#ajax' => [
          'callback' => '::updateTextCallback',
          'method' => 'replace',
      ],
      ];


    }


    return $form;
  } 

  public function addOneTag(array &$form, FormStateInterface $form_state) {
    $p = $form_state->get('p');
    //$p[3] = 'three';
    $pkey = array_key_last($p);
    $p[$pkey+2] = 1;

    $form_state->set('p', $p);
    $form_state->setRebuild(TRUE);
  }

  public function addOneText(array &$form, FormStateInterface $form_state) {
    $p = $form_state->get('p');
    //$p[3] = 'three';
    $pkey = array_key_last($p);
    $p[$pkey+2] = 2;

    $form_state->set('p', $p);
    $form_state->setRebuild(TRUE);
  }

  public function addOneYoutube(array &$form, FormStateInterface $form_state) {
    $p = $form_state->get('p');
    //$p[3] = 'three';
    $pkey = array_key_last($p);
    $p[$pkey+2] = 3;

    $form_state->set('p', $p);
    $form_state->setRebuild(TRUE);
  }

  public function addOneImage(array &$form, FormStateInterface $form_state) {
    $p = $form_state->get('p');
    //$p[3] = 'three';
    $pkey = array_key_last($p);
    $p[$pkey+2] = 4;

    $form_state->set('p', $p);
    $form_state->setRebuild(TRUE);
  }

  public function addOneGallery(array &$form, FormStateInterface $form_state) {
    $p = $form_state->get('p');
    //$p[3] = 'three';
    $pkey = array_key_last($p);
    $p[$pkey+2] = 4;

    $form_state->set('p', $p);
    $form_state->setRebuild(TRUE);
  }

  public function DeleteParagraph(array &$form, FormStateInterface $form_state) {
    $p = $form_state->get('p');
    //$p[3] = 'three';
    $pkey = array_key_last($p);
    $p[$pkey+2] = 4;

    $form_state->set('p', $p);
    $form_state->setRebuild(TRUE);
  }


  public function updateTagCallback(array &$form, FormStateInterface $form_state) {
      return $form['tags']['tag_values'];
  }
  public function updateTextCallback(array &$form, FormStateInterface $form_state) {
    return $form['tags']['tag_values'];
  }
  public function updateYoutubeCallback(array &$form, FormStateInterface $form_state) {
    return $form['tags']['tag_values'];
  }
  public function updateImageCallback(array &$form, FormStateInterface $form_state) {
    return $form['tags']['tag_values'];
  }
  public function updateGalleryCallback(array &$form, FormStateInterface $form_state) {
    return $form['tags']['tag_values'];
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {

  }

}






