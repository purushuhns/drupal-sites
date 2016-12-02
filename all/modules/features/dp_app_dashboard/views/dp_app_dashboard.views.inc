<?php

/**
 * @file
 * Views integration for dp_app_dashboard's custom tables.
 */

/**
 * Implements hook_views_data().
 */
function dp_app_dashboard_views_data() {
  return array(
    'dp_app_dashboard' => array(
      'table' => array(
        'group' => t('DP'),
        'base' => array(
          'field' => 'app_id',
          'title' => t('App dashboard'),
          'help' => t('App dashboard table.'),
        ),
      ),
      'name' => array(
        'title' => t('App Name'),
        'help' => t('Internal or machine-readable name of the app.'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'views_handler_filter_string'),
        'argument' => array('handler' => 'views_handler_argument_string'),
      ),
      'app_id' => array(
        'title' => t('App UUID'),
        'help' => t('Universally unique identifier for an app'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'views_handler_filter_string'),
        'argument' => array('handler' => 'views_handler_argument_string'),
      ),
      'email' => array(
        'title' => t('Developer Email'),
        'help' => t('Email of developer who created this app.'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'views_handler_filter_string'),
        'argument' => array('handler' => 'views_handler_argument_string'),
        'relationship' => array(
          'base' => 'users',
          'base field' => 'mail',
          'label' => t('Developer'),
          'title' => t('Developer'),
          'help' => t('Relate app to the developer.'),
          'handler' => 'views_handler_relationship',
        ),
      ),
      'display_name' => array(
        'title' => t('Display Name'),
        'help' => t('Human-readable name of the app.'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'views_handler_filter_string'),
        'argument' => array('handler' => 'views_handler_argument_string'),
      ),
      'consumer_key' => array(
        'title' => t('API Key'),
        'help' => t('Consumer key used when authenticating with the API.'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'views_handler_filter_string'),
        'argument' => array('handler' => 'views_handler_argument_string'),
      ),
      'consumer_secret' => array(
        'title' => t('Consumer Secret'),
        'help' => t('Consumer secret key used when authenticating with the API.'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'views_handler_filter_string'),
        'argument' => array('handler' => 'views_handler_argument_string'),
      ),
      'overall_status' => array(
        'title' => t('Overall Status'),
        'help' => t('Overall status (App, Credential and API Product).'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'dda_handler_filter_status'),
        'argument' => array('handler' => 'views_handler_argument_numeric'),
      ),
      'app_status' => array(
        'title' => t('Status'),
        'help' => t('Indicates whether an App is in pending, approved or revoked status.'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'dda_handler_filter_status'),
        'argument' => array('handler' => 'views_handler_argument_numeric'),
      ),
      'credential_status' => array(
        'title' => t('Credential Status'),
        'help' => t("Indicates whether an app's Credential is in pending, approved or revoked status."),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'dda_handler_filter_status'),
        'argument' => array('handler' => 'views_handler_argument_numeric'),
      ),
      'created_at' => array(
        'title' => t('Created'),
        'help' => t('Indicates when the app was first created.'),
        'field' => array(
          'handler' => 'views_handler_field_date',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort_date'),
        'filter' => array('handler' => 'views_handler_filter_date'),
        'argument' => array('handler' => 'views_handler_argument_date'),
      ),
      'modified_at' => array(
        'title' => t('Modified'),
        'help' => t('Indicates when the app was last modified.'),
        'field' => array(
          'handler' => 'views_handler_field_date',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort_date'),
        'filter' => array('handler' => 'views_handler_filter_date'),
        'argument' => array('handler' => 'views_handler_argument_date'),
      ),
      'org_name' => array(
        'title' => t('Organisation name'),
        'help' => t('Name of the organisation which this developer app belongs to.'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'views_handler_filter_string'),
        'argument' => array('handler' => 'views_handler_argument_string'),
      ),
      'api_product' => array(
        'title' => t('API Product'),
        'help' => t('Machine name of the API Product, which this application belongs to.'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'views_handler_filter_string'),
        'argument' => array('handler' => 'views_handler_argument_string'),
        'relationship' => array(
          'base' => 'ad_api_products',
          'base field' => 'name',
          'label' => t('Edge API Product'),
          'title' => t('Edge API Product'),
          'help' => t('Relate app to the cached Edge API Product.'),
          'handler' => 'views_handler_relationship',
        ),
      ),
      'key_expiry' => array(
        'title' => t('Key Expires'),
        'help' => t('Indicates when the app will expire'),
        'field' => array(
          'handler' => 'views_handler_field_date',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort_date'),
        'filter' => array('handler' => 'views_handler_filter_date'),
        'argument' => array('handler' => 'views_handler_argument_date'),
      ),
      'credential_expiry' => array(
        'title' => t('Credential Expires'),
        'help' => t('Indicates when the app credentials will expire.'),
        'field' => array(
          'handler' => 'views_handler_field_date',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort_date'),
        'filter' => array('handler' => 'views_handler_filter_date'),
        'argument' => array('handler' => 'views_handler_argument_date'),
      ),
      'app_status_modified_by' => array(
        'title' => t('Status modified by'),
        'help' => t('Email address of the user who modified the status of the app last time.'),
        'field' => array(
          'handler' => 'views_handler_field',
          'click sortable' => TRUE,
        ),
        'sort' => array('handler' => 'views_handler_sort'),
        'filter' => array('handler' => 'views_handler_filter_string'),
        'argument' => array('handler' => 'views_handler_argument_string'),
      ),
      'edit' => array(
        'field' => array(
          'title' => t('Edit'),
          'help' => t('Edit state of the app.'),
          'handler' => 'dp_app_dashboard_edit_field_handler',
        ),
      ),
    ),
  );
}
