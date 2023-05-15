<?php

namespace Drupal\blog;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a blog entity type.
 */
interface BlogInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the blog title.
   *
   * @return string
   *   Title of the blog.
   */
  public function getTitle();

  /**
   * Sets the blog title.
   *
   * @param string $title
   *   The blog title.
   *
   * @return \Drupal\blog\BlogInterface
   *   The called blog entity.
   */
  public function setTitle($title);

  /**
   * Gets the blog creation timestamp.
   *
   * @return int
   *   Creation timestamp of the blog.
   */
  public function getCreatedTime();

  /**
   * Sets the blog creation timestamp.
   *
   * @param int $timestamp
   *   The blog creation timestamp.
   *
   * @return \Drupal\blog\BlogInterface
   *   The called blog entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the blog status.
   *
   * @return bool
   *   TRUE if the blog is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the blog status.
   *
   * @param bool $status
   *   TRUE to enable this blog, FALSE to disable.
   *
   * @return \Drupal\blog\BlogInterface
   *   The called blog entity.
   */
  public function setStatus($status);

}
