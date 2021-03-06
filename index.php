		<?php get_header(); ?>
		<section id="main-body">
    <?php $images = get_stylesheet_directory_uri().'/assets/images'; ?>

			<?php  $detect = new Mobile_Detect;
				if ( !$detect->isMobile() ) { 
					get_template_part('parts/video'); 
					get_template_part('parts/social-bar'); 
				} else { ?>
					<div class="container-fluid">
						<amp-img 
								width="400"
							  height="323"
								layout="responsive"
								src="<?= $images; ?>/video-placeholder.jpg"
				    		>
				    </amp-img>
				  </div>
			  <?php } ?>


			<?php /* BEGIN FUTURE OF TEXAS & SITE LINKS AREA */ ?>
			<div class="container-fluid light-gray-gradient">
				
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
						<div class="super-box">
							<div class="magic-box magic-box-1">
								<div class="icon_bg"></div>
							</div>
							<div class="icon">
								<amp-img
									src="<?= $images; ?>/foundation-icon.png"
									width="125"
									height="125"
									alt="puzzle pieces - foundation icon"
								></amp-img>
							</div>
							<div class="title">Our Foundation</div>
						</div>
						<div class="super-box">
							<div class="magic-box magic-box-2">
								<div class="icon_bg"></div>
							</div>
							<div class="icon">
								<amp-img
									src="<?= $images; ?>/capitol-icon.png"
									width="125"
									height="125"
									alt="Texas State capitol - policy icon"
								></amp-img>
							</div>
							<div class="title">Policy</div>
						</div>
						<div class="super-box">
							<div class="magic-box magic-box-3">
								<div class="icon_bg"></div>
							</div>
							<div class="icon">
								<amp-img
									src="<?= $images; ?>/advocacy-icon.png"
									width="125"
									height="125"
									alt="map with map marker - advocacy icon"
								></amp-img>
							</div>
							<div class="title">Advocacy</div>
						</div>
						<div class="super-box">
							<div class="magic-box magic-box-4">
								<div class="icon_bg"></div>
							</div>
							<div class="icon">
								<amp-img
									src="<?= $images; ?>/stories-icon.png"
									width="125"
									height="125"
									alt="movie marker - stories icon"
								></amp-img>
							</div>
							<div class="title">Storytelling</div>
						</div>
					</div>

				</div>
				
			</div>
			<?php /* END FUTURE OF TEXAS & SITE LINKS AREA */ ?>

			<?php get_template_part('parts/main-body-subscribe'); ?>

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
									<amp-img class="featured-img blurgray"
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
			
			<?php if ( !$detect->isMobile() ) { get_template_part('parts/blog-carousel'); } ?>
			
			</section>

			<?php get_footer(); ?>