<div class="copyright-bar">
	<div class="container">
    <div class="secondary menu">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <?php
          foreach (menu_tree_all_data('menu-secondarymenu') as $item) {
            print('<li class="nav-item"><a href="' . url(base_path() .$item['link']['link_path']).'">' .$item['link']['link_title'] .'</a></li>');
          }
          ?>
        </ul>
      </div>
    </div>
		<div class="editContent">
			<p class="text-center small">© 2016 American International Group, Inc. All rights reserved.</p>
		</div>
	</div>
</div>