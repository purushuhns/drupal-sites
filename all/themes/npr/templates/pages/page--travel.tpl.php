<?php
  global $user;
?>

<div id="page" class="page">

	<?php include ($directory."/templates/partials/menu.php"); ?>
    <div class="travel-container">
        <div class="row">
            <div class="col-md-12" style="margin-top:-200px">
                <video autoplay muted poster="screenshot.jpg" style="width:100%">
					<?php print('<source id="apigee-logo" type="video/webm" src="'.base_path() . path_to_theme() .'/videos/beachlegs.mov">'); ?>
			    </video>
            </div>
            <div class="col-md-12" style="margin-top:-450px; margin-left:100px">
                <h1 style="font-size:70px;color:#5c5c5c;">Join the 500+ partners protecting their customers' travel using AIG travel insurance</h1>
                <div class="editContent" style="text-align:center;font-size:40px;">
				<p class="lead"><a href="apis/travel-insurance">Explore Travel APIs</a></p>
			</div>
            </div>
        </div>
    </div>



	<!-- Start Content Block 1-6 -->
    <section id="content-1-6" class="content-1-6 content-block" style="padding-bottom:70px;">
    
		<div class="container">
			<div class="row text-center">
				<div class="editContent">
	        		<h1 style="padding:60px;font-size:65px;color:#7c7c7c;">Some of Our Amazing Partners</h1>
				</div>
			</div><!--end of row-->
			
			<div class="row client-row">
				<div class="row-wrapper">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<img alt="client" src="<?php print(base_path() . path_to_theme() .'/images/expedia.png'); ?>">
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12">
						<img alt="client" src="<?php print(base_path() . path_to_theme() .'/images/travelocity.jpg'); ?>">
					</div>
				
					<div style="height:111px" class="col-md-3 col-sm-6 col-xs-12">
						<img style="margin-top:20px;" alt="client" src="<?php print(base_path() . path_to_theme() .'/images/priceline.png'); ?>">
					</div>
				
					<div style="height:111px" class="col-md-3 col-sm-6 col-xs-12">
						<img style="margin-top:20px;" alt="client" src="<?php print(base_path() . path_to_theme() .'/images/kayak.png'); ?>">
					</div>
				</div>
			</div><!-- /.row -->
			
			<div class="row client-row">
				<div class="row-wrapper">
					<div style="height:111px" class="col-md-3 col-sm-6 col-xs-12">
						<img alt="client" src="<?php print(base_path() . path_to_theme() .'/images/mmt.png'); ?>">
					</div>
				
					<div style="height:111px" class="col-md-3 col-sm-6 col-xs-12">
						<img alt="client" src="<?php print(base_path() . path_to_theme() .'/images/united.gif'); ?>">
					</div>
				
					<div style="height:111px" class="col-md-3 col-sm-6 col-xs-12">
						<img style="padding-left:35px;" alt="client" src="<?php print(base_path() . path_to_theme() .'/images/emirates.jpg'); ?>">
					</div>
				
					<div style="height:111px" class="col-md-3 col-sm-6 col-xs-12">
						<img style="padding-left:30px;" alt="client" src="<?php print(base_path() . path_to_theme() .'/images/southwest.jpg'); ?>">
					</div>
				</div>
			</div><!-- /.row -->
			<div class="row text-center" style="padding-top:60px;">
				<a style="font-size:25px;" href="http://dev-amer-demo8.devportal.apigee.com/user/5/apps/add" class="btn btn-outline btn-outline outline-dark">Register Your App</a>
			</div>
		</div><!-- /.container -->
    
    </section>
    <!-- // End Content Block 1-6 -->



	<!-- Start Content Block 2-7 -->
	
	
	<!-- Start Content Block 3-10 -->
	<section id="content-3-10" class="content-block-nopad content-3-10" style="background:#ededed">
        <div class="image-container col-sm-6 col-xs-12 pull-left">
            <div class="background-image-holder">

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
                	<div class="editContent">
                    	<h3>App Spotlight: Expedia</h3>
                	</div>
                	<div class="editContent">
						<p>AIG's unique travel insurance products offer unparalleled flexibility
							to Expedia's customers. Read more about how Expedia was able to add a new source of revenue and increase customer satisfaction with AIG's travel insurance.</p>
                	</div>
                    <a href="#" class="btn btn-outline btn-outline outline-dark">Read More</a>
                </div>
            </div><!-- /.row-->
        </div><!-- /.container -->
	</section>
    <!-- // End Content Block 3-10 -->


		
	
	<!--// END Content Block 2-7 -->




	<?php include ($directory."/templates/partials/footer.php"); ?>
</div>