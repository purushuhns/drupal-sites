<?php
/**
 * @file
 * dp_catalog_category_content.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function dp_catalog_category_content_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function dp_catalog_category_content_node_info() {
  $items = array(
    'api_catalog_category' => array(
      'name' => t('api_catalog_category'),
      'base' => 'node_content',
      'description' => t('Top level category of the API catalog'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'api_catalog_entry' => array(
      'name' => t('api_catalog_entry'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
