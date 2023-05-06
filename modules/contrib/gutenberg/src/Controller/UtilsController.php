<?php

namespace Drupal\gutenberg\Controller;

use Drupal\Core\Entity\FieldableEntityInterface;
use Symfony\Component\Yaml\Yaml;
use Drupal\Core\Controller\ControllerBase;

/**
 * Utility controller.
 *
 * @package Drupal\gutenberg\Controller
 */
class UtilsController extends ControllerBase {

  /**
   * Get blocks settings.
   */
  public static function getBlocksSettings() {
    $settings = &drupal_static(__FUNCTION__);

    if (!isset($settings)) {
      $module_handler = \Drupal::service('module_handler');
      $path = $module_handler->getModule('gutenberg')->getPath();

      $file_path = DRUPAL_ROOT . '/' . $path . '/' . 'gutenberg.blocks.yml';
      if (file_exists($file_path)) {
        $file_contents = file_get_contents($file_path);
        $settings = Yaml::parse($file_contents);
      }
    }

    return $settings;
  }

  /**
   * Gets allowed blocks.
   */
  public static function getAllowedBlocks() {
    $settings = &drupal_static(__FUNCTION__);

    if (!isset($settings)) {
      $module_handler = \Drupal::service('module_handler');
      $path = $module_handler->getModule('gutenberg')->getPath();

      $file_path = DRUPAL_ROOT . '/' . $path . '/' . 'gutenberg.blocks.yml';
      if (file_exists($file_path)) {
        $file_contents = file_get_contents($file_path);
        $settings = Yaml::parse($file_contents);
      }
    }

    return $settings;
  }

  /**
   * Gets allowed custom blocks.
   * It fetched from *gutenberg.yml file within the theme
   *
   */
  public static function getAllowedCustomBlocks() {
    $settings = &drupal_static(__FUNCTION__);

    if (!isset($settings)) {
      $gutenberg_library_manager = \Drupal::service('plugin.manager.gutenberg.library');
      $theme_definitions = $gutenberg_library_manager->getThemeDefinitions();
      foreach ($theme_definitions as $theme_definition) {
        if (!empty( $theme_definition['custom-blocks'])) {
          foreach ($theme_definition['custom-blocks']['categories'] as $category) {
            $settings['categories'][$category['reference']] = $category;
          }
        }
      }
    }

    return $settings;
  }

  /**
   * Get all the entity text fields.
   *
   * @param \Drupal\Core\Entity\FieldableEntityInterface $entity
   *   An entity instance.
   *
   * @return array
   *   The entity text fields.
   */
  public static function getEntityTextFields(FieldableEntityInterface $entity) {
    /*
     * TODO Make the Gutenberg text field configurable rather than searching for
     *  the first formattable field.
     */

    $text_fields = [];

    // Iterate over all node fields and apply gutenberg text format
    // on first text field found.
    $field_names = self::getEntityFieldNames($entity);

    foreach ($field_names as $value) {
      $field_properties = array_keys($entity
        ->getFieldDefinition($value)
        ->getFieldStorageDefinition()
        ->getPropertyDefinitions());

      // It is long text field if it has format property.
      if (in_array('format', $field_properties)) {
        $text_fields[] = $value;
      }
    }

    return $text_fields;
  }

  /**
   * Get a list of entity field names.
   *
   * @param \Drupal\Core\Entity\FieldableEntityInterface $entity
   *   An entity instance.
   *
   * @return array
   *   The field names.
   */
  public static function getEntityFieldNames(FieldableEntityInterface $entity) {
    return array_keys($entity->getFields());
  }

}
