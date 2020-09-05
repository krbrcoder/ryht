<?php get_header(); ?>
    <?php 
	    $assets = get_stylesheet_directory_uri().'/assets/';
	    $images = $assets.'images/';
	  ?>

	  <?php /* BEGIN VIDEO */ ?>
			<amp-video 
					width="1280"
				  height="502"
					layout="responsive"
					poster="<?php echo $images; ?>video-placeholder.jpg"
					artwork="<?php echo $images; ?>logo/RaiseYourHandTexas-logo-color.jpg"
					title="Raise Your Hand Texas - Homepage Hero Video"
					artist="Raise Your Hand Texas"
	    		controls autoplay loop>
	      <div fallback><p>This browser does not support the video element.</p></div>
<!-- 	      <source type="video/mp4" src="https://karenchang.s3.us-east-2.amazonaws.com/Header+video+v9.mp4" type="video/mp4"> -->
	      <source type="video/mp4" src="<?php echo $assets; ?>video/ryht-video.mp4" type="video/mp4">	
	    </amp-video>
	    <?php /* END VIDEO */ ?>

			<?php /* BEGIN SOCIAL SHARE */ ?>
			<div id="social-bar">
				<amp-social-share class="rounded"
				  aria-label="Find us on Facebook"
				  type="facebook"
				  data-param-app_id="254325784911610"
				  width="48"
				  height="48"></amp-social-share>
				<amp-social-share class="rounded"
				  aria-label="Find us on Twitter"
				  type="twitter"
				  width="48"
				  height="48"></amp-social-share>
<!--
				<amp-social-share class="rounded"
				  aria-label="Find us on Instagram"
				  type="instagram"
				  width="48"
				  height="48"></amp-social-share>
				<amp-social-share class="rounded"
				  aria-label="Find us on YouTube"
				  type="youtube"
				  width="48"
				  height="48"></amp-social-share>
-->
			</div>
			<?php  /* END SOCIAL SHARE */ ?>


			<?php /* BEGIN FUTURE OF TEXAS & SITE LINKS AREA */ ?>
			<div id="future-of-texas" class="grid x-4 light-gray-bg">
				<amp-img
				src="<?php echo $images; ?>future-of-texas-50.png"
				alt="the Future of Texas is in our Public Schools"
				width="378.09"
				height="236.21"
				layout="responsive"
				></amp-img>
				The future of Texas – our economy, communities, and citizenry – depends on how well we prepare our students today. All students deserve a level playing field and equal access to a quality public education.	
			</div>

			<div id="foundation-policy-advocacy-storytelling" class="grid x-8">

				<div class="grid x-6">
					<amp-fit-text width="400" height="300" layout="responsive">
						<div class="circle">
							<amp-img
								src="<?= $images; ?>puzzle-foundation-icon.png"
								width="124"
								height="124"
								alt="puzzle pieces - foundation icon"
							></amp-img>
						</div>
						Foundation
					</amp-fit-text>
				</div>
				<div class="grid x-6">
					<amp-fit-text width="400" height="300" layout="responsive">
						<div class="circle">
							<amp-img
								src="<?= $images; ?>capitol-icon.png"
								width="124"
								height="124"
								alt="Texas State capitol - policy icon"
							></amp-img>
						</div>
						Policy
					</amp-fit-text>
				</div>
				<div class="grid x-6">
					<amp-fit-text width="400" height="300" layout="responsive">
						<div class="circle">
							<amp-img
								src="<?= $images; ?>advocacy-map-marker-icon.png"
								width="124"
								height="124"
								alt="map with map marker - advocacy icon"
							></amp-img>
						</div>
						Advocacy
					</amp-fit-text>
				</div>
				<div class="grid x-6">
					<amp-fit-text width="400" height="300" layout="responsive">
						<div class="circle">
							<amp-img
								src="<?= $images; ?>stories-icon.png"
								width="124"
								height="124"
								alt="movie marker - stories icon"
							></amp-img>
						</div>
						Storytelling
					</amp-fit-text>
				</div>

			</div>
			<?php /* END FUTURE OF TEXAS & SITE LINKS AREA */ ?>

			<?php /* BEGIN CTA AREA */ ?>
				<div class="grid x-12 light-blue-bg">
					<span class="button subscribe=-btn">Subscribe to Our Newsletter</span>
					<?php /*insert modal here */ ?>
				</div>
			<?php /* END CTA AREA */ ?>

			<?php /* BEING OUR FEATURED CONTENT AREA */ ?>
				<div id="featured-content" class="grid x-12">

					<div class="grid x-6">
						<h3 class="underline">Our Featured Content</h3>
						<p>Doggo ipsum ruff. Tungg puggorino you are doin me a concern length boy maximum borkdrive woofer, pats fat boi many pats doggorino. Puggorino much ruin diet the neighborhood pupper heck, very taste wow big ol pupper shibe waggy wags.</p>
						<a class="button outline-btn" href="#">About Us</a>
					</div>
					<div class="grid x-6">
						<a href="#">
							<amp-img 
								src="<?php echo $images; ?>teacher-can.png"
								width="400"
								height="200"
								layout="responsive"
								alt="checkmark addition sign hashtag TeachersCan"
							>
							</amp-img>
						</a>
					</div>

				</div>
			<?php /* END OUR FEATURED CONTENT AREA */ ?>
			
			<?php /* BEGIN OTHER FEATURED ITEMS AREA */ ?>
				<div id="other-featured-content" class="grid x-12">
					<h3>Other Featured Content</h3>
	
					<div class="grid-4">
						<amp-img 
							src="<?= $images; ?>category-1-bg.png" 
							width="100" 
							height="100" 
							layout="responsive" 
							alt="decoration background for category 1"
						></amp-img>
						<amp-img class="category-bg" 
							src="<?php echo $images; ?>category-1.png" 
							width="50" 
							height="50" 
							layout="responsive" 
							alt="category 1 image"
						></amp-img>
						<a class="category-title" href="#">Category 1</a>
						<h4 class="category-subtitle">Navigating a Pandemic: What's on Teachers' Minds</h4>
						<a class="button outline-btn aligncenter" href="#">Learn More</a>
					</div>
									<div class="grid-4">
						<amp-img 
							src="<?php echo $images; ?>category-2.png" 
							width="50" 
							height="50" 
							layout="responsive" 
							alt="category 2 image"
						></amp-img>
						<a class="category-title" href="#">Category 2</a>
						<h4 class="category-subtitle">New Narrative Video Title</h4>
						<a class="button outline-btn aligncenter" href="#">Learn More</a>
					</div>
					<div class="grid-4">
						<amp-img 
							src="<?php echo $images; ?>category-3.png" 
							width="50" 
							height="50" 
							layout="responsive" 
							alt="category 3 image"
						></amp-img>
						<a class="category-title" href="#">Category 3</a>
						<h4 class="category-subtitle">Census 2020</h4>
						<a class="button outline-btn aligncenter" href="#">Learn More</a>
					</div>
	
				</div>
				
			<?php /* END OTHER FEATURED ITEMS AREA */ ?>


			<?php /* BEGIN LATEST BLOGS CAROUSEL */ ?>
				<div id="latest-blogs" class="grid x-12">
					<amp-carousel id="latest-blogs-carousel" height="200" width="1200" layout="responsive" type="slides" controls autoplay loop>
		
				    <div class="carousel-section">
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-1.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 1 image"
						    	></amp-img>
						    	<span class="date">Date1</span>
						    	<span class="article-title">Article1Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-2.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 2 image"
						    	></amp-img>
						    	<span class="date">Date2</span>
						    	<span class="article-title">Article2Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-3.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 3 image"
						    	></amp-img>
						    	<span class="date">Date3</span>
						    	<span class="article-title">Article3Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-4.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 4 image"
						    	></amp-img>
						    	<span class="date">Date4</span>
						    	<span class="article-title">Article4Title</span>
					      </a>
					    </div>
		
				    </div>
		
				    <div class="carousel-section">
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-1.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 1 image"
						    	></amp-img>
						    	<span class="date">Date5</span>
						    	<span class="article-title">Article5Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-2.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 2 image"
						    	></amp-img>
						    	<span class="date">Date6</span>
						    	<span class="article-title">Article6Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-3.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 3 image"
						    	></amp-img>
						    	<span class="date">Date7</span>
						    	<span class="article-title">Article7Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-4.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 4 image"
						    	></amp-img>
						    	<span class="date">Date8</span>
						    	<span class="article-title">Article8Title</span>
					      </a>
					    </div>
		
				    </div>
		
				    <div class="carousel-section">
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-1.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 1 image"
						    	></amp-img>
						    	<span class="date">Date9</span>
						    	<span class="article-title">Article9Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-2.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 2 image"
						    	></amp-img>
						    	<span class="date">Date10</span>
						    	<span class="article-title">Article10Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-3.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 3 image"
						    	></amp-img>
						    	<span class="date">Date11</span>
						    	<span class="article-title">Article11Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-4.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 4 image"
						    	></amp-img>
						    	<span class="date">Date12</span>
						    	<span class="article-title">Article12Title</span>
					      </a>
					    </div>
		
				    </div>
		
				    <div class="carousel-section">
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-1.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 1 image"
						    	></amp-img>
						    	<span class="date">Date13</span>
						    	<span class="article-title">Article13Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-2.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 2 image"
						    	></amp-img>
						    	<span class="date">Date14</span>
						    	<span class="article-title">Article14Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-3.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 3 image"
						    	></amp-img>
						    	<span class="date">Date15</span>
						    	<span class="article-title">Article15Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-4.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 4 image"
						    	></amp-img>
						    	<span class="date">Date16</span>
						    	<span class="article-title">Article16Title</span>
					      </a>
					    </div>
		
				    </div>
		
				    <div class="carousel-section">
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-1.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 1 image"
						    	></amp-img>
						    	<span class="date">Date17</span>
						    	<span class="article-title">Article17Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-2.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 2 image"
						    	></amp-img>
						    	<span class="date">Date18</span>
						    	<span class="article-title">Article18Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-3.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 3 image"
						    	></amp-img>
						    	<span class="date">Date19</span>
						    	<span class="article-title">Article19Title</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>article-4.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 4 image"
						    	></amp-img>
						    	<span class="date">Date20</span>
						    	<span class="article-title">Article20Title</span>
					      </a>
					    </div>
		
				    </div>
		
				  </amp-carousel>
					<amp-animation layout="nodisplay">
					  <script type="application/json">
					    {
					      "selector": "#news-carousel",
					      "duration": "1s",
					      "keyframes": {"opacity": 1}
					    }
					  </script>
					</amp-animation>
				</div>
			<?php /* END LATEST BLOGS CAROUSEL */ ?>
			<?php get_footer(); ?>