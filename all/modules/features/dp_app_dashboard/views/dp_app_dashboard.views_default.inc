<?php
/**
 * @file
 * dp_app_dashboard.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function dp_app_dashboard_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'dp_app_dashboard';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'dp_app_dashboard';
  $view->human_name = 'App Dashboard';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'App Dashboard';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    3 => '3',
  );
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_tags'] = array(
    0 => 'dp_app_dashboard',
  );
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '25';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'display_name' => 'display_name',
    'email' => 'email',
    'api_product' => 'api_product',
    'consumer_key' => 'consumer_key',
    'consumer_secret' => 'consumer_secret',
    'nothing' => 'nothing',
    'created_at' => 'created_at',
    'modified_at' => 'modified_at',
    'credential_expiry' => 'credential_expiry',
    'key_expiry' => 'key_expiry',
    'org_name' => 'org_name',
    'credential_status' => 'credential_status',
    'app_status' => 'app_status',
    'app_status_modified_by' => 'app_status_modified_by',
    'edit' => 'edit',
    'app_id' => 'app_id',
  );
  $handler->display->display_options['style_options']['default'] = 'modified_at';
  $handler->display->display_options['style_options']['info'] = array(
    'display_name' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'email' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'api_product' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'consumer_key' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'consumer_secret' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'nothing' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'created_at' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'modified_at' => array(
      'sortable' => 1,
      'default_sort_order' => 'desc',
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'credential_expiry' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'key_expiry' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'org_name' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'credential_status' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'app_status' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'app_status_modified_by' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'edit' => array(
      'align' => 'views-align-center',
      'separator' => '',
      'empty_column' => 0,
    ),
    'app_id' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['style_options']['sticky'] = TRUE;
  $handler->display->display_options['style_options']['empty_table'] = TRUE;
  /* No results behavior: Global: Unfiltered text */
  $handler->display->display_options['empty']['area_text_custom']['id'] = 'area_text_custom';
  $handler->display->display_options['empty']['area_text_custom']['table'] = 'views';
  $handler->display->display_options['empty']['area_text_custom']['field'] = 'area_text_custom';
  $handler->display->display_options['empty']['area_text_custom']['empty'] = TRUE;
  $handler->display->display_options['empty']['area_text_custom']['content'] = 'No developer apps has been created yet.';
  /* Field: DP: Display Name */
  $handler->display->display_options['fields']['display_name']['id'] = 'display_name';
  $handler->display->display_options['fields']['display_name']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['display_name']['field'] = 'display_name';
  $handler->display->display_options['fields']['display_name']['label'] = 'App Name';
  /* Field: DP: Developer Email */
  $handler->display->display_options['fields']['email']['id'] = 'email';
  $handler->display->display_options['fields']['email']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['email']['field'] = 'email';
  $handler->display->display_options['fields']['email']['label'] = 'Developer';
  /* Field: DP: API Product */
  $handler->display->display_options['fields']['api_product']['id'] = 'api_product';
  $handler->display->display_options['fields']['api_product']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['api_product']['field'] = 'api_product';
  /* Field: DP: API Key */
  $handler->display->display_options['fields']['consumer_key']['id'] = 'consumer_key';
  $handler->display->display_options['fields']['consumer_key']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['consumer_key']['field'] = 'consumer_key';
  $handler->display->display_options['fields']['consumer_key']['exclude'] = TRUE;
  /* Field: DP: Consumer Secret */
  $handler->display->display_options['fields']['consumer_secret']['id'] = 'consumer_secret';
  $handler->display->display_options['fields']['consumer_secret']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['consumer_secret']['field'] = 'consumer_secret';
  $handler->display->display_options['fields']['consumer_secret']['exclude'] = TRUE;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = 'Credentials';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div>API Key: [consumer_key]</div>
<div>Consumer Secret: [consumer_secret]</div>';
  /* Field: DP: Created */
  $handler->display->display_options['fields']['created_at']['id'] = 'created_at';
  $handler->display->display_options['fields']['created_at']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['created_at']['field'] = 'created_at';
  $handler->display->display_options['fields']['created_at']['date_format'] = 'short';
  $handler->display->display_options['fields']['created_at']['second_date_format'] = 'long';
  /* Field: DP: Modified */
  $handler->display->display_options['fields']['modified_at']['id'] = 'modified_at';
  $handler->display->display_options['fields']['modified_at']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['modified_at']['field'] = 'modified_at';
  $handler->display->display_options['fields']['modified_at']['date_format'] = 'short';
  $handler->display->display_options['fields']['modified_at']['second_date_format'] = 'long';
  /* Field: DP: Credential Expires */
  $handler->display->display_options['fields']['credential_expiry']['id'] = 'credential_expiry';
  $handler->display->display_options['fields']['credential_expiry']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['credential_expiry']['field'] = 'credential_expiry';
  $handler->display->display_options['fields']['credential_expiry']['date_format'] = 'short';
  $handler->display->display_options['fields']['credential_expiry']['second_date_format'] = 'long';
  /* Field: DP: Key Expires */
  $handler->display->display_options['fields']['key_expiry']['id'] = 'key_expiry';
  $handler->display->display_options['fields']['key_expiry']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['key_expiry']['field'] = 'key_expiry';
  $handler->display->display_options['fields']['key_expiry']['empty'] = 'never';
  $handler->display->display_options['fields']['key_expiry']['empty_zero'] = TRUE;
  $handler->display->display_options['fields']['key_expiry']['date_format'] = 'short';
  $handler->display->display_options['fields']['key_expiry']['second_date_format'] = 'long';
  /* Field: DP: Organisation name */
  $handler->display->display_options['fields']['org_name']['id'] = 'org_name';
  $handler->display->display_options['fields']['org_name']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['org_name']['field'] = 'org_name';
  $handler->display->display_options['fields']['org_name']['exclude'] = TRUE;
  /* Field: DP: Credential Status */
  $handler->display->display_options['fields']['credential_status']['id'] = 'credential_status';
  $handler->display->display_options['fields']['credential_status']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['credential_status']['field'] = 'credential_status';
  $handler->display->display_options['fields']['credential_status']['exclude'] = TRUE;
  /* Field: DP: Status */
  $handler->display->display_options['fields']['app_status']['id'] = 'app_status';
  $handler->display->display_options['fields']['app_status']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['app_status']['field'] = 'app_status';
  /* Field: DP: Status modified by */
  $handler->display->display_options['fields']['app_status_modified_by']['id'] = 'app_status_modified_by';
  $handler->display->display_options['fields']['app_status_modified_by']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['app_status_modified_by']['field'] = 'app_status_modified_by';
  /* Field: DP: Edit */
  $handler->display->display_options['fields']['edit']['id'] = 'edit';
  $handler->display->display_options['fields']['edit']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['edit']['field'] = 'edit';
  $handler->display->display_options['fields']['edit']['label'] = '';
  $handler->display->display_options['fields']['edit']['element_label_colon'] = FALSE;
  /* Field: DP: App UUID */
  $handler->display->display_options['fields']['app_id']['id'] = 'app_id';
  $handler->display->display_options['fields']['app_id']['table'] = 'dp_app_dashboard';
  $handler->display->display_options['fields']['app_id']['field'] = 'app_id';
  $handler->display->display_options['fields']['app_id']['exclude'] = TRUE;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'app-dashboard';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'App Dashboard';
  $handler->display->display_options['menu']['name'] = 'management';
  $export['dp_app_dashboard'] = $view;

  return $export;
}
