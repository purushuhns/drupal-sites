<?php

/**
 * @file
 * Administration pages for DP: Business Unit: Smartdocs module.
 */

use Apigee\SmartDocs\Model;
use Apigee\SmartDocs\Revision;

require_once DRUPAL_ROOT . '/profiles/apigee/modules/custom/devconnect/smartdocs/smartdocs.admin.inc';

/**
 * API model listing page form for "Smartdocs for Business Units".
 *
 * @param \stdClass $node
 *   Business Unit node object.
 *
 * @return string
 *   Rendered content.
 */
function dp_bu_smartdocs_list_models_of_bu(stdClass $node) {
  // Remove helper variables from $_SESSION which introduced by
  // dp_bu_smartdocs_create_smartdocs_form_submit().
  if (isset($_GET['model'])) {
    unset($_SESSION[$_GET['model']]);
  }

  // TODO Should we use & bend the original output or start from scratch?
  $output = smartdocs_model_list();
  $api_models_of_bu = dp_bu_get_api_models_of_bu($node->nid);
  $output['table']['#rows'] = array_intersect_key($output['table']['#rows'], $api_models_of_bu);
  unset($output['add_model']);
  $output['table']['#empty'] = t('No model has been created yet. <a href="@new">Create a new model</a> or read the <a href="@doc" target="_blank">documentation</a> to get started.', array('@new' => url('node/' . $node->nid . '/smartdocs/create'), '@doc' => 'http://apigee.com/docs/developer-services/content/using-smartdocs-document-apis'));

  $operations = array(
    // TODO Finish these implementations.
    // 'revisions' => 'API Revisions',
    // 'add' => 'Add Revision',
    'import' => t('Import'),
    'settings' => t('Settings'),
    'export' => t('Export'),
    'delete' => t('Delete'),
  );

  foreach ($output['table']['#rows'] as $model_id => &$row) {
    if (isset($row[4])) {
      if (dp_bu_smartdocs_smartdocs_administer_model_access($node, $api_models_of_bu[$model_id]->toArray())) {
        foreach ($operations as $op => $disp) {
          $ops['list-' . $op] = array(
            'title' => $disp,
            'href' => 'node/' . $node->nid . '/smartdocs/models/' . $model_id . '/' . $op,
            'attributes' => array(
              'title' => $disp,
              // 'class' => array($op . '-' . $model->getName(), 'views-ajax-link'),
              'class' => array('views-ajax-link'),
            ),
          );
        }
        $row[4] = theme('links__ctools_dropbutton', array('links' => $ops));
      }
      else {
        $row[4] = '';
      }
    }
  }

  return $output;
}

/**
 * API model creation form for "Smartdocs for Business Units".
 */
function dp_bu_smartdocs_create_smartdocs_form(array $form, array &$form_state, stdClass $node) {
  $form['#org_config'] = devconnect_default_org_config();
  // Save breadcrumb to be able to restore it after original smartdocs functions
  // has been called.
  $breadcrumb = drupal_get_breadcrumb();
  $form = smartdocs_add_model($form, $form_state);
  // Pass an empty model array as a workaround.
  // Override title and restore original breadcrumb.
  drupal_set_title(t('Create Smartdocs model'));
  drupal_set_breadcrumb($breadcrumb);

  // Hide unnecessary from elements from smartdocs_add_model().
  unset($form['model_submit']);
  unset($form['model_name']);
  $form['model_name'] = array(
    '#type' => 'value',
    '#value' => '',
  );

  // We are going to need an empty model object to suppress errors.
  $model = new Model($form['#org_config']);
  $form += dp_bu_smartdocs_import_smartdocs_form($form, $form_state, $node, $model->toArray());

  // Hide unnecessary from elements from smartdocs_import_model().
  unset($form['import']);

  $form['actions'] = array(
    '#type' => 'actions',
    'submit' => array(
      '#type' => 'submit',
      '#value' => t('Create'),
      '#name' => 'create',
    ),
  );

  return $form;
}

/**
 * Validation handler for dp_bu_smartdocs_create_smartdocs_form().
 */
function dp_bu_smartdocs_create_smartdocs_form_validate(array $form, array &$form_state) {
  // Generate model name and prefix it with the name of the BU which it belongs
  // to.
  form_set_value($form['model_name'], _dp_bu_smartdocs_generate_unique_model_name($form_state['values']['display_name'], $form_state['build_info']['args'][0]->field_bu_name[LANGUAGE_NONE][0]['machine']), $form_state);
  // Call the original validation handler of smartdocs_add_model() form.
  smartdocs_add_model_validate($form, $form_state);
  // Call the original validation handler of smartdocs_import_model_validate()
  // form.
  dp_bu_smartdocs_import_smartdocs_form_validate($form, $form_state);
}

/**
 * Additional validation handler which should be executed before model import.
 *
 * Save Swagger file before smartdocs_model_import_submit() would be called.
 * We would like to attach Swagger file to model term to have a local
 * reference.
 */
function _dp_bu_smartdocs_validate_and_import_upload_file(array &$form_state) {
  // Do not validate anything on Upload type change.
  if ($form_state['triggering_element']['#name'] == 'upload_type') {
    return;
  }
  $form_state['build_info']['args']['file'] = NULL;
  $valid_exts = array('json', 'xml', 'yaml');
  if ($form_state['values']['upload_type'] == 'url' && !empty($form_state['values']['url'])) {
    $file_path = system_retrieve_file($form_state['values']['url'], DP_SMARTDOCS_MODEL_SOURCE_FOLDER_PATH);
    // Validate file extension, we do not validate the content of the file
    // here.
    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    if (!in_array($ext, $valid_exts)) {
      file_unmanaged_delete($file_path);
      form_set_error('url', t('"@ext" file extension is not valid. Valid file extensions: @valid.', array('@ext' => $ext, '@valid' => implode(',', $valid_exts))));
      return;
    }
    $file_name = $form_state['values']['model_name'] . '.' . $ext;
    $file_contents = file_get_contents($file_path);
    if ($file_contents) {
      $form_state['build_info']['file'] = file_save_data($file_contents, DP_SMARTDOCS_MODEL_SOURCE_FOLDER_PATH . '/' . $file_name);
      file_unmanaged_delete($file_path);
    }
  }
  else {
    // Validate file extension, we do not validate the content of the file
    // here.
    $ext = strtolower(pathinfo($_FILES['files']['name']['file'], PATHINFO_EXTENSION));
    if (!in_array($ext, $valid_exts)) {
      form_set_error('file', t('"@ext" file extension is not valid. Valid file extensions: @valid.', array('@ext' => $ext, '@valid' => implode(',', $valid_exts))));
      return;
    }
    if ($file = file_save_upload('file', array('file_validate_extensions' => array()), DP_SMARTDOCS_MODEL_SOURCE_FOLDER_PATH)) {
      // Make file permanent.
      $file->status = FILE_STATUS_PERMANENT;
      $file->filename = $form_state['values']['model_name'] . '.' . $ext;
      // Rename file.
      if ($source = file_unmanaged_move($file->uri, DP_SMARTDOCS_MODEL_SOURCE_FOLDER_PATH . '/' . $file->filename)) {
        $file->uri = $source;
        $form_state['build_info']['file'] = file_save($file);
      }
    }
  }

  if (!$form_state['build_info']['file']) {
    form_set_error('format][import][' . $form_state['values']['upload_type'], t('File import failed, please try again!'));
    return $form_state;
  }
  return $form_state;
}

/**
 * Submit handler for dp_bu_smartdocs_create_smartdocs_form().
 */
function dp_bu_smartdocs_create_smartdocs_form_submit(array $form, array &$form_state) {
  // Pass a flag to dp_bu_smartdocs_query_term_access_alter() to prevent
  // infinite loop caused by this custom term access implementation.
  // Therefore this alter, every time when a new model has been created by
  // a non-admin user, each load function which triggers this
  // hook_query_TAG_alter() implementation and trying to load
  // this newly created term (by name) is going to return
  // empty results, because newly created model terms has no Smartdocs
  // model node, therefore non-admin users cannot access to those terms.
  drupal_static(DP_BU_SMARTDOCS_DANGEROUS_TERM_ACCESS_CHECK_OPT_OUT, TRUE);

  // Pass extra info to hook_taxonomy_term_presave() implementations.
  $model_term_extra = &drupal_static('dp_bu_smartdocs_taxonomy_term_presave:' . $form_state['values']['model_name'], array());
  $model_term_extra['business_unit'] = $form_state['values']['business_unit'];
  $model_term_extra['api_products'] = array_values($form_state['values']['api_products']);
  $model_term_extra['file'] = $form_state['build_info']['file'];

  smartdocs_add_model_submit($form, $form_state);

  // It seems creation was successful.
  if (isset($form_state['values']['model_id'])) {
    // smartdocs_import_model_submit() requires model_uuid.
    $form_state['values']['model_uuid'] = $form_state['values']['model_id'];
    dp_bu_smartdocs_import_smartdocs_form_submit($form, $form_state);
  }
  else {
    drupal_set_message(t('Smartdocs model cannot be created, please try again!'), 'error');
  }
}

/**
 * API model import form for "Smartdocs for Business Units".
 *
 * @param \stdClass $node
 *   Business Unit node object.
 * @param array $model_array
 *   API model as an array.
 */
function dp_bu_smartdocs_import_smartdocs_form($form, &$form_state, stdClass $node, array $model_array) {
  $form['#org_config'] = devconnect_default_org_config();
  // Save original breadcrumb, before smartdocs_import_model would override it.
  $breadcrumb = drupal_get_breadcrumb();
  $import_form = smartdocs_import_model($form, $form_state, $model_array);
  // Restore original breadcrumb.
  drupal_set_breadcrumb($breadcrumb);

  $business_unit_options = array_map(function ($node) {
    return $node->title;
  }, node_load_multiple(dp_bu_get_business_units_by_user()));

  $form['business_unit'] = array(
    '#type' => 'select',
    '#required' => TRUE,
    '#title' => t('Business Unit'),
    '#default_value' => isset($form_state['values']['business_unit']) ? $form_state['values']['business_unit'] : $node->nid,
    '#empty_option' => t('- Select -'),
    '#options' => $business_unit_options,
    '#disabled' => TRUE,
  );

  $api_product_options = array_map(function ($product) {
    /** @var \Drupal\devconnect_developer_apps\ApiProductEntity $product */
    return $product->displayName;
  }, dp_bu_get_api_products_of_business_unit($node->field_bu_name[LANGUAGE_NONE][0]['machine']));

  $associated_api_products = dp_bu_smartdocs_get_api_products_of_model_term_by_name($model_array['name']);

  $form['api_products'] = array(
    '#type' => 'select',
    '#required' => TRUE,
    '#title' => t('API Product(s)'),
    '#description' => t('Associate API Product(s) which belongs to this Business Unit.'),
    '#empty_option' => t('- Select -'),
    '#options' => $api_product_options,
    '#default_value' => isset($form_state['values']['api_products']) ? $form_state['values']['api_products'] : $associated_api_products,
    '#disabled' => !empty($associated_api_products),
    '#multiple' => TRUE,
  );

  $form['model_name'] = array(
    '#type' => 'value',
    '#value' => _dp_bu_smartdocs_generate_unique_model_name($model_array['displayName'], $node->field_bu_name[LANGUAGE_NONE][0]['machine']),
  );

  $form += $import_form;

  $model_term = dp_smartdocs_get_smartdocs_model_term_by_model_name($model_array['name']);
  if ($model_term) {
    // TODO Find a way to display current value when an existing API edited.
    // File form element has no #default_value.
    // https://api.drupal.org/api/drupal/developer%21topics%21forms_api_reference.html/7.x#file
  }

  return $form;
}

/**
 * Custom validation handler for dp_bu_smartdocs_import_smartdocs_form().
 */
function dp_bu_smartdocs_import_smartdocs_form_validate($form, &$form_state) {
  // Call the original validation handler of smartdocs_import_model_validate()
  // form.
  smartdocs_import_model_validate($form, $form_state);
  _dp_bu_smartdocs_validate_and_import_upload_file($form_state);
}

/**
 * Custom submission handler for dp_bu_smartdocs_import_smartdocs_form().
 */
function dp_bu_smartdocs_import_smartdocs_form_submit($form, &$form_state) {
  smartdocs_import_model_submit($form, $form_state);

  // Reload the model to get the latest revision after import.
  $model = new Model($form['#org_config']);
  $model->load($form_state['values']['model_uuid']);
  $model_array = $model->toArray();
  $revision = new Revision($form['#org_config'], $model->getUuid());
  if ($model->getLatestRevisionNumber() > 0) {
    try {
      $revision->load($model->getLatestRevisionNumber());
      $revision_array = smartdocs_prepare_revision($revision);
      $form_state['values']['revision'] = $revision;
      $form_state['values']['model'] = $model_array;
      $form_state['values']['operation'] = 'render_publish_nodes';
      $form_state['values']['methods'] = array();
      foreach ($revision_array['resources'] as $resource) {
        foreach ($resource['methods'] as $method) {
          $form_state['values']['methods'][$method['id']] = $method['id'];
        }
      }
      // Pass extra info to hook_smartdocs_method_node_presave()
      // implementations.
      $_SESSION[$model->getUuid()] = array();
      $_SESSION[$model->getUuid()]['dp_bu_smartdocs'] = array();
      $_SESSION[$model->getUuid()]['dp_bu_smartdocs']['business_unit'] = $form_state['values']['business_unit'];
      $_SESSION[$model->getUuid()]['dp_bu_smartdocs']['api_products'] = array_values($form_state['values']['api_products']);
      $_SESSION[$model->getUuid()]['dp_bu_smartdocs']['file'] = $form_state['build_info']['file'];
      // Render and publish smartdocs nodes.
      smartdocs_revision_detail_submit(array(), $form_state);
      // Pass model id to be able to remove helper variables from $_SESSION
      // after overall process has been finished successfully.
      $form_state['redirect'] = array(
        'node/' . $form_state['values']['business_unit'] . '/smartdocs',
        array(
          'query' => array(
            'model' => $form_state['values']['model_uuid'],
          ),
        ),
      );
    }
    catch (Exception $e) {
      file_delete($form_state['build_info']['file']);
      $form_state['redirect'] = 'node/' . $form_state['values']['business_unit'] . '/smartdocs';
    }
  }
}

/**
 * API model settings form for "Smartdocs for Business Units".
 *
 * @param \stdClass $node
 *   Business Unit node object.
 * @param array $model_array
 *   API model as an array.
 */
function dp_bu_smartdocs_model_settings_form($form, &$form_state, stdClass $node, array $model_array) {
  // Save original title & breadcrumb.
  $breadcrumb = drupal_get_breadcrumb();
  $title = drupal_get_title();
  // Based on smartdocs_model_settings_page().
  $form = drupal_get_form('smartdocs_model_settings', $model_array);
  $form += drupal_get_form('smartdocs_model_template_auth', $model_array);
  // Restore original title & breadcrumb.
  drupal_set_title($title);
  drupal_set_breadcrumb($breadcrumb);

  $form['#node'] = $node;

  $new_path = 'node/' . $node->nid . '/smartdocs/models';
  // Replace original links which would lead back the original SM admin
  // interfaces.
  if (isset($form['error'])) {
    $form['error']['#markup'] = str_replace(DP_BU_SMARTDOCS_OLD_ADMIN_MODEL_PATH_PREFIX, $new_path, $form['error']['#markup']);
  }

  $form['actions']['revert']['#markup'] = str_replace(DP_BU_SMARTDOCS_OLD_ADMIN_MODEL_PATH_PREFIX, $new_path, $form['actions']['revert']['#markup']);
  array_push($form['#submit'], 'dp_bu_smartdocs_model_settings_form_submit');

  return $form;
}

/**
 * Custom submission handler for dp_bu_smartdocs_model_settings_form().
 */
function dp_bu_smartdocs_model_settings_form_submit($form, &$form_state) {
  // Enforce redirection back to "Smartdocs for Business Units" admin interface.
  $form_state['redirect'] = 'node/' . $form['#node']->nid . '/smartdocs/models/settings';
}

/**
 * API model template revert form for "Smartdocs for Business Units".
 *
 * @param \stdClass $node
 *   Business Unit node object.
 * @param array $model_array
 *   API model as an array.
 */
function dp_bu_smartdocs_model_revert_template_form($form, &$form_state, stdClass $node, array $model_array) {
  $form = smartdocs_model_revert_template($form, $form_state, $model_array);
  $new_path = 'node/' . $node->nid . '/smartdocs/models';
  // Replace original link which would lead back the original SM admin
  // interface.
  $form['actions']['cancel']['#href'] = str_replace(DP_BU_SMARTDOCS_OLD_ADMIN_MODEL_PATH_PREFIX, $new_path, $form['actions']['cancel']['#href']);
  return $form;
}

/**
 * API model export form for "Smartdocs for Business Units".
 *
 * @param \stdClass $node
 *   Business Unit node object.
 * @param array $model_array
 *   API model as an array.
 */
function dp_bu_smartdocs_model_export_form($form, &$form_state, stdClass $node, array $model_array) {
  // Save original breadcrumb.
  $breadcrumb = drupal_get_breadcrumb();
  // TODO Eliminate drupal_goto(), before original form would be called.
  $form = smartdocs_model_export($form, $form_state, $model_array);
  // Restore original breadcrumb.
  drupal_set_breadcrumb($breadcrumb);
  $form['#submit'] = array('smartdocs_model_export_submit');
  return $form;
}

/**
 * API model removal form for "Smartdocs for Business Units".
 *
 * @param \stdClass $node
 *   Business Unit node object.
 * @param array $model_array
 *   API model as an array.
 */
function dp_bu_smartdocs_model_delete_form($form, &$form_state, stdClass $node, array $model_array) {
  // Save original breadcrumb.
  $breadcrumb = drupal_get_breadcrumb();
  $form = smartdocs_model_delete($form, $form_state, $model_array);
  // Restore original breadcrumb.
  drupal_set_breadcrumb($breadcrumb);
  $form['#node'] = $node;
  $form['actions']['cancel']['#href'] = 'node/' . $form['#node']->nid . '/smartdocs';
  return $form;
}

/**
 * Custom submission handler for dp_bu_smartdocs_model_delete_form().
 */
function dp_bu_smartdocs_model_delete_form_submit($form, &$form_state) {
  smartdocs_model_delete_submit($form, $form_state);
  // Enforce redirection back to "Smartdocs for Business Units" admin interface.
  $form_state['redirect'] = 'node/' . $form['#node']->nid . '/smartdocs';
}
