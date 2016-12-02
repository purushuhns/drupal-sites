<div class="container">
	<div class="row">
	    <div class="col-md-12">
	      <?php print $breadcrumb;?>
	      <?php if (!empty($tabs) && !drupal_is_front_page()): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
	    </div>
	</div>
</div>