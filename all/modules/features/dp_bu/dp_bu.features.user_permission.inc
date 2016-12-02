<?php
/**
 * @file
 * dp_bu.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function dp_bu_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer group'.
  $permissions['administer group'] = array(
    'name' => 'administer group',
    'roles' => array(
      'administrator' => 'administrator',
      'platform owner' => 'platform owner',
    ),
    'module' => 'og',
  );

  return $permissions;
}
