<?php
  global $user;
?>

<div id="page" class="page">
	<?php include ($directory."/templates/partials/menu.php"); ?>

	<!-- // End HEADER 2 --><!-- Start Content Block 2-1 -->
	<section id="content-2-1" class="content-block content-2-1 bg-deepocean" style="height:600px;" >
		<div class="container text-center">
			<div class="editContent">
				<h1>ƒ{API} = AIG</h1>
        <p>High utility APIs from a global leader in insurance
        <br>Connect your users with seamless APIs from a global leader in<br>
          insurance</p>

        <a href="#jump-to-content"><div class="caret-custom"></div></a>
			</div>

		</div><!-- /.container -->
	</section>

  <section class="content-block-new">
    <div class="container">
      <div id="jump-to-content"></div>
      <div class="front-paragraph">
        <div class="row">
          <div class="col-md-12">
            <div class="icon-wrapper">
              <div class="icon-inner travelinsurance"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h3>Travelguard</h3>
            <p class="body-copy">APIs that enhance the travel experience. Utilize our quote API to quickly generate an AIG Travelguard quote, or keep your users informed with dynamic Travel advisories.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h4 class="body-title-link">
              <a href="<?php $base_url;?>apis/carrier">Carrier</a>
            </h4>
            <p class="sub-body-copy">This API provides the details of the transport availed during the travel.</p>
          </div>

          <div class="col-md-4">
            <h4 class="body-title-link">
              <a href="<?php $base_url;?>apis/direct-quote">Direct Quote</a>
            </h4>
            <p class="sub-body-copy">This API provides the details about the policies which are quoted and sold.</p>
          </div>

          <div class="col-md-4">
            <h4 class="body-title-link">
              <a href="<?php $base_url;?>apis/product-configuration">Product Configuration</a>
            </h4>
            <p class="sub-body-copy">This API provides the details of the product, its coverages and optional packages.</p>
          </div>
        </div>
      </div>
	  
	  <div class="front-paragraph">
        <div class="row">
          <div class="col-md-12">
            <div class="icon-wrapper">
              <div class="icon-inner factorysensors"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h3>Digital Business</h3>
            <p class="body-copy">APIs that allow the business to move quickly into new market opportunities or react to competitive threats. Enable business initiatives to move quickly while maintaining the necessary reliability of the core enterprise Systems of Record.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 col-md-6">
            <h4 class="body-title-link">
              <a href="<?php $base_url;?>apis/digital-security-utility-platform">Digital Security Utility Platform</a>
            </h4>
            <p class="sub-body-copy">This API enables the user to register and use the services provided by the Digital Security Utility Platform. </p>
          </div>
		  <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
            <h4 class="body-title-link">
              <a href="<?php $base_url;?>apis/digital-marketing-platform">Digital Marketing Platform</a>
            </h4>
            <p class="sub-body-copy">This API is used to get the content that is published by the Digital Marketing Platform.</p>
          </div>
        </div>
      </div>

      <div class="front-paragraph">
        <div class="row">
          <div class="col-md-12">
            <div class="icon-wrapper">
              <div class="icon-inner lifeinsurance"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h3>Life</h3>
            <p class="body-copy">Life is complicated. Life insurance doesn’t have to be. Utilize our life APIs to integrate life insurance purchases into your site or app. These APIs range in capability from generating a quote to managing policies.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <h4 class="body-title-link">
              <a href="<?php $base_url;?>apis/communication-manager">Communication Manager</a>
            </h4>
            <p class="sub-body-copy">This API provides both the data needed for a life insurance related UI interface, and the ability to generate a life insurance quote.</p>
          </div>        
        </div>
      </div>
      <div class="front-paragraph">
        <div class="row">
          <div class="col-md-12">
            <div class="icon-wrapper">
              <div class="icon-inner telematics"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h3>Commercial</h3>
            <p class="body-copy">APIs that will provide access to the data captured via telematics devices and associated insights.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <h4 class="body-title-link">
              <a href="<?php $base_url;?>apis/sanction">Sanction</a>
            </h4>
            <p class="sub-body-copy">This API accepts screening requests and returns the background details.</p>
          </div>

        </div>
      </div>

      <div class="front-paragraph">
        <div class="row">
          <div class="col-md-12">
            <h3>Coming Soon...</h3>
            <p class="coming">Accident Insurance APIs</p>
            <p class="coming">Wealth Management APIs</p>
            <p class="coming">Claims APIs</p>
          </div>
        </div>
      </div>


    </div>
  </section>

<!-- Old content goes here if needed! -->

	<?php include ($directory."/templates/partials/footer.php"); ?>
</div>