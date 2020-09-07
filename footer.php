    <?php $images = get_stylesheet_directory_uri().'/assets/images/'; ?>
			<?php /* BEGIN FOOTER */ ?>
				<footer class="container-fluid gray-texture-bg">
					<div class="row">

						<div class="col-9">
							<ul class="inline-list">
								<li><a href="#">Foundation</a></li>
								<li><a href="#">Advocacy</a></li>
								<li><a href="#">Policy</a></li>
							</ul>
						</div>
						<div class="col-3">
							<ul class="social-list">
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Instagram</a></li>
								<li><a href="#">YouTube</a></li>								
							</ul>
						</div>
					</div>

						<div class="row">
							<div class="col-6">
								<h3>Subscribe to our mailing list</h3>
								<p>Sign up to receive emails about Raise Your Hand Texas news and blog posts.</p>
								<p>We only use this information to send emails relevant to you, and will never share this information with third parties.</p>
							</div>
							<div class="col-6">
								<?php /* BEGIN FORM */ ?>
									<form id="subscribe-form" class="sample-form"
									  method="post"
									  action-xhr="/documentation/examples/api/submit-form-input-text-xhr"
									  target="_top">
									  <input type="text"
									    name="name"
									    placeholder="Name..."
									    required>
									  <input type="email"
									    name="email"
									    placeholder="Email..."
									    required>
									  <input type="submit"
									    value="Subscribe">
									  <div submit-success>
									    <template type="amp-mustache">
									      Success! Thanks {{name}} for trying the <code>amp-form</code> demo! Try to insert the word "error" as a name input in the form to see how <code>amp-form</code> handles errors.
									    </template>
									  </div>
									  <div submit-error>
									    <template type="amp-mustache">
									      Error! Thanks {{name}} for trying the <code>amp-form</code> demo with an error response.
									    </template>
									  </div>
									</form>
								<?php /* END FORM */ ?>
							</div>
						</div>

						<div class="row">
							<div class="grid-item x-9">
								<p>Privacy Policy <br />
								© Raise Your Hand Texas - All Rights Reserved <br />
								Tax Exemption Numbers: 501(c)(3): 20-3918577 | 501(c)(4): 20-8119071</p>
							</div>
							<div class="grid-item x-3">
								<a href="#">
									<amp-img
									  src="<?php= $images; ?>/logos/ryht-logo-tiny.png"
					          width="165"
					          height="50"
					          alt="Raise Your Hand Texas Logo"
					        ></amp-img>
								</a>
							</div>
						</div>
						
						<div class="row">
							1005 Congress Ave., Austin, TX 78701 &nbsp;&nbsp;| &nbsp;&nbsp;(512) 617-2121
						</div>
				</footer>
			<?php /* END FOOTER */ ?>
  </body>
</html>