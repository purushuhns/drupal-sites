<div id="page" class="page">

	<?php include ($directory."/templates/partials/menu.php"); ?>
			
	<section id="catalog-section-1" class="content-1-5 content-block">    			
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="editContent" data-selector="Footer">
						<h1 data-selector="h1"><?php print $title ?></h1>
					</div>
					<div class="editContent lead" data-selector="Footer">
						<p class="lead" data-selector="p" style=""><?php print $body[0]['value']; ?></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
		
    </section>
    <!-- Start Team 2-1 -->
    <section id="catalog-section-2" class="content-block team-1">
        <div class="container">
            <div class="row">
				<?php print render($page['content']); ?>            	
            </div>
            <!-- /.row -->
		</div><!-- /.container -->
	</section>
	<?php include ($directory."/templates/partials/footer.php"); ?>
</div>