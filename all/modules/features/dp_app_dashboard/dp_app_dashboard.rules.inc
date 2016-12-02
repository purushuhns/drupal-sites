<?php
/**
 * @file
 * Rules integration for the DP: App dashboard module.
 *
 * @addtogroup rules
 */

/**
 * Implements hook_rules_event_info().
 */
function dp_app_dashboard_rules_event_info() {
  $info = array();

  $defaults = array(
    'group' => t('DP App Dashboard'),
    'variables' => array(
      'app' => array(
        'type' => 'developer_app',
        'label' => t('App'),
      ),
      'product' => array(
        'type' => 'api_product',
        'label' => t('API Product'),
      ),
    ),
  );

  $info['dp_app_dashboard_app_credentials_approved'] = $defaults + array(
      'label' => t("App's credentials get approved for an API Product"),
      'help' => t("A developer app's credentials get approved for an API Product on the App dashboard."),
    );


  $info['dp_app_dashboard_app_credentials_revoked'] = $defaults + array(
      'label' => t("App's credentials get revoked for an API Product"),
      'help' => t("A developer app's credentials get revoked for an API Product on the App dashboard."),
    );

  return $info;
}
