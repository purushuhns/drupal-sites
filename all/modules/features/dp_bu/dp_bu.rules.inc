<?php
/**
 * @file
 * Rules integration for the DP: Business Unit module.
 *
 * @addtogroup rules
 */

/**
 * Implements hook_rules_action_info().
 */
function dp_bu_rules_action_info() {
  $info = array();

  $info['dp_bu_rules_get_bus_of_developer_app'] = array(
    'group' => t('DP: Business Unit'),
    'label' => t('Get Business Units (nodes) of an app'),
    'parameter' => array(
      'app_entity' => array(
        'type' => 'developer_app',
        'label' => t('Developer App'),
        'description' => t('A Developer App entity.'),
      ),
    ),
    'provides' => array(
      'bus_of_app' => array('type' => 'list<node>', 'label' => t('List of Business Units')),
    ),
  );

  $info['dp_bu_rules_get_bu_of_api_product'] = array(
    'group' => t('DP: Business Unit'),
    'label' => t('Get Business Unit (node) of API Product'),
    'parameter' => array(
      'app_entity' => array(
        'type' => 'api_product',
        'label' => t('API Product'),
        'description' => t('API Product entity.'),
      ),
    ),
    'provides' => array(
      'bu_node' => array('type' => 'node', 'label' => t('Business Unit (node)')),
    ),
  );

  return $info;
}

/**
 * Callback for action: "Get Business Units (nodes) of an app".
 *
 * @param \Drupal\devconnect_developer_apps\DeveloperAppEntity $app
 *   Developer app.
 *
 * @return array
 *   Associative array, where bus_of_app key's value is an array of node ids.
 */
function dp_bu_rules_get_bus_of_developer_app(\Drupal\devconnect_developer_apps\DeveloperAppEntity $app) {
  $bu_nids = array();

  if (!empty($app->apiProducts)) {
    $bus_of_apps_api_products = array_unique(dp_bu_get_business_units_of_api_products($app->apiProducts));
    // Only numeric keys accepted.
    $bu_nids = array_values(dp_bu_get_group_ids_of_business_units_by_bu_names($bus_of_apps_api_products, FALSE));
  }

  return array('bus_of_app' => $bu_nids);
}

/**
 * Callback for action: "Get Business Unit (node) of API Product".
 *
 * @param \Drupal\devconnect_developer_apps\ApiProductEntity $api_product
 *   API Product object.
 *
 * @return array
 *   Associative array where bu_node key's value is a node object, if API
 *   product has BU_Name set and the BU node exists, otherwise NULL.
 */
function dp_bu_rules_get_bu_of_api_product(\Drupal\devconnect_developer_apps\ApiProductEntity $api_product) {
  $node = NULL;
  if (isset($api_product->attributes[DP_BU_EDGE_ATTR_BU_NAME])) {
    // Do we ever need to suppress access check here?
    $bu_ids = dp_bu_get_group_ids_of_business_units_by_bu_names(array($api_product->attributes[DP_BU_EDGE_ATTR_BU_NAME]));
    if (!empty($bu_ids)) {
      $node = node_load(reset($bu_ids));
    }
  }

  return array('bu_node' => $node);
}
