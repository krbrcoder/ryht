    <?php $images = get_stylesheet_directory_uri().'/assets/images'; ?>
			<?php /* BEGIN OTHER FEATURED ITEMS AREA */ ?>
				<div id="other-featured-content" class="container-fluid">
					<div class="container">
						<div class="row light-gray-bg">
							<h2>Other Featured Items Go Here</h2>

							<div class="col">
								<div class="category-bg-1">
									<amp-img class="image"
										src="<?= $images; ?>/category-1.png" 
										width="1" 
										height="1" 
										layout="responsive" 
										alt="category 1 image"
									></amp-img>
								</div>
								<a class="category-title" href="#">Category 1</a>
								<h4 class="category-subtitle">Navigating a Pandemic: What's on Teachers' Minds</h4>
								<a class="button btn-outline-blue" href="#">Learn More</a>
							</div>
							<div class="col">
								<div class="category-bg-2">
									<amp-img class="image"
										src="<?= $images; ?>/category-2.png" 
										width="360" 
										height="479" 
										layout="responsive" 
										alt="category 2 image"
									></amp-img>
								</div>
								<a class="category-title" href="#">Category 2</a>
								<h4 class="category-subtitle">New Narrative Video Title<br />&nbsp;</h4>
								<a class="button btn-outline-blue" href="#">Learn More</a>
							</div>
							<div class="col">
								<div class="category-bg-3">
									<amp-anim class="image"
										src="<?= $images; ?>/Census-GIF-V3.gif" 
										width="1" 
										height="1" 
										layout="responsive" 
										alt="category 3 image"
									>
									<div fallback>Cannot play animated images on this device.</div>
									</amp-anim>
								</div>
								<a class="category-title" href="#">Category 3</a>
								<h4 class="category-subtitle">Census 2020<br />&nbsp;</h4>
								<a class="button btn-outline-blue" href="#">Learn More</a>
							</div>

						</div>
					</div>
				</div>				
				<?php /* END OTHER FEATURED ITEMS AREA */ ?>
