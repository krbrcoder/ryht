    <?php $images = get_stylesheet_directory_uri().'/assets/images'; ?>
			<div id="hamburger-menu" class="hide-lg">
			  <div class="hamburger_wrapper">
			    <div id="hamburger" tabindex="1" role="button" on="tap:hamburger.toggleClass(class='close'),nav-menu.toggleClass(class='now-active')">
			      <span></span>
			      <span></span>
			      <span></span>
			    </div>
			  </div>
			  <div id="nav-menu">
			    <ul class="nav-list">
			      <li><a href="#">Foundation</a></li>
			      <li><a href="#">Advocacy</a></li>
			      <li><a href="#">Policy</a></li>
			      <li><a href="#">Stories</a></li>
			      <li><a href="#">Newsroom</a></li>
			      <li><a href="#">About Us</a></li>
			    </ul>
			    
			    <?php /* BEGIN FORM */ ?>
		        <form class="sample-form"
						  method="GET"
						  action="/documentation/examples/api/submit-form"
						  target="_top">
						  <input type="search"
						    placeholder="Search..."
						    name="search">
						  <input type="submit"
						    value="">
						</form>
					<?php /* END FORM */ ?>
			    
			    <div class="hamburger-social-bar">
						<a href="#">
							<amp-img class="facebook"
								src="<?= $images; ?>/logos/facebook.svg"
								width="35"
								height="35"
								alt="facebook icon"
							></amp-img>
						</a>
						<a href="#">
							<amp-img class="twitter"
								src="<?= $images; ?>/logos/twitter.svg"
								width="35"
								height="35"
								alt="twitter icon"
							></amp-img>
						</a>
						<a href="#">
							<amp-img class="instagram"
								src="<?= $images; ?>/logos/instagram.svg"
								width="35"
								height="35"
								alt="instagram icon"
							></amp-img>
						</a>
						<a href="#">
							<amp-img class="youtube"
								src="<?= $images; ?>/logos/youtube.svg"
								width="35"
								height="35"
								alt="youtube icon"
							></amp-img>
						</a>
			    </div>
			  </div>
			</div>