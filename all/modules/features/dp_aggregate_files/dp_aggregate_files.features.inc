<?php
/**
 * @file
 * dp_aggregate_files.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function dp_aggregate_files_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
