<?php

namespace Drupal\ajax_comments\Ajax;

use Drupal\Core\Ajax\CommandInterface;

/**
 * AJAX command for calling the ajaxCommentsScrollToElement() method.
 *
 * @ingroup ajax
 */
class AjaxCommentsScrollToElementCommand implements CommandInterface {

  /**
   * The CSS selector for the element.
   *
   * @var string
   */
  protected $selector;

  /**
   * Constructs a ajaxCommentsScrollToElementCommand object.
   *
   * @param string $selector
   *   The selector for the command.
   */
  public function __construct($selector) {
    $this->selector = $selector;
  }

  /**
   * {@inheritdoc}
   */
  public function render() {
    return [
      'command' => 'ajaxCommentsScrollToElement',
      'selector' => $this->selector,
    ];
  }

}
