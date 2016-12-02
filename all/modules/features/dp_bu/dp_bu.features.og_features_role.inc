<?php
/**
 * @file
 * dp_bu.features.og_features_role.inc
 */

/**
 * Implements hook_og_features_default_roles().
 */
function dp_bu_og_features_default_roles() {
  $roles = array();

  // Exported OG Role: 'node:business_unit:API developer'.
  $roles['node:business_unit:API developer'] = array(
    'gid' => 0,
    'group_type' => 'node',
    'group_bundle' => 'business_unit',
    'name' => 'API developer',
  );

  // Exported OG Role: 'node:business_unit:partner'.
  $roles['node:business_unit:partner'] = array(
    'gid' => 0,
    'group_type' => 'node',
    'group_bundle' => 'business_unit',
    'name' => 'partner',
  );

  // Exported OG Role: 'node:business_unit:product manager'.
  $roles['node:business_unit:product manager'] = array(
    'gid' => 0,
    'group_type' => 'node',
    'group_bundle' => 'business_unit',
    'name' => 'product manager',
  );

  return $roles;
}
