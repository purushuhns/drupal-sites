<?php
/**
 * @file
 * dp_catalog_category_content.features.uuid_term.inc
 */

/**
 * Implements hook_uuid_features_default_terms().
 */
function dp_catalog_category_content_uuid_features_default_terms() {
  $terms = array();

  $terms[] = array(
    'name' => 'Communication Manager',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => '0fc9c027-2eef-465f-afb7-65ece631feb9',
    'vocabulary_machine_name' => 'api_category',
    'path' => array(
      'pathauto' => 0,
    ),
    'url_alias' => array(
      0 => array(
        'alias' => 'api-category/communication-manager',
        'language' => 'und',
      ),
    ),
  );
  $terms[] = array(
    'name' => 'Sanction',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => '2d4d639e-b0f0-4fb6-9398-860b4f1f6409',
    'vocabulary_machine_name' => 'api_category',
    'path' => array(
      'pathauto' => 0,
    ),
    'url_alias' => array(
      0 => array(
        'alias' => 'api-category/sanction',
        'language' => 'und',
      ),
    ),
  );
  $terms[] = array(
    'name' => 'Life Insurance',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => '4713e042-7f69-4703-b01b-8311dc443c80',
    'vocabulary_machine_name' => 'api_category',
    'url_alias' => array(
      0 => array(
        'alias' => 'api-category/life-insurance',
        'language' => 'und',
      ),
    ),
  );
  $terms[] = array(
    'name' => 'Travel Insurance',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => '9770c6a9-59f6-4351-a813-675428169a57',
    'vocabulary_machine_name' => 'api_category',
    'url_alias' => array(
      0 => array(
        'alias' => 'api-category/travel-insurance',
        'language' => 'und',
      ),
    ),
  );
  $terms[] = array(
    'name' => 'Carrier',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => '9d919c83-d7cd-43f8-b0af-d9d092776869',
    'vocabulary_machine_name' => 'api_category',
    'path' => array(
      'pathauto' => 0,
    ),
    'url_alias' => array(
      0 => array(
        'alias' => 'api-category/carrier',
        'language' => 'und',
      ),
    ),
  );
  $terms[] = array(
    'name' => 'Direct Quote',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => 'b9729748-1e01-47d2-861d-a62fc329845d',
    'vocabulary_machine_name' => 'api_category',
    'path' => array(
      'pathauto' => 0,
    ),
    'url_alias' => array(
      0 => array(
        'alias' => 'api-category/direct-quote',
        'language' => 'und',
      ),
    ),
  );
  $terms[] = array(
    'name' => 'Digital Marketing Platform',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => 'c4979605-40ea-4db8-a283-0e7da494b782',
    'vocabulary_machine_name' => 'api_category',
    'path' => array(
      'pathauto' => 0,
    ),
    'url_alias' => array(
      0 => array(
        'alias' => 'api-category/dmp',
        'language' => 'und',
      ),
    ),
  );
  $terms[] = array(
    'name' => 'Product Configuration',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => 'c5b7ff67-08a2-458d-bf6f-22a853b5b2bf',
    'vocabulary_machine_name' => 'api_category',
    'path' => array(
      'pathauto' => 0,
    ),
    'url_alias' => array(
      0 => array(
        'alias' => 'api-category/product-configuration',
        'language' => 'und',
      ),
    ),
  );
  $terms[] = array(
    'name' => 'Digital Securtiy Utility Platform',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => 'f6d934bb-5b9c-4e7b-840c-d53077edb7e7',
    'vocabulary_machine_name' => 'api_category',
    'path' => array(
      'pathauto' => 0,
    ),
    'url_alias' => array(
      0 => array(
        'alias' => 'api-category/dsu',
        'language' => 'und',
      ),
    ),
  );
  return $terms;
}
