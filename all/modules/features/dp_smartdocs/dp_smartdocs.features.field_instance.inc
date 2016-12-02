<?php
/**
 * @file
 * dp_smartdocs.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function dp_smartdocs_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance:
  // 'taxonomy_term-smartdocs_models-field_model_author'.
  $field_instances['taxonomy_term-smartdocs_models-field_model_author'] = array(
    'bundle' => 'smartdocs_models',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'entityreference',
        'settings' => array(
          'link' => FALSE,
        ),
        'type' => 'entityreference_label',
        'weight' => 4,
      ),
    ),
    'entity_type' => 'taxonomy_term',
    'field_name' => 'field_model_author',
    'label' => 'Author',
    'required' => 1,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'entityreference',
      'settings' => array(
        'match_operator' => 'CONTAINS',
        'path' => '',
        'size' => 60,
      ),
      'type' => 'entityreference_autocomplete',
      'weight' => 2,
    ),
  );

  // Exported field_instance:
  // 'taxonomy_term-smartdocs_models-field_model_source'.
  $field_instances['taxonomy_term-smartdocs_models-field_model_source'] = array(
    'bundle' => 'smartdocs_models',
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'file',
        'settings' => array(),
        'type' => 'file_default',
        'weight' => 2,
      ),
    ),
    'entity_type' => 'taxonomy_term',
    'field_name' => 'field_model_source',
    'label' => 'Source',
    'required' => 1,
    'settings' => array(
      'description_field' => 0,
      'file_directory' => 'model_source',
      'file_extensions' => 'json yml xml',
      'max_filesize' => '',
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'file',
      'settings' => array(
        'progress_indicator' => 'throbber',
      ),
      'type' => 'file_generic',
      'weight' => 3,
    ),
  );

  // Exported field_instance:
  // 'taxonomy_term-smartdocs_models-field_model_source_format'.
  $field_instances['taxonomy_term-smartdocs_models-field_model_source_format'] = array(
    'bundle' => 'smartdocs_models',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'list',
        'settings' => array(),
        'type' => 'list_default',
        'weight' => 5,
      ),
    ),
    'entity_type' => 'taxonomy_term',
    'field_name' => 'field_model_source_format',
    'label' => 'Source format',
    'required' => 1,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'options',
      'settings' => array(),
      'type' => 'options_select',
      'weight' => 4,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Author');
  t('Source');
  t('Source format');

  return $field_instances;
}
