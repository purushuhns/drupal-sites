
<?php

function npr_preprocess_bootstrap_modal_forms(&$vars) {
  switch($vars['identifier']){
    case 'login':
      if (module_exists('openid')) {
        $vars['modal_form']['openid_identifier']['#prefix'] = '<div class="apigee-responsive-openidhide" style="display:none">';
        $vars['modal_form']['openid_identifier']['#suffix'] = '</div>';
      }
      $vars['sso'] = $vars['modal_form']['sso_buttons'];
      unset($vars['modal_form']['sso_buttons']);
      break;
    case 'register':
      $vars['sso'] = '';
      if (isset($vars['modal_form']['sign_in_with_google_apps'])) {
        $vars['sso'] = $vars['modal_form']['sign_in_with_google_apps']['#markup'];
        unset($vars['modal_form']['sign_in_with_google_apps']);
      }
      break;
  }
}

function npr_preprocess_page(&$vars) {
  $vars['user_menu'] = menu_tree('user-menu');
  $user_id = $vars['user']->uid;
  // Do we have a node?
  if (isset($vars['node'])) {

    // Ref suggestions cuz it's stupid long.
    $suggests = &$vars['theme_hook_suggestions'];

    // Get path arguments.
    $args = arg();
    // Remove first argument of "node".
    unset($args[0]);

    // Set type.
    $type = "page__type_{$vars['node']->type}";

    // Bring it all together.
    $suggests = array_merge(
      $suggests,
      array($type),
      theme_get_suggestions($args, $type)
    );

    $node = &$vars['node'];	
    $breadcrumb = $vars['breadcrumb'];
    if($node->type == "api_catalog_category") {
      $breadcrumb = array();
      $breadcrumb[] = l(t('Home'), '<front>');
      $breadcrumb[] = l(t('API Catalog'), 'apis');
      $breadcrumb[] = t($node -> title);
      drupal_set_breadcrumb($breadcrumb);
      $node->api_entries = get_api_entries($node->title, $vars);
    }
	elseif($node->type == "business_unit") {
      $breadcrumb[] = l(t('Home'), '<front>');
      $breadcrumb[] = l(t('Business Units'), 'business-units');
      $breadcrumb[] = t($node -> title);
      drupal_set_breadcrumb($breadcrumb);
	} 
	elseif($node->type == "smart_method") {
	  $taxonomy_term = $node->field_smart_method_model['und'][0]['taxonomy_term']->vocabulary_machine_name;
	  if($taxonomy_term == 'smartdocs_models') {
		$taxonomy_link = drupal_get_path_alias('taxonomy/term/'.$node->field_smart_method_model['und'][0]['tid']);
		$taxonomy_title = $node->field_smart_method_model['und'][0]['taxonomy_term']->field_model_display_name['und'][0]['value'];
		$breadcrumb[] = l(t('Home'), '<front>');
		$breadcrumb[] = l(t('API Library'), 'apilist');
		$breadcrumb[] = l(t($taxonomy_title),$taxonomy_link);
        $breadcrumb[] = t($node -> title);
        drupal_set_breadcrumb($breadcrumb);  
	  }else {
	    $breadcrumb[] = l(t('Home'), '<front>');
        $breadcrumb[] = t($node -> title);
        drupal_set_breadcrumb($breadcrumb);
	  }
	}
	elseif($node->type == "article") {
	  foreach($node->field_keywords['und'] as $tax){
	    $term = $tax['taxonomy_term']->name;
	  }
	  if(in_array('Tutorials',array($term))){
		$breadcrumb[] = l(t('Home'), '<front>');
	    $breadcrumb[] = l(t('How Tos'), 'how-tos');
        $breadcrumb[] = t($node -> title);
        drupal_set_breadcrumb($breadcrumb);	  
	  }else {
		$breadcrumb[] = l(t('Home'), '<front>');
        $breadcrumb[] = l(t('Blog'), 'blog');
        $breadcrumb[] = t($node -> title);
        drupal_set_breadcrumb($breadcrumb);
	  }
	}
	elseif($node->type == "blog_audio" || $node->type == "blog_video" || $node->type == "blog" || $node->type == "blog_image") {
	  $breadcrumb[] = l(t('Home'), '<front>');
      $breadcrumb[] = l(t('Blog'), 'blog');
      $breadcrumb[] = t($node -> title);
      drupal_set_breadcrumb($breadcrumb);
	}
	elseif($node->type == "faq" && arg(0) == "faqs") {
      $breadcrumb[] = l(t('Home'), '<front>');
	  $breadcrumb[] = l(t('FAQs'), 'faq-page');
	  $breadcrumb[] = t($node -> title);
	  drupal_set_breadcrumb($breadcrumb);  
    } 
	else {
	  $breadcrumb = array();
      $breadcrumb[] = l(t('Home'), '<front>');
	  $breadcrumb[] = t($node -> title);
      drupal_set_breadcrumb($breadcrumb);
    }    	
  }
  if(arg(0) == 'taxonomy' && arg(1) == 'term') {
	$term = taxonomy_term_load(arg(2));
    $vocabulary = $term->vocabulary_machine_name;
	if($vocabulary == 'smartdocs_models') {
	  $breadcrumb = array();
      $breadcrumb[] = l(t('Home'), '<front>');	
	  $breadcrumb[] = l(t('API Library'),'apilist');
	  $breadcrumb[] = t(drupal_get_title());
	  drupal_set_breadcrumb($breadcrumb);
    }else {
	  $breadcrumb = array();
      $breadcrumb[] = l(t('Home'), '<front>');	
	  $breadcrumb[] = t(drupal_get_title());
	  drupal_set_breadcrumb($breadcrumb);
	}	
  }
  if(arg(0) == 'apilist') {
    $breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = t('API Library');
	drupal_set_breadcrumb($breadcrumb);
  }
  if(arg(0) == 'myapis') {
    $breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = t('My APIs');
	drupal_set_breadcrumb($breadcrumb);
  }
  if(arg(0) == 'user' && arg(1) == 'me' && arg(2) == 'apps') {
    $breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = t('My Apps');
	drupal_set_breadcrumb($breadcrumb);
  }  
  if(arg(0) == 'user' && arg(2) == 'app-detail') {
	$title = drupal_get_title();
    $breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = l(t('My Apps'),'user/me/apps');
	$breadcrumb[] = t($title);
	drupal_set_breadcrumb($breadcrumb);
  }  
  if(arg(0) == 'user' && arg(1) == 'me' && arg(2) == 'apps' && arg(4) == 'edit-app') {	
	$url = $vars['page']['content']['system_main']['#action'];
	$parsed = explode("/",$url);
    $breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = l(t('My Apps'), 'user/me/apps');
	$breadcrumb[] = l(t($vars['page']['content']['system_main']['name']['human']['#value']),'user/'.$user_id.'/app-detail/'.$parsed[4]);
	$breadcrumb[] = t('Edit App');
	drupal_set_breadcrumb($breadcrumb);
  }
  if(arg(0) == 'user' && arg(2) == 'apps' && arg(3) == 'add') {
	$breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = l(t('My Apps'), 'user/me/apps');
	$breadcrumb[] = t('Register your App');
	drupal_set_breadcrumb($breadcrumb);
  }
  if(arg(0) == 'business-units') {
    $breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = t('Business Units');
	drupal_set_breadcrumb($breadcrumb);
  }
  if(arg(0) == 'app-dashboard') {
    $breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = t('App Dashboard');
	drupal_set_breadcrumb($breadcrumb);
  }
  if(arg(0) == 'blog') {
	$breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = t('Blog');
	drupal_set_breadcrumb($breadcrumb);  
  }
  if(arg(0) == 'forum') {
	$breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = t('Forums');
	drupal_set_breadcrumb($breadcrumb);  
  }
  if(arg(0) == 'how-tos') {
	$breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = t('How Tos');
	drupal_set_breadcrumb($breadcrumb);  
  }
  if(arg(0) == 'faq-page') {
	$breadcrumb = array();
    $breadcrumb[] = l(t('Home'), '<front>');
	$breadcrumb[] = t('FAQs');
	drupal_set_breadcrumb($breadcrumb);  
  }  
  if (!empty($breadcrumb)) {
    $output.= '<div class="breadcrumb">' . implode(' › ', $breadcrumb) . '</div>';
  }
  return $output;
}

function npr_menu_tree__user_menu($vars) {
  return '<ul class="dropdown-menu">' . $vars['tree'] . '</ul>';
}

function npr_menu_link__user_menu(&$vars) {
  $index = array_search('leaf', $vars['element']['#attributes']['class']);
  if ($index !== FALSE) {
    unset($vars['element']['#attributes']['class'][$index]);
  }

  return theme_menu_link($vars);
}

function get_api_entries(&$name, &$vars) {
  $query = new EntityFieldQuery();

  $query->entityCondition('entity_type', 'node')
        ->propertyCondition('type', 'api_catalog_entry');

  $result = $query->execute();
  if (!empty($result['node'])) {
    $nids = array_keys($result['node']);
    $nodes = node_load_multiple($nids);
    $matching_nodes = array();
    foreach($nodes as $n) {
        $term=taxonomy_term_load($n->field_api_category['und'][0]['tid']);
        if($term -> name == $name) {
          array_push($matching_nodes, $n);
        }
    }
    return $matching_nodes;
  }
}

function npr_preprocess_views_view(&$vars) {
  $view = $vars['view'];
  $breadcrumb = array();
  $breadcrumb[] = l(t('Home'), '<front>');
  if (isset($view->title)) {
    $breadcrumb[] = l($view->title, $view->get_path());
  }
  drupal_set_breadcrumb($breadcrumb);
}

function npr_views_post_execute(&$view) { 
  $breadcrumb = array();
  $breadcrumb[] = l(t('Home'), '<front>');
  $breadcrumb[] = l(t($view -> title), $view->get_path());
  drupal_set_breadcrumb($breadcrumb);
}

function npr_preprocess_user_profile(&$variables) {
  $conditions_accept = legal_get_accept($variables['elements']['#account']->uid);
  if (isset($conditions_accept['accepted'])) {
    $accept_date = $conditions_accept['accepted'];
    $legal_status_text = "Accepted on " . date("Y-m-d H:i:s" ,$accept_date) . ".";
  } else {
    $legal_status_text = "Not accepted";
  }

  $variables['user_profile']['mail_address'] = array(
    '#type' => 'user_profile_item',
    '#title' => 'Email',
    '#markup' => $variables['elements']['#account']->mail,
    '#weight' => 3,
  );

  $variables['user_profile']['legal_status'] = array(
    '#type' => 'user_profile_item',
    '#title' => 'Terms and Conditions status',
    '#markup' => $legal_status_text,
    '#weight' => 5,
  );

  $variables['user_profile']['summary']['#weight'] = 20;


  $variables['user_profile']['timezone'] = array(
    '#type' => 'user_profile_item',
    '#title' => 'Time zone',
    '#markup' => $variables['elements']['#account']->timezone,
    '#weight' => 4,
  );

  $variables['user_profile']['summary']['status'] = array(
    '#type' => 'user_profile_item',
    '#title' => 'Status',
    '#markup' => _npr_user_status($variables['elements']['#account']->status),
  );
}

function npr_preprocess_image_style(&$vars) {
        $vars['attributes']['class'][] = 'img-responsive';
}

function npr_preprocess_node(&$variables) {
  if ($variables['type'] == 'article' && $variables['view_mode'] == 'teaser') {
    $variables['theme_hook_suggestions'][] = 'node__article_teaser';
  }
}

function npr_js_alter(&$javascript) {
  $node = menu_get_object();
  if (!empty($node) && $node->type == "smart-method") {
    unset($javascript['js/jquery-1.11.1.min.js']);
  }
}

function npr_file_entity_download_link($variables) {
  $file = $variables['file'];
  $icon_directory = $icon_directory = drupal_get_path('theme', 'npr') . '/images/icons';

  $uri = file_entity_download_uri($file);
  $icon = theme('file_icon', array('file' => $file, 'icon_directory' => $icon_directory));

  // Set options as per anchor format described at
  // http://microformats.org/wiki/file-format-examples
  $uri['options']['attributes']['type'] = $file->filemime . '; length=' . $file->filesize;

  // Provide the default link text
  if (!isset($variables['text'])) {
    $variables['text'] = t('Download [file:name]');
  }

  // Peform unsanitized token replacement if $uri['options']['html'] is empty
  // since then l() will escape the link text.
  $variables['text'] = token_replace($variables['text'], array('file' => $file), array('clear' => TRUE, 'sanitize' => empty($uri['options']['html'])));

  $output = '<span class="file">' . $icon . ' ' . l($variables['text'], $uri['path'], $uri['options']);
  $output .= ' ' . '<span class="file-size">(' . format_size($file->filesize) . ')</span>';
  $output .= '</span>';
  return $output;
}

function npr_form_alter(&$form, $form_state, $form_id) {
  switch($form_id) {
    case 'devconnect_developer_apps_edit_form':
      $prefix = <<<PREFIX
<section class="content-block contact-2">
<div class="container"><div class="row">
        <div class="col-md-12">
          <div class="editContent">
            <h2>Register Your App</h2>
          </div>
        </div>
        <div class="col-md-6 pull-right">
          <div class="editContent">
            <p>Our APIs make it easy for you to quickly get access to the data and functionality you need to include in your application.</p>
          </div>
          <img class="img-responsive map-img" src="/sites/all/themes/npr/images/aigapp.jpg">
        </div>

        <div class="col-md-6 pull-left">
          
          <div id="contact" class="form-container">
                      <fieldset>
                      <div id="message"></div>
PREFIX;
      $suffix = <<<SUFFIX
  </fieldset>
          </div><!-- /.form-container -->
            
        </div>
        
      </div><!-- /.row -->
    </div><!-- /.container -->
    
  </section>
SUFFIX;
      $form['#prefix'] = $prefix;
      $form['#suffix'] = $suffix;
      $form['#attributes']['class'][] = 'form-container';
      $form['name']['human']['#attributes']['class'][] = 'somethingnew';
      $form['#id'] = 'contactForm';
    break;
  }
}

function _npr_user_status($status_id) {
  switch ($status_id) {
    case 0:
      return t('Blocked');
       break;
    default:
      return t('Active');
   }
}
?>