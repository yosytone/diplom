<?php

namespace Drupal\area_pizza;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides an interface defining an area_pizza entity type.
 */
interface AreaPizzaInterface extends ContentEntityInterface {

  /**
   * Gets the area_pizza title.
   *
   * @return string
   *   Title of the area_pizza.
   */
  public function getTitle();

  /**
   * Sets the area_pizza title.
   *
   * @param string $title
   *   The area_pizza title.
   *
   * @return \Drupal\area_pizza\AreaPizzaInterface
   *   The called area_pizza entity.
   */
  public function setTitle($title);

  /**
   * Returns the area_pizza status.
   *
   * @return bool
   *   TRUE if the area_pizza is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the area_pizza status.
   *
   * @param bool $status
   *   TRUE to enable this area_pizza, FALSE to disable.
   *
   * @return \Drupal\area_pizza\AreaPizzaInterface
   *   The called area_pizza entity.
   */
  public function setStatus($status);

}
