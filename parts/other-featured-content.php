    <?php $images = get_stylesheet_directory_uri().'/assets/images'; ?>
			<?php /* BEGIN OTHER FEATURED ITEMS AREA */ ?>
				<div id="other-featured-content" class="container-fluid">
					<div class="container">
						<div class="row light-gray-bg box-wrap">
							<h2>Other Featured Items Go Here</h2>
	
								<div class="box">
									<amp-img class="image"
										src="<?= $images; ?>/category-1.png" 
										width="481" 
										height="640" 
										layout="responsive" 
										alt="category 1 image"
									></amp-img>
									<a class="category-title" href="#">Category 1</a>
									<h4 class="category-subtitle">Navigating a Pandemic: What's on Teachers' Minds</h4>
									<a class="button btn-outline-blue" href="#">Learn More</a>
								</div>
								<div class="box">
									<amp-img class="image"
										src="<?= $images; ?>/category-2.png" 
										width="481" 
										height="640" 
										layout="responsive" 
										alt="category 2 image"
									></amp-img>
									<a class="category-title" href="#">Category 2</a>
									<h4 class="category-subtitle">New Narrative Video Title<br />&nbsp;</h4>
									<a class="button btn-outline-blue" href="#">Learn More</a>
								</div>
								<div class="box">
									<amp-img class="image"
										src="<?= $images; ?>/category-3-animation.png" 
										width="481" 
										height="640" 
										layout="responsive" 
										alt="category 3 image"
									>
									<div fallback>Cannot play animated images on this device.</div>
									</amp-img>
									<a class="category-title" href="#">Category 3</a>
									<h4 class="category-subtitle">Census 2020<br />&nbsp;</h4>
									<a class="button btn-outline-blue" href="#">Learn More</a>
								</div>
	
						</div>
					</div>
				</div>				
				<?php /* END OTHER FEATURED ITEMS AREA */ ?>
