<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<?php if ($teaser): ?>
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<?php print render($content['field_registry_image'][0]);?>
				<div class="caption">
					<h3><?php print $title; ?></h3>
					<p><?php print $content['field_registry_summary'][0]['#markup']; ?></p>
					<p><a class="btn btn-primary" href="<?php print $node_url; ?>" role="button">API Docs</a></p>
				</div>  
			</div>
		</div>
	</div>
<?php else: ?>
	<header>
		<?php print render($title_prefix); ?>
		<?php if (!$page && $title): ?>
		<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
	<?php endif; ?>
	<?php print render($title_suffix); ?>
</header>
<div class="row">
	<div class="col-md-7 col-md-offset-1">
		<div class="row">
			<div class="col-md-12" style="font-family:Helvetica-Light;font-size:18px;line-height:22px">
				<?php print render($content['body']); ?>
			</div>
		</div>
	</div>
	<div class="col-md-4" style="font-family:Helvetica-Light;font-size:14px;line-height:16px">
		<table class="table table-bordered table-striped">
			<tr>
				<th>API Name</th>
				<th><?php print $title; ?></th>
			</tr>
			<tr>
				<td>Current Version</td>
				<td><?php print $content['field_version'][0]['#markup']; ?></td>
			</tr>
			<tr>
				<td>API Team</td>
				<td><?php print $content['field_api_team'][0]['#markup']; ?></td>
			</tr>
			<tr>
				<td>Support Forum</td>
				<td><?php print render($content['field_support_forum'][0]); ?></td>
			</tr>
			<tr>
				<td>API Visibility</td>
				<td><?php print $content['field_api_visibility'][0]['#markup']; ?></td>
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
		<?php $view_name = $content['field_api_model'][0]['#title'] . "_methods"; ?>
		<?php print views_embed_view($view_name); ?>
	</section>
</div>
<?php endif; ?>
</article>