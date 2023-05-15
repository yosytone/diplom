<?php

namespace Drupal\blog\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the blog entity edit forms.
 */
class BlogForm extends ContentEntityForm {

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
      $this->messenger()->addStatus($this->t('New blog %label has been created.', $message_arguments));
      $this->logger('blog')->notice('Created new blog %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The blog %label has been updated.', $message_arguments));
      $this->logger('blog')->notice('Updated new blog %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.blog.canonical', ['blog' => $entity->id()]);
  }

}
