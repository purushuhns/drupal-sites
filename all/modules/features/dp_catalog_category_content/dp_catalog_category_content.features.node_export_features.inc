<?php
/**
 * @file
 * dp_catalog_category_content.features.node_export_features.inc
 */

/**
 * Implements hook_node_export_features_default().
 */
function dp_catalog_category_content_node_export_features_default() {
  $node_export = array(
  'code_string' => 'array(
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_category_image\' => array(),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Digital Marketing Platform\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_category\',
      \'uid\' => \'561\',
      \'uuid\' => \'07d4add2-e505-456d-8de8-f3c6b0d35d3a\',
      \'vid\' => NULL,
      \'vuuid\' => \'392569e5-a95e-4709-a9b6-59d379b499d8\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'127\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'129\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Sanction Nashdoc API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'0f4f88fe-84c3-4cb2-802d-a781095a394f\',
      \'vid\' => NULL,
      \'vuuid\' => \'311b078c-47aa-4d0d-97b4-c5e223015598\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'122\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'166\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Life Template API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'11586c9c-f98f-48a3-8783-b1db001626a4\',
      \'vid\' => NULL,
      \'vuuid\' => \'98f77b98-0425-4edc-b1b4-ad0b3c646b01\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'122\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'169\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Life Logging API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'2b396715-719c-4685-974e-990998e8ada6\',
      \'vid\' => NULL,
      \'vuuid\' => \'a1f1c12c-749b-418e-85d3-aaa58e566f15\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_category_image\' => array(),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Communication Manager\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_category\',
      \'uid\' => \'561\',
      \'uuid\' => \'45daee3a-7326-4dfc-90ac-1e201cd5f25b\',
      \'vid\' => NULL,
      \'vuuid\' => \'85c08b41-d8e4-4973-8aef-bfd359aa021e\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'122\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'165\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Life Notifications API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'52b8072a-f9e4-4a00-80a5-f43ad73b9ff6\',
      \'vid\' => NULL,
      \'vuuid\' => \'2fec7b39-4510-4a9c-8686-59533631fc19\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'124\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'187\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Digital Security Utility Platform API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'5a4b0eb4-5263-496c-afd0-5e960e28cae3\',
      \'vid\' => NULL,
      \'vuuid\' => \'10686c29-262a-4891-9323-1b3e33f64408\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_category_image\' => array(),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Product Configuration\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_category\',
      \'uid\' => \'561\',
      \'uuid\' => \'7aa486c6-eb86-43f7-9cf5-95a2dd928626\',
      \'vid\' => NULL,
      \'vuuid\' => \'d4fb9b0e-dd51-45d2-b7b5-0cde5609142d\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_category_image\' => array(),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Carrier\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_category\',
      \'uid\' => \'561\',
      \'uuid\' => \'89922eeb-56e1-40e2-a958-93f49b39b650\',
      \'vid\' => NULL,
      \'vuuid\' => \'021d0d43-3c90-409f-8285-28edecc07131\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'126\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'196\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Product Configuration API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'925dd1df-7c23-4eb7-96d4-272ada224720\',
      \'vid\' => NULL,
      \'vuuid\' => \'9ba5298f-25ba-4098-99f4-06153a72e7a0\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'122\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'171\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Life Email API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'a33dfc97-d86c-4eec-93b5-69b7045c469b\',
      \'vid\' => NULL,
      \'vuuid\' => \'d06d43e3-74e0-4b86-ad92-3a16afd39446\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'125\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'197\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Direct Quote API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'b6c76c88-1c5a-4e84-aa9f-4ecc31ef1f75\',
      \'vid\' => NULL,
      \'vuuid\' => \'8a5a3533-abbc-4166-9dba-05659b9e8a1a\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'122\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'170\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Life Events API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'bd8aaed8-ad9d-4f54-ac87-548cc6da7b0e\',
      \'vid\' => NULL,
      \'vuuid\' => \'789b8f74-7448-4268-93e7-c441274204a3\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_category_image\' => array(),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Sanction\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_category\',
      \'uid\' => \'561\',
      \'uuid\' => \'c9df0029-9be8-44b4-aa8c-d493212f264e\',
      \'vid\' => NULL,
      \'vuuid\' => \'318165a4-2dbb-4129-904b-ba20b477eeb6\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'122\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'172\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Life Communication Channel API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'cf0ebfd1-a2a8-489d-8706-0a4826940d99\',
      \'vid\' => NULL,
      \'vuuid\' => \'517133fa-6acc-4037-89ad-a5da6cc478ca\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'121\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'154\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Carrier API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'d6e9a537-bf0c-4a49-bc42-01eb2d337f79\',
      \'vid\' => NULL,
      \'vuuid\' => \'9fac37c0-7ade-42d3-ac04-5d8cc2c56b18\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_category_image\' => array(),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Direct Quote\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_category\',
      \'uid\' => \'561\',
      \'uuid\' => \'e19ea7bd-50a1-4a18-985d-137bd08aa5df\',
      \'vid\' => NULL,
      \'vuuid\' => \'b5867565-0acb-4add-9f61-9c0bcb2064ae\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'123\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'92\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'26\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Digital Marketing Platform API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'e4e481e5-43e5-4aa2-9d39-22c965fbcc2d\',
      \'vid\' => NULL,
      \'vuuid\' => \'4d034d19-509f-444a-b588-fcab6dfa039f\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'122\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'168\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Life Message Queue API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'eb8b05a9-a809-40e4-878c-974f857d665b\',
      \'vid\' => NULL,
      \'vuuid\' => \'0073ca20-ce43-47f5-a97d-c92d823cab8f\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'122\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'167\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Life Schedule API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'f3556249-9a6e-4b5a-a958-1bb272c27611\',
      \'vid\' => NULL,
      \'vuuid\' => \'31e2810e-609e-45e9-94c1-b835ecf111cf\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_api_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'127\',
          ),
        ),
      ),
      \'field_api_documents\' => array(),
      \'field_api_entry_image\' => array(),
      \'field_api_model\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'131\',
          ),
        ),
      ),
      \'field_api_type\' => array(
        \'und\' => array(
          array(
            \'value\' => \'REST\',
          ),
        ),
      ),
      \'field_api_version\' => array(
        \'und\' => array(
          array(
            \'value\' => \'16.00\',
          ),
        ),
      ),
      \'field_code_samples\' => array(),
      \'field_lifecycle_stage\' => array(
        \'und\' => array(
          array(
            \'value\' => \'In Review\',
          ),
        ),
      ),
      \'field_support_forum\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'34\',
          ),
        ),
      ),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Sanction FIlterdoc API\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_entry\',
      \'uid\' => \'561\',
      \'uuid\' => \'f3cbfd7a-9eca-467a-a38a-07b77edd09a3\',
      \'vid\' => NULL,
      \'vuuid\' => \'00f82ba5-2e62-4c0d-816b-1f11a7b19134\',
    ),
  (object) array(
      \'body\' => array(),
      \'changed\' => NULL,
      \'cid\' => \'0\',
      \'comment\' => \'2\',
      \'comment_count\' => \'0\',
      \'created\' => NULL,
      \'data\' => \'a:5:{s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'field_category_image\' => array(),
      \'files\' => array(),
      \'language\' => \'und\',
      \'last_comment_name\' => NULL,
      \'last_comment_timestamp\' => NULL,
      \'last_comment_uid\' => \'121\',
      \'log\' => \'\',
      \'menu\' => NULL,
      \'name\' => \'shweta\',
      \'nid\' => NULL,
      \'node_export_drupal_version\' => \'7\',
      \'path\' => NULL,
      \'picture\' => \'0\',
      \'promote\' => \'1\',
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'revision_timestamp\' => NULL,
      \'revision_uid\' => \'561\',
      \'status\' => \'1\',
      \'sticky\' => \'0\',
      \'title\' => \'Digital Security Utility Platform\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'type\' => \'api_catalog_category\',
      \'uid\' => \'561\',
      \'uuid\' => \'f976218a-dd11-421f-b9dd-56eb3d832950\',
      \'vid\' => NULL,
      \'vuuid\' => \'2b2df20c-ef78-4b3d-a40c-31fdf8e745fb\',
    ),
)',
);
  return $node_export;
}
