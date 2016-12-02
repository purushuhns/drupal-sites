<div id="page" class="page">

	<?php include ($directory."/templates/partials/menu.php"); ?>
	<?php include ($directory."/templates/partials/breadcrumbs.php"); ?>

	<?php print render($page['content']); ?>

	<?php include ($directory."/templates/partials/footer.php"); ?>
</div>