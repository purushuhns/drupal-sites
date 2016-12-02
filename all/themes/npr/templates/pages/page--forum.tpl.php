<div id="page" class="page">

	<?php include ($directory."/templates/partials/menu.php"); ?>

	<section id="content-3-4" class="content-block content-3-4">
		<div class="container">
			<div class="row">
	<div class="row">
			<div class="col-md-12">
				<?php print $breadcrumb;?>
			</div>
		</div>
				<div class="col-md-12">
					<div class="editContent" data-selector="Footer">
						<p data-selector="p"><?php print render($page['content']); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include ($directory."/templates/partials/footer.php"); ?>
</div>