<?php global $base_url;?>
<?php if ($teaser): ?>
	<div class="col-md-4 col-sm-6 team-member-wrap">
		<div class="team-member">
			
			<?php if(isset($content['field_category_image'])) : ?>
				<?php print render($content['field_category_image']);?>
			<?php else : ?>
				<img src="<?php print('/sites/all/themes/morganstanley/images/No_Image_Available.png'); ?>" class="img-responsive" alt="No Image">
			<?php endif; ?>
			<div class="team-details">
				<div class="editContent">
					<h4 class="member-name"><?php print $title ?> </h4>
				</div>
				<div class="editContent">
					<p><?php print $body[0]['value']; ?></p>
				</div>
				<div class="editContent">
					<a href="<?php print $node_url;?>" class="btn btn-default"><?php print $title ?> APIs</a>
				</div>
			</div>
		</div>
	</div>

<?php else: ?>
	<section class="content-1-5 content-block">    	
		<div class="container">
			<div class="row" style="padding-top:10px;">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="editContent" data-selector="Footer">
						<h1 data-selector="h1"><?php print $title ?> APIs</h1>
					</div>
					<div class="editContent lead" data-selector="Footer">
						<p class="lead" data-selector="p" style=""><?php print $body[0]['value']; ?></p>
					</div>
				</div>
			
				<div id="category-img" class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-12">
					<?php print render($content['field_category_image'][0]);?>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
		
    </section>
    <!-- Start Team 2-1 -->
    <section class="content-block team-1">
        <div class="container">
            <div class="row">
				<?php foreach($api_entries as $entry): ?>
	                <div class="col-md-3 col-sm-6 team-member-wrap">
						<div class="team-member">
							<?php $img = $entry -> field_api_entry_image ?>
							<?php if(isset($img['und'][0]['filename'])) : ?>
								<img src="<?php print('/sites/default/files/' .$img['und'][0]['filename']); ?>" class="img-responsive" alt="API Image">
							<?php //else : ?>
								<!--<img src="<?php //print('/sites/all/themes/morganstanley/images/no-image.jpg'); ?>" class="img-responsive" alt="No Image"> -->
							<?php endif; ?>
							<div class="team-details">
								<div class="editContent">
									<h4 class="member-name"><?php print($entry->title); ?></h4>
								</div>
								<div class="editContent">
									<p><?php print($entry->description); ?></p>
								</div>
								<div class="editContent">
									<a class="btn btn-default" href="<?php print $base_url;?>/node/<?php print($entry -> nid); ?>">View Docs</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				
            <!-- /.row -->
			
		</div><!-- /.container -->
	</section>
<?php endif; ?>

