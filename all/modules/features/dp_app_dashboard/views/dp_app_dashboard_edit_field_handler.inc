<?php

/**
 * Class dp_app_dashboard_edit_field_handler to handle edit links.
 */
class dp_app_dashboard_edit_field_handler extends views_handler_field {

  /**
   * {@inheritdoc}
   */
  function query() {
    $this->add_additional_fields();
  }

  /**
   * {@inheritdoc}
   */
  function render($values) {
    // Include the CTools tools that we need.
    ctools_include('ajax');
    ctools_include('modal');

    // Add CTools' JavaScript to the page.
    ctools_modal_add_js();
    drupal_add_js(array(
      'app-modal-style' => array(
        'modalSize' => array(
          'type' => 'fixed',
          'width' => 560,
          'height' => 'auto',
        ),
      ),
      'CToolsModal' => array(
        'closeText' => t(''),
      ),
    ), 'setting');

    $url = implode('/', array(
      DP_APP_DASHBOARD_VIEW_PATH . '/edit-app/nojs',
      $values->dp_app_dashboard_email,
      $values->app_id,
      $values->dp_app_dashboard_api_product,
    ));

    // Because ctools_modal_text_button() does not support custom token
    // validation, we need to render an ajax link manually.
    drupal_add_library('system', 'drupal.ajax');
    return l(t('Edit'), $url, array(
      'query' => array(
        'token' => drupal_get_token(DP_APP_DASHBOARD_EDIT_APP_MODEL_TOKEN),
      ),
      'html' => TRUE,
      'attributes' => array(
        'class' => array('ctools-use-modal', 'ctools-modal-app-modal-style'),
      ),
    ));
  }

}
