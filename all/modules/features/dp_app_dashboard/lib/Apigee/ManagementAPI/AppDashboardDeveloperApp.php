<?php

namespace Apigee\ManagementAPI;

/**
 * Class AppDashboardDeveloperApp
 *
 * @package Apigee\ManagementAPI
 */
class AppDashboardDeveloperApp extends DeveloperApp {

  /**
   * Update credential key status of the given API Product.
   *
   * @param string $api_product_name
   *   Name of the API Product.
   * @param string $status
   *   Eitherapprove or revoke.
   */
  public function setAPIProductKeyStatus($api_product_name, $status) {
    $base_url = rawurlencode($this->getName()) . '/keys/' . rawurlencode($this->getConsumerKey());
    if (in_array($api_product_name,  $this->getApiProducts())) {
      $product_url = $base_url . '/apiproducts/' . rawurlencode($api_product_name) . '?action=' . $status;
      $this->post($product_url);
    }
  }
}
