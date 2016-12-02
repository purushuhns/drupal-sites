<?php

/**
 * @file
 * Definition of dp_bu_business_unit_managers_access_plugin.
 */

/**
 * The base plugin to handle Business Unit managers access.
 *
 * @ingroup views_access_plugins
 */
class dp_bu_business_unit_managers_access_plugin extends views_plugin_access {

  /**
   * {@inheritdoc}
   */
  function access($account) {
    return _dp_bu_business_unit_managers_access_plugin($account);
  }

  /**
   * {@inheritdoc}
   */
  function get_access_callback() {
    return array('_dp_bu_business_unit_managers_access_plugin', array());
  }
  
  /**
   * {@inheritdoc}
   */
  function summary_title() {
    return t('DP: Business Units: Business Unit managers');
  }

}
