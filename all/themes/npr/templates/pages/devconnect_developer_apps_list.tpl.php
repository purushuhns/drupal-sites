<section id="shop-1-7" class="content-block shop-1-7">
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				
			</div>
			<div class="col-sm-2">
				<div class="editContent">
					<p class="lead lead-margin"><?php print $add_app; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<table class="table table-striped table-hover cart-table">
				<thead>
					<tr>
						<th>APP NAME</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($applications as $key=>$app) {
							print('<tr>');
							print('<td>' . l($app['app_name'], $app['detail_url']) .'</td>');?>
              <td><a href="<?php print base_path() . $app['delete_url']; ?>" class="remove" title="Remove this item" data-toggle="tooltip" data-placement="top"><i class="fa fa-trash"></i></a></td>
							<?php print('</tr>');
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</section>