    <?php $images = get_stylesheet_directory_uri().'/assets/images'; ?>
			<?php /* BEGIN LATEST BLOGS CAROUSEL */ ?>
			<div id="latest-blogs" class="container-fluid hide-sm">
				<div class="container">
					<div class="row">
						<h2>Latest Blogs</h2>
						<amp-carousel id="latest-blogs-carousel" height="100" width="1200" layout="responsive" type="slides" on="slideChange:AMP.setState({selected: {slide: event.index}}),carousel-indicators.toggle(index=event.index, value=true)" controls autoplay loop>
			
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
								    	<span class="date">01 | July 16, 2020</span>
								    	<span class="article-title">Beyond the Classroom: How Teachers Are Coping and Connecting in the Age of COVID</span>
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
								    	<span class="date">02 | June 29, 2020</span>
							    	<span class="article-title">Navigating a Pandemic: What's on Teachers' Minds?</span>
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
								    	<span class="date">03 | June 19, 2020</span>
							    	<span class="article-title">Where Do We Go From Here?</span>
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
								    	<span class="date">04 | June 12, 2020</span>
							    	<span class="article-title">A Virtual Mirage</span>
							    	</span>
						      </a>
	
						    </div>
			
					    </div>
			
					    <div class="carousel-section">
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-5.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 1 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">05 | June 10, 2020</span>
							    	<span class="article-title">Our Responsibility in Creating an Equitable, Just Future</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-6.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 2 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">06 | May 8, 2020</span>
							    	<span class="article-title">Voices on Teaching: Erika Carter</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-7.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 3 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">07 | May 7, 2020</span>
							    	<span class="article-title">Voices on Teaching: Clarence Washington</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-8.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 4 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">08 | May 6, 2020</span>
							    	<span class="article-title">Voices on Teaching: Christine Lowak</span>
							    	</span>
						      </a>
	
						    </div>
			
					    </div>
			
					    <div class="carousel-section">
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-9.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 1 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">09 | May 5, 2020</span>
							    	<span class="article-title">Voices on Teaching: John Friedman</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-10.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 2 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">10 | May 5, 2020</span>
							    	<span class="article-title">A Teacher Inspired by Flat Stanley Provokes Parents to #ThankATeacher this #TeacherAppreciationDay</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-11.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 3 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">11 | May 4, 2020</span>
							    	<span class="article-title">Voices on Teaching: John B. King Jr.</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-12.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 4 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">12 | April 28, 2020</span>
							    	<span class="article-title">Robotics Teams Respond to COVID-19 Call</span>
							    	</span>
						      </a>
	
						    </div>
			
					    </div>
			
					    <div class="carousel-section">
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-13.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 1 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">13 | April 24, 2020</span>
							    	<span class="article-title">Q&A: Challenges & Opportunities for New Teachers During COVID-19</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-14.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 2 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">14 | April 17, 2020</span>
							    	<span class="article-title">This Can't Be the New Normal</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-15.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 3 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">15 | April 9, 2020</span>
							    	<span class="article-title">Making Miracles Happen Through Focus on Mental Health in Schools</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-16.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 4 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">16 | April 9, 2020</span>
							    	<span class="article-title">Extending Community and Mindfulness to Remote Learning</span>
							    	</span>
						      </a>
						    </div>	
					    </div>
			
					    <div class="carousel-section">
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-17.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 1 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">17 | April 6, 2020</span>
							    	<span class="article-title">10 Questions Teachers Should Ask to Ensure Student Security and Wellness During COVID-19</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-18.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 2 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">18 | April 3, 2020</span>
							    	<span class="article-title">#TxEdRising</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-19.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 3 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">19 | March 27, 2020</span>
							    	<span class="article-title">Innovating Personal Connections with Students During COVID-19</span>
							    	</span>
						      </a>
	
						    </div>
			
					      <div class="blog-carousel-item">
						      <a href="#">
							    	<amp-img
							    		src="<?= $images; ?>/article-20.jpg"
							    		width="50"
							    		height="50"
							    		layout="responsive"
							    		alt="article 4 image"
							    	></amp-img>
							    	<span class="text-area">
								    	<span class="date">20 | April 3, 2020</span>
							    	<span class="article-title">In Blended Learning and in the Age of COVID-19, Teachers, not Technology, are the Key to Student Success</span>
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
						<div class="col"><a class="view-blogs" href="#">View All Blogs</a></div>
					</div>
				</div>
			</div>
			<?php /* END LATEST BLOGS CAROUSEL */ ?>