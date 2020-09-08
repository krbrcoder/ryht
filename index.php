		<?php get_header(); ?>
		<section id="main-body">
    <?php $images = get_stylesheet_directory_uri().'/assets/images'; ?>

			<?php get_template_part('parts/video'); ?>
			<?php get_template_part('parts/social-bar'); ?>

			<?php /* BEGIN FUTURE OF TEXAS & SITE LINKS AREA */ ?>
			<div class="container-fluid light-gray-gradient">
				<div class="container">
					<div class="row">
	
						<div id="future-of-texas" class="col gray-bg-light">
							<amp-img class="main-img"
								src="<?= $images; ?>/future-of-texas-50.png"
								alt="the Future of Texas is in our Public Schools"
								width="300"
								height="187.42"
								layout="responsive"
							></amp-img>
							<p>The future of Texas – our economy, communities, and citizenry – depends on how well we prepare our students today. All students deserve a level playing field and equal access to a quality public education.</p>
							<a href="#" class="button btn-outline-blue">About Us</a>
						</div>
			
						<div id="foundation-policy-advocacy-storytelling" class="col-7">
							<amp-fit-text class="aligncenter" width="400" height="300" layout="responsive" max-font-size="22">
								<div class="circle">
									<amp-img
										src="<?= $images; ?>/foundation-icon.png"
										width="1"
										height="1"
										layout="responsive"
										alt="puzzle pieces - foundation icon"
									></amp-img>
								</div>
								Our Foundation
							</amp-fit-text>
							<amp-fit-text class="aligncenter" width="400" height="300" layout="responsive" max-font-size="22">
								<div class="circle">
									<amp-img
										src="<?= $images; ?>/capitol-icon.png"
										width="1"
										height="1"
										layout="responsive"
										alt="Texas State capitol - policy icon"
									></amp-img>
								</div>
								Policy
							</amp-fit-text>
							<amp-fit-text class="aligncenter" width="400" height="300" layout="responsive" max-font-size="22">
								<div class="circle">
									<amp-img
										src="<?= $images; ?>/advocacy-icon.png"
										width="1"
										height="1"
										layout="responsive"
										alt="map with map marker - advocacy icon"
									></amp-img>
								</div>
								Advocacy
							</amp-fit-text>
							<amp-fit-text class="aligncenter" width="400" height="300" layout="responsive" max-font-size="22">
								<div class="circle">
									<amp-img
										src="<?= $images; ?>/stories-icon.png"
										width="1"
										height="1"
										layout="responsive"
										alt="movie marker - stories icon"
									></amp-img>
								</div>
								Storytelling
							</amp-fit-text>
						</div>

					</div>
				</div>
			</div>
			<?php /* END FUTURE OF TEXAS & SITE LINKS AREA */ ?>

			<?php /* BEGIN CTA AREA */ ?>
				<div id="subscribe" class="blue-bg-light container-fluid">
					<div class="container">
						<h2>Subscribe to our mailing list</h2>
						<?php /* BEGIN FORM */ ?>
									<form id="subscribe-cta-form"
									  method="post"
									  action-xhr="/documentation/examples/api/submit-form-input-text-xhr"
									  target="_top">
									  <input type="email"
									    name="email"
									    placeholder="Email"
									    required>
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

<!-- 						<a href="#subscribe-form" class="button btn-outline-blue no-arrow">Subscribe</a> -->
					</div>
				</div>
			<?php /* END CTA AREA */ ?>

			<?php /* BEING OUR FEATURED CONTENT AREA */ ?>
				<div id="featured-content" class="container-fluid">
						<div class="row">
	
							<div class="col-6">
								<h2>Our Featured Content</h2>
								<hr class="blue-line">
								<p class="p-2">Doggo ipsum ruff. Tungg puggorino you are doin me a concern length boy maximum borkdrive woofer, pats fat boi many pats doggorino. Puggorino much ruin diet the neighborhood pupper heck, very taste wow big ol pupper shibe waggy wags.</p>
								<a class="button btn-outline-white" href="#">About Us</a>
							</div>
							<div class="col">
								<a href="#">
									<amp-img class="featured-img"
										src="<?= $images; ?>/teachers-can.png"
										width="693"
										height="391"
										layout="responsive"
										alt="checkmark addition sign hashtag TeachersCan"
									>
									</amp-img>
								</a>
							</div>

						</div>
				</div>
			<?php /* END OUR FEATURED CONTENT AREA */ ?>
			
			<?php get_template_part('parts/other-featured-content'); ?>
			
			<?php get_template_part('parts/blog-carousel'); ?>
			
			</section>

			<?php get_footer(); ?>