<?php

/**
 * @file
 * Definition of dp_bu_my_apis_access_plugin.
 */

/**
 * The base plugin to handle Business Unit managers access.
 *
 * @ingroup views_access_plugins
 */
 class dp_bu_my_apis_access_plugin extends views_plugin_access {

  /**
   * {@inheritdoc}
   */
   function access($account) {
    return _dp_bu_my_apis_access_plugin($account);
  } 

  /**
   * {@inheritdoc}
   */
  function get_access_callback() {
    return array('_dp_bu_my_apis_access_plugin', array());
  }
  
  /**
   * {@inheritdoc}
   */
  function summary_title() {
    return t('DP: My APIs: My APIs Access');
  }

}
 