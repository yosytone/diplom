<?php

namespace Drupal\diplom_news\Form;

use Drupal;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Drupal\news\Entity\News;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Language\LanguageInterface;


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

  public function buildForm(array $form, FormStateInterface $form_state) {
    
    $form['submit'] = [
      "#type" => "submit",
      '#value' => $this->t('Отправить'),
    ];

    return $form;
  }

  /**
   * @throws \Exception
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $created = time();
    $uuid_service = \Drupal::service('uuid');
    $uuid = $uuid_service->generate();
    $lc = LanguageInterface::LANGCODE_DEFAULT;

    $news = new News([
      'uuid' => array($lc => $uuid),
      'created' => array($lc => $created),
    ], 'news');
    $news->save();
      
  }

}






