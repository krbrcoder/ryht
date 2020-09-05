    <?php 
	    $assets = get_stylesheet_directory_uri().'/assets/';
	    $images = $assets.'images/';
	  ?>
			<?php /* BEGIN FOOTER */ ?>
				<footer class="grid x-12 gray-texture-bg">

						<div class="grid x-9">
							<ul class="inline-list">
								<li><a href="#">Foundation</a></li>
								<li><a href="#">Advocacy</a></li>
								<li><a href="#">Policy</a></li>
							</ul>
						</div>
						<div class="grid x-3">
							<ul class="social-list">
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Instagram</a></li>
								<li><a href="#">YouTube</a></li>								
							</ul>
						</div>

						<div class="grid x-8--2">
							<div class="grid-6">
								<h3>Subscribe to our mailing list</h3>
								<p>Sign up to receive emails about Raise Your Hand Texas news and blog posts.</p>
								<p>We only use this information to send emails relevant to you, and will never share this information with third parties.</p>
							</div>
							<div class="grid-6">
								<?php /* BEGIN FORM */ ?>
								<?php /* END FORM */ ?>
							</div>
						</div>

						<div class="grid x-9">
							<p>Privacy Policy <br />
							© Raise Your Hand Texas - All Rights Reserved <br />
							Tax Exemption Numbers: 501(c)(3): 20-3918577 | 501(c)(4): 20-8119071</p>
						</div>
						<div class="grid x-3">
							<a href="#">
								<amp-img
								  src="<?php $images; ?>logos/ryht-logo-tiny.png"
				          width="165"
				          height="50"
				          alt="Raise Your Hand Texas Logo"
				        ></amp-img>
							</a>
						</div>
						
						<div class="grid x-12 aligncenter">
							1005 Congress Ave., Austin, TX 78701 &nbsp;&nbsp;| &nbsp;&nbsp;(512) 617-2121
						</div>
				</footer>
			<?php /* END FOOTER */ ?>

	  </div>
  </body>
</html>