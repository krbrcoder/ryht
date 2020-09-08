    <?php $images = get_stylesheet_directory_uri().'/assets/images/'; ?>
			<?php /* BEGIN FOOTER */ ?>
				<footer class="gray-texture-bg container-fluid">
					<div class="container">
					<div class="row">

						<div class="col-8">
							<ul class="inline-list">
								<li><a href="#">Foundation</a></li>
								<li><a href="#">Advocacy</a></li>
								<li><a href="#">Policy</a></li>
							</ul>
						</div>
						<div class="col">
							<ul class="social-list">
								<li>
									<a href="#" class="rounded bounce">
										<amp-img class="facebook"
											src="<?= $images; ?>/logos/facebook.svg"
											width="1"
											height="1"
											alt="facebook icon"
											layout="responsive"
										></amp-img>
									</a>
								</li>
								<li>
									<a href="#" class="rounded bounce">
										<amp-img class="twitter"
											src="<?= $images; ?>/logos/twitter.svg"
											width="35"
											height="35"
											alt="twitter icon"
										></amp-img>
									</a>
								</li>
								<li>
									<a href="#" class="rounded bounce">
										<amp-img class="instagram"
											src="<?= $images; ?>/logos/instagram.svg"
											width="35"
											height="35"
											alt="instagram icon"
										></amp-img>
									</a>
								</li>
								<li>
									<a href="#" class="rounded bounce">
										<amp-img class="youtube"
											src="<?= $images; ?>/logos/youtube.svg"
											width="35"
											height="35"
											alt="youtube icon"
										></amp-img>
									</a>
								</li>
							</ul>
						</div>
					</div>

						<div id="footer-subscribe" class="row hide-sm">
							<div class="col-5">
								<h3>Subscribe to our mailing list</h3>
								<p><strong>Sign up to receive emails about Raise Your Hand Texas news and blog posts.</strong></p>
								<p><strong>We only use this information to send emails relevant to you, and will never share this information with third parties.</strong></p>
							</div>
							<div class="col-1"></div>
							<div class="col">
								<?php /* BEGIN FORM */ ?>
									<form id="subscribe-form"
									  method="post"
									  action-xhr="/documentation/examples/api/submit-form-input-text-xhr"
									  target="_top">
									  <input type="text"
									    name="given-name"
									    placeholder="First Name"
									    required><span class="required">*</span>
									  <input type="text"
									    name="family-name"
									    placeholder="Last Name"
									    required><span class="required">*</span>
									  <input type="email"
									    name="email"
									    placeholder="Email"
									    required><span class="required">*</span>
									  <input type="text"
									    name="postal-code"
									    placeholder="Zip Code"
									    required><span class="required">*</span>
									  <input type="submit"
									    value="Subscribe">
									  <div submit-success>
									    <template type="amp-mustache">
									      Success! Thanks {{given-name}} for trying the <code>amp-form</code> demo! Try to insert the word "error" as a name input in the form to see how <code>amp-form</code> handles errors.
									    </template>
									    <template type="amp-mustache">
									      Error! Thanks {{given-name}} for trying the <code>amp-form</code> demo with an error response.
									    </template>
									  </div>
									  <div submit-error>
									  </div>
									</form>
								<?php /* END FORM */ ?>
							</div>
						</div>

						<div id="copyright" class="row">
							<div class="col-8">
								<p><a href="#">Privacy Policy</a> <br />
								© Raise Your Hand Texas - All Rights Reserved <br />
								501(c)(3): 20-3918577 | 501(c)(4): 20-8119071</p>
							</div>
							<div class="col">
								<a href="#">
									<amp-img
									  src="<?= $images; ?>/logos/ryht-logo-tiny.png"
					          width="165"
					          height="50"
					          alt="Raise Your Hand Texas Logo"
					        ></amp-img>
								</a>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<p class="address">1005 Congress Ave., Austin, TX 78701 &nbsp;&nbsp;| &nbsp;&nbsp;(512) 617-2121</p>
							</div>
						</div>
					</div>
				</footer>
			  <!--
			    We use 2 `amp-animation` elements to trigger the visibility of the button. The first one is for making the button visible...
			  -->
			  <amp-animation id="showAnim" layout="nodisplay">
			    <script type="application/json">
			      {
			        "duration": "200ms",
			         "fill": "both",
			         "iterations": "1",
			         "direction": "alternate",
			         "animations": [
			           {
			             "selector": "#scrollToTopButton",
			             "keyframes": [
			               { "opacity": "1", "visibility": "visible" }
			             ]
			           }
			         ]
			      }
			    </script>
			  </amp-animation>
			  <!-- ... and the second one is for adding the button.-->
			  <amp-animation id="hideAnim" layout="nodisplay">
			    <script type="application/json">
			      {
			       "duration": "200ms",
			         "fill": "both",
			         "iterations": "1",
			         "direction": "alternate",
			         "animations": [
			           {
			             "selector": "#scrollToTopButton",
			             "keyframes": [
			               { "opacity": "0", "visibility": "hidden" }
			             ]
			           }
			         ]
			     }
			    </script>
			  </amp-animation>
			  <!--## The scroll to top button -->
			  <!--
			    We use the `scrollTo` action to scroll the page when the button is tapped. Find more about actions [here](https://github.com/ampproject/amphtml/blob/master/spec/amp-actions-and-events.md).
			  -->
			  <button id="scrollToTopButton" on="tap:top.scrollTo(duration=200)" class="scrollToTop">⌃</button>
			<?php /* END FOOTER */ ?>
			<?php wp_footer(); ?>
  </body>
</html>