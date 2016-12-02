<div id="page" class="page">

	<?php include ($directory."/templates/partials/menu.php"); ?>

	<section id="content-3-4" class="content-block content-3-4">
		<div class="container">
      <?php print $messages; ?>
			<div class="row">
			    <div class="col-md-12">
			      <?php print $breadcrumb;?>
			    </div>
			</div>
			<div class="row">

				<div class="col-md-11">

					<div class="editContent" data-selector="Footer">
						<h2 data-selector="h2" class ="nopadding"><?php print $title ?></h2>
					</div>
          <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>

          <?php if (!empty($action_links)): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>
					<div class="editContent" data-selector="Footer">
						<p data-selector="p"><?php print render($page['content']); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include ($directory."/templates/partials/footer.php"); ?>
</div>