<?php

/**
 * @file
 * Views integrations for DP: BU: App Dashboard.
 */

/**
 * Implements hook_views_data_alter().
 */
function dp_bu_app_dashboard_views_data_alter(&$data) {
  if (isset($data['dp_app_dashboard'])) {
    $data['dp_app_dashboard']['bu_name'] = array(
      'title' => t('BU Name'),
      'help' => t('Name of the Business Unit, which this app belongs to.'),
      'field' => array(
        'handler' => 'views_handler_field',
        'click sortable' => TRUE,
      ),
      'sort' => array('handler' => 'views_handler_sort'),
      'filter' => array('handler' => 'views_handler_filter_string'),
      'argument' => array('handler' => 'views_handler_argument_string'),
      'relationship' => array(
        'base' => 'field_data_field_bu_name',
        'base field' => 'field_bu_name_machine',
        'label' => t('Associated Business Unit'),
        'title' => t('Associated Business Unit'),
        'help' => t('Relate Business Units with the associated (cached) developer apps.'),
        'handler' => 'views_handler_relationship',
      ),
    );
  }
  if (isset($data['field_data_field_bu_name'])) {
    $data['field_data_field_bu_name']['field_bu_name_machine']['field'] = array(
      'handler' => 'views_handler_field',
      'click sortable' => TRUE,
    );
    // Relate cached Developer apps with Business Units.
    $data['field_data_field_bu_name']['field_bu_name_machine']['relationship'] = array(
      'base' => 'dp_app_dashboard',
      'base field' => 'bu_name',
      'label' => t('Associated developer apps'),
      'title' => t('Associated developer apps'),
      'help' => t('Relate Business Units with the associated (cached) developer apps.'),
      'handler' => 'views_handler_relationship',
    );
  }
}
