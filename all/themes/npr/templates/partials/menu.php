    <header id="header-2">
  <nav class="main-nav navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"
                data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php print base_path(); ?>">
          <img src="<?php print(base_path() . path_to_theme() . '/images/AIG_2012_logo.png'); ?>"
            class="brand-img img-responsive">
        </a>

        <!-- Slogan -->
        <?php if ($site_slogan): ?>
          <div id="site-slogan"<?php if (!empty($hide_site_slogan)) {
            print ' class="element-invisible"';
          } ?>>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <?php if (!empty($page['navigation'])): print render($page['navigation']); endif; ?>

        <ul class="nav navbar-nav navbar-right">
          <?php
          foreach ($main_menu as $item) {
            if ($item['href'] == '<front>') {
              $item['href'] = '';
            }
            print('<li class="nav-item"><a href="' . base_path() . $item['href'] . '">' . $item['title'] . '</a></li>');
          }
          ?>
          <!-- A dummy menu item with placeholder content. -->
          <li class="nav-item dropdown">
            <a href="/support">Support</a>
            <ul class="dropdown-menu">
              <li><a href="<?php print base_path(); ?>forum">Forums</a></li>
              <li><a href="<?php print base_path(); ?>how-tos">How Tos’</a></li>
              <li><a href="<?php print base_path(); ?>faq-page">FAQs</a></li>
              <li><a href="<?php print base_path(); ?>browser-support">Browser
                  support</a></li>
            </ul>
          </li>

          <?php if (user_is_logged_in()): ?>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown"
                 data-hover="dropdown" data-delay="0" data-close-others="false" href="#"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;</span><?php print $user->name; ?>&nbsp;<i class="fa fa-angle-down"></i></a>
              <?php print render($user_menu) ?>
            </li>
          <?php else: ?>
            <li class="nav-item dropdown <?php echo((current_path() == "user/register") ? "active" : ""); ?>"><?php echo l(t("Register"), "user/register"); ?>
            </li>
            <li class="nav-item <?php echo((current_path() == "user/login") ? "active" : ""); ?>"><?php echo l(t("Login"), "user/login"); ?></li>
          <?php endif; ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

</header>