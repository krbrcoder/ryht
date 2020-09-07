		<?php get_header(); ?>
    <?php $images = get_stylesheet_directory_uri().'/assets/images'; ?>

			<?php get_template_part('parts/video'); ?>
			<?php get_template_part('parts/social-bar'); ?>

			<?php /* BEGIN FUTURE OF TEXAS & SITE LINKS AREA */ ?>
			<div class="container-fluid light-gray-gradient">
				<div class="row">

					<div id="future-of-texas" class="col-4 gray-bg-light">
						<div class="padding">
							<amp-img class="main-img"
							src="<?= $images; ?>/future-of-texas-50.png"
							alt="the Future of Texas is in our Public Schools"
							width="300"
							height="187.42"
							layout="responsive"
							></amp-img>
							<p>The future of Texas – our economy, communities, and citizenry – depends on how well we prepare our students today. All students deserve a level playing field and equal access to a quality public education.</p>
							<a href="#" class="button btn-outline-blue">About Us <amp-img src="<?= $images; ?>/blue-arrow.svg" width="25" height="25"></a>
						</div>
					</div>
		
					<div id="foundation-policy-advocacy-storytelling" class="col-7">
						<div class="padding">
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
				<div id="subscribe" class="container-fluid blue-bg-light">
					<h2>Subscribe to our mailing list</h3>
					<a href="#subscribe-form" class="button btn-outline-blue">Subscribe</a>
						
				</div>
			<?php /* END CTA AREA */ ?>

			<?php /* BEING OUR FEATURED CONTENT AREA */ ?>
				<div id="featured-content" class="container-fluid">
					<div class="row">

						<div class="col-6">
							<h2>Our Featured Content</h2>
							<hr class="blue-line">
							<p>Doggo ipsum ruff. Tungg puggorino you are doin me a concern length boy maximum borkdrive woofer, pats fat boi many pats doggorino. Puggorino much ruin diet the neighborhood pupper heck, very taste wow big ol pupper shibe waggy wags.</p>
							<a class="button btn-outline-white" href="#">About Us <amp-img src="<?= $images; ?>/white-arrow.svg" width="25" height="25"></a>
						</div>
						<div class="col-5">
							<a href="#">
								<amp-img class="featured-img"
									src="<?= $images; ?>/teachers-can.png"
									width="400"
									height="200"
									layout="responsive"
									alt="checkmark addition sign hashtag TeachersCan"
								>
								</amp-img>
							</a>
						</div>

					</div>
				</div>
			<?php /* END OUR FEATURED CONTENT AREA */ ?>
			
			<?php /* BEGIN OTHER FEATURED ITEMS AREA */ ?>
				<div id="other-featured-content" class="container-fluid">

					<h2>Other Featured Items Go Here</h2>
						<div class="col">
							<amp-img class="category-bg"
								src="<?= $images; ?>/category-1-bg.png" 
								width="100" 
								height="100" 
								layout="responsive" 
								alt="decoration background for category 1"
							></amp-img>
							<amp-img
								src="<?= $images; ?>/category-1.png" 
								width="50" 
								height="50" 
								layout="responsive" 
								alt="category 1 image"
							></amp-img>
							<a class="category-title" href="#">Category 1</a>
							<h4 class="category-subtitle">Navigating a Pandemic: What's on Teachers' Minds</h4>
							<a class="button outline-btn aligncenter" href="#">Learn More</a>
						</div>
						<div class="col">
							<amp-img 
								src="<?= $images; ?>/category-2.png" 
								width="50" 
								height="50" 
								layout="responsive" 
								alt="category 2 image"
							></amp-img>
							<a class="category-title" href="#">Category 2</a>
							<h4 class="category-subtitle">New Narrative Video Title</h4>
							<a class="button outline-btn aligncenter" href="#">Learn More</a>
						</div>
						<div class="col">
							<amp-anim 
								src="<?= $images; ?>/Census-GIF-V3.gif" 
								width="50" 
								height="50" 
								layout="responsive" 
								alt="category 3 image"
							>
							<div fallback>Cannot play animated images on this device.</div>
							</amp-img>
							<a class="category-title" href="#">Category 3</a>
							<h4 class="category-subtitle">Census 2020</h4>
							<a class="button outline-btn aligncenter" href="#">Learn More</a>
						</div>
		
					</div>
				</div>
				
			<?php /* END OTHER FEATURED ITEMS AREA */ ?>
			
			<?php //get_template_part('parts/blog-carousel'); ?>


			<?php get_footer(); ?>