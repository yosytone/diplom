<?php

namespace Drupal\area_pizza\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the area_pizza entity edit forms.
 */
class AreaPizzaForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {

    $entity = $this->getEntity();
    $result = $entity->save();
    $link = $entity->toLink($this->t('View'))->toRenderable();

    $message_arguments = ['%label' => $this->entity->label()];
    $logger_arguments = $message_arguments + ['link' => render($link)];

    if ($result == SAVED_NEW) {
      $this->messenger()->addStatus($this->t('New area_pizza %label has been created.', $message_arguments));
      $this->logger('area_pizza')->notice('Created new area_pizza %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The area_pizza %label has been updated.', $message_arguments));
      $this->logger('area_pizza')->notice('Updated new area_pizza %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.area_pizza.canonical', ['area_pizza' => $entity->id()]);
  }

}
