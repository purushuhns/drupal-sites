<?php
global $user;
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * CUSTOMIZATIONS:
 * - $myappslink: provides a link for the users my apps page (with glyphicon)
 * - $profilelink: provides a link for the user profile page (with glyphicon)
 * - $logoutlink: provides a link for the user to log out (with glyphicon)
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" />
        </a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): print render($primary_nav); endif; ?>
          <ul class="menu nav navbar-nav pull-right account-menu">
            <?php if (user_is_anonymous()) { ?>
              <li class="<?php echo (($current_path == "user/register") ? "active":""); ?>"><?php echo l(t("Register"), "user/register"); ?></li>
              <li class="<?php echo (($current_path == "user/login") ? "active":""); ?>"><?php echo l(t("Login"), "user/login"); ?></li>
            <?php } else {
              $user_url =  'user/' . $user->uid; ?>
              <li class="first expanded dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" data-target="#" title="" href="/user">
                  <?php print $user_mail_clipped; ?> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu"><?php print $dropdown_links; ?></ul>
              </li>
              <li class="last"><?php print l('Logout', 'user/logout'); ?></li>
            <?php } ?>
          </ul>
          <?php if (!empty($page['navigation'])): print render($page['navigation']); endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>
<!-- Breadcrumbs -->
<div class="container" id="breadcrumb-navbar">
  <div class="row">
    <br/>
    <div class="col-md-12">
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
    </div>
  </div>
</div>
<div class="master-container">
  
  <div class="page-content">
    <div class="main-container container" style="padding-top:0px">
      <div class="row">
        <div class="col-md-7 col-md-offset-1">
          <div class="row">
            <div class="col-md-12" style="padding-bottom:20px">
              <h1>Clinical Trials API</h1>
           </div>
            <div class="col-md-12" style="font-family:Helvetica-Light;font-size:18px;line-height:22px">
              
          The Clinical Trials API provides information about clinical trials including eligibility requirements,
          location, and duration of the trial. Separate information for health care providers
          can also be retrieved for preauthorized applications.
           </div>
        </div>
        </div>
        <div class="col-md-4" style="font-family:Helvetica-Light;font-size:14px;line-height:16px">
          <table class="table table-bordered table-striped">
            <tr>
              <th>API Name</th>
              <th>Clinical Trials</th>
            </tr>
            <tr>
              <td>Current Version</td>
              <td>v1</td>
            </tr>
            <tr>
              <td>Technical Lead</td>
              <td>Robyn Scott</td>
            </tr>
            <tr>
              <td>Support Forum</td>
              <td><a href="http://dev-presalesdemo31.devportal.apigee.com/forums/clinical-trials">Clinical Trials</a></td>
            </tr>

            
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-11 col-md-offset-1" style="margin-top:30px;margin-bottom:15px">
          <h2>API Documentation</h2>
        </div>
      </div>
      <div class="row">
      <div class="col-md-11 col-md-offset-1" style="margin-bottom:20px">
        <section<?php print $content_column_class; ?>>
          <?php print render($page['content']); ?>
        </section>

        <?php if (!empty($page['sidebar_second'])): ?>
          <aside class="col-sm-3" role="complementary">
            <?php print render($page['sidebar_second']); ?>
          </aside>  <!-- /#sidebar-second -->
        <?php endif; ?>
      </div>
      </div>
      <?php if (drupal_is_front_page()) { ?>
        
          <div class="row">
            <div class="col-sm-4">
              <div class="thumbnail">
                  <img src="../images/dryer.jpg" alt="Connected Appliances API">
                  <div class="caption">
                      <h3>Connected Appliances API</h3>
                      <p>The connected appliances API powers mysmartappliances.com and related mobile apps.</p>
                      <p><a href="#" class="btn btn-primary" role="button">API Docs</a></p>
                  </div>
              </div>
            </div>
            <div class="col-sm-4">
              <?php if (!empty($page['frontpage_panel_center'])): ?>
                <?php print render($page['frontpage_panel_center']); ?>
              <?php endif; ?>
            </div>
            <div class="col-sm-4">
              <?php if (!empty($page['frontpage_panel_right'])): ?>
                <?php print render($page['frontpage_panel_right']); ?>
              <?php endif; ?>
            </div>
          </div>
        
      <?php } ?>
    </div>
  </div>
  <div id="push"></div>
  <footer class="footer footer-fixed-bottom">
    <?php print render($page['footer']); ?>
  </footer>
</div>
