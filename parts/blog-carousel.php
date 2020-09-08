    <?php $images = get_stylesheet_directory_uri().'/assets/images'; ?>
			<?php /* BEGIN LATEST BLOGS CAROUSEL */ ?>
			<div id="latest-blogs" class="container-fluid hide-sm">
				<div class="col">
					<h2>Latest Blogs</h2>
					<amp-carousel id="latest-blogs-carousel" height="75" width="1100" layout="responsive" type="slides" on="slideChange:AMP.setState({selected: {slide: event.index}}),carousel-indicators.toggle(index=event.index, value=true)" controls autoplay loop>
		
				    <div class="carousel-section">
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-1.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 1 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date1</span>
							    	<span class="article-title">Article1Title</span>
						    	</span>
					      </a>
					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-2.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 2 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date2</span>
						    	<span class="article-title">Article2Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-3.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 3 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date3</span>
						    	<span class="article-title">Article3Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-4.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 4 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date4</span>
						    	<span class="article-title">Article4Title</span>
						    	</span>
					      </a>

					    </div>
		
				    </div>
		
				    <div class="carousel-section">
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-1.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 1 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date5</span>
						    	<span class="article-title">Article5Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-2.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 2 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date6</span>
						    	<span class="article-title">Article6Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-3.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 3 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date7</span>
						    	<span class="article-title">Article7Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-4.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 4 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date8</span>
						    	<span class="article-title">Article8Title</span>
						    	</span>
					      </a>

					    </div>
		
				    </div>
		
				    <div class="carousel-section">
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-1.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 1 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date9</span>
						    	<span class="article-title">Article9Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-2.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 2 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date10</span>
						    	<span class="article-title">Article10Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-3.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 3 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date11</span>
						    	<span class="article-title">Article11Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-4.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 4 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date12</span>
						    	<span class="article-title">Article12Title</span>
						    	</span>
					      </a>

					    </div>
		
				    </div>
		
				    <div class="carousel-section">
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-1.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 1 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date13</span>
						    	<span class="article-title">Article13Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-2.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 2 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date14</span>
						    	<span class="article-title">Article14Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-3.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 3 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date15</span>
						    	<span class="article-title">Article15Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-4.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 4 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date16</span>
						    	<span class="article-title">Article16Title</span>
						    	</span>
					      </a>
					    </div>	
				    </div>
		
				    <div class="carousel-section">
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-1.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 1 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date17</span>
						    	<span class="article-title">Article17Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-2.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 2 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date18</span>
						    	<span class="article-title">Article18Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-3.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 3 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date19</span>
						    	<span class="article-title">Article19Title</span>
						    	</span>
					      </a>

					    </div>
		
				      <div class="blog-carousel-item">
					      <a href="#">
						    	<amp-img
						    		src="<?= $images; ?>/article-4.png"
						    		width="50"
						    		height="50"
						    		layout="responsive"
						    		alt="article 4 image"
						    	></amp-img>
						    	<span class="text-area">
							    	<span class="date">Date20</span>
						    	<span class="article-title">Article20Title</span>
						    	</span>
					      </a>
					    </div>		
				    </div>
		
				  </amp-carousel>
					<amp-animation layout="nodisplay">
					  <script type="application/json">
					    {
					      "selector": "#latest-blogs-carousel",
					      "duration": "1s",
					      "keyframes": {"opacity": 1}
					    }
					  </script>
					</amp-animation>
					<amp-selector
						on="select:custom-button.goToSlide(index=event.targetOption)"
						layout="container"
					>

						<div id="carousel-indicators" class="indicator-wrapper">
							<div class="dots">
							  <span [class]="selected.slide == 0 ? 'current' : ''" class="current" option="0" selected></span>
							  <span [class]="selected.slide == 1 ? 'current' : ''" option="1"></span>
							  <span [class]="selected.slide == 2 ? 'current' : ''" option="2"></span>
							  <span [class]="selected.slide == 3 ? 'current' : ''" option="3"></span>
							  <span [class]="selected.slide == 4 ? 'current' : ''" option="4"></span>
							</div>
						</div>
					</amp-selector>
					<a class="view-blogs" href="#">View All Blogs</a>
				</div>
			</div>
			<?php /* END LATEST BLOGS CAROUSEL */ ?>