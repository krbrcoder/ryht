    <?php $images = get_stylesheet_directory_uri().'/assets/images/'; ?>
			<?php /* BEGIN FOOTER */ ?>
				<footer class="gray-texture-bg container-fluid">
					<div class="container">
						
						<?php $detect = new Mobile_Detect;
							if ( !$detect->isMobile() ) { 
							get_template_part('parts/footer-links'); 
							get_template_part('parts/footer-subscribe');
						} ?>

						<div id="copyright" class="row">
							<div class="col push-right">
								<a href="#">
									<amp-img
									  src="<?= $images; ?>/logos/ryht-logo-tiny.png"
					          width="165"
					          height="50"
					          alt="Raise Your Hand Texas Logo"
					        ></amp-img>
								</a>
							</div>
							<div class="col-8 push-left">
								<p><a href="#">Privacy Policy</a> <br />
								© Raise Your Hand Texas - All Rights Reserved <br />
								501(c)(3): 20-3918577 | 501(c)(4): 20-8119071</p>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<p class="address">1005 Congress Ave., Austin, TX 78701 &nbsp;&nbsp;| &nbsp;&nbsp;(512) 617-2121</p>
							</div>
						</div>
					</div>
				</footer>
			  <amp-animation id="showAnim" layout="nodisplay">
			    <script type="application/json">
			      {
			        "duration": "350ms",
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
			  <amp-animation id="hideAnim" layout="nodisplay">
			    <script type="application/json">
			      {
			       "duration": "350ms",
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
			  <button id="scrollToTopButton" on="tap:top.scrollTo(duration=350)" class="scrollToTop">⌃</button>
			<?php /* END FOOTER */ ?>
			<?php wp_footer(); ?>
  </body>
</html>