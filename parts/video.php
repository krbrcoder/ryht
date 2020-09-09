    <?php $images = get_stylesheet_directory_uri().'/assets/images'; ?>
	  <?php /* BEGIN VIDEO */ ?>
	  <div class="container-fluid">
				<amp-video class="video"
						width="1280"
					  height="502"
						layout="responsive"
						poster="<?= $images; ?>/video-placeholder.jpg"
						artwork="<?= $images; ?>/logo/RaiseYourHandTexas-logo-color.jpg"
						src="https://karenchang.s3.us-east-2.amazonaws.com/Header+video+v9.mp4"
						title="Raise Your Hand Texas - Homepage Hero Video"
						artist="Raise Your Hand Texas"
		    		controls autoplay loop>
		      <div fallback><p>This browser does not support the video element.</p></div>
		    </amp-video>
	  </div>
	    <?php /* END VIDEO */ ?>