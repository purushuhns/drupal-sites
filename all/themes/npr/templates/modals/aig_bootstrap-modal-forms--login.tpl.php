<?php
/**
 * @file
 * Provides the user login form HTML.
 */
?>
<div class="modal fade" id="<?php print $identifier?>" tabindex="-1" role="dialog" aria-labelledby="<?php print $identifier?>Label" aria-hidden="true">
  <div class="modal-dialog" style="<?php print $modal_style;?>">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="<?php print $identifier?>Label">Sign In</h4>
      </div>
      <div class="modal-body">
        <form action="<?php print($modal_form['#action']);?>" method="post" id="user-login">
        <div id="contact" class="form-container">
                    	<fieldset>
	                    <div id="message"></div>
							<div class="form-group">
                                <input name="name" id="edit-name" type="text" value="" placeholder="Username or Email" class="form-control" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;">
							</div>
							<div class="form-group">
                                <input name="pass" id="edit-pass" type="password" value="" placeholder="Password" class="form-control">
							</div>
						</fieldset>
					</div>
          <button id="edit-submit" class="btn btn-primary" type="submit" name="op" style="margin-bottom:0px">Sign In</button>
        </form>
      </div>
      <div class="modal-footer">
      	<div class="form-group">
            <a class="btn btn-primary" href="/aac-login" >Sign in with Apigee</a>
		</div>
		<div class="form-group">
            
		</div>
      </div>
    </div>
  </div>
</div>

