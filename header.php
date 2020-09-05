<!doctype html>
<html ⚡ lang="en">
  <head>

    <meta charset="utf-8">
		<title><?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="This is the Riase Your Hand Texas - website landing presentation page">
		<link rel="shortcut icon" href="https://www.raiseyourhandtexas.org/wp-content/uploads/2015/07/favico.png">
		<link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/RaiseYourHandTexas_logo-black.jpg" as="image">
		<link rel="canonical" href="https://www.raiseyourhandtexas.org">
    <link rel="preconnect dns-prefetch" href="https://fonts.gstatic.com/" crossorigin>

    <script async src="https://cdn.ampproject.org/v0.js"></script>
		
    <?php /* AMP EXTENSIONS */?>
	  <script async custom-element="amp-mega-menu" src="https://cdn.ampproject.org/v0/amp-mega-menu-0.1.js"></script>
		<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
		<script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>
		<script async custom-element="amp-animation" src="https://cdn.ampproject.org/v0/amp-animation-0.1.js"></script>
		<script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
		<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
		<script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
		<?php /* use to dynamically change image??? */ ?><script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
<!--
		<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
		<script async custom-element="amp-position-observer" src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.js"></script>
		<script async custom-element="amp-fx-flying-carpet" src="https://cdn.ampproject.org/v0/amp-fx-flying-carpet-0.1.js"></script>
 		<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js"></script>
-->

    <?php /* FONT */?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <?php 
	    $assets = get_stylesheet_directory_uri().'/assets/';
	    $images = $assets.'images/';
	  ?>


    <style amp-custom>
	    <?php /* CUSTOM STYLES - CONVERT TO SASS & MINIFY */ ?>
	    body, html, p {font-family: 'Montserrat',san-serif;}
	    #logo-wrapper {padding: 8px 68px 14px;background-color: rgba(0,0,0,.1);float: left;}
	    .grid {float:left;}
	    .x-4 {width: 32.5%;}
	    .x-6 {width:49.5%;}
	    .x-8 {width: 65.5%;}
	    .light-gray-bg { background-color:#F9F9F9;}
	    .gray-bg {}
	    .ryht-supernav {background-color: rgba(255,255,255,.9);}
	    .carousel-section>* {width:25%;height:100px;float:left;}
/* 	    .background {background-image:url('<?php echo $images; ?>reference.png'); background-position-x: center; background-size:150%;width:100%;height:400vh; background-position-y:-144px;} */
			:root {
		    --color-primary: #F15C22;
		    --border: #fff;
		  }
		  /* a custom sharing icon */
		  amp-social-share.custom-style {
		    background-color: #008080;
		    background-image: url('https://raw.githubusercontent.com/google/material-design-icons/master/social/1x_web/ic_share_white_48dp.png');
		    background-repeat: no-repeat;
		    background-position: center;
		    background-size: contain;
		  }
		  /* blue icons with rounded corners  */
		  .rounded {
		    border-radius: 50%;
		    background-size: 60%;
		    border-color: var(--color-text-light);
		    /*background-color: var(--color-primary); */
		  }
/* 		  #foundation-policy-advocacy-storytelling amp-img {} */
    </style>

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

  </head>
  <body <?php body_class(); ?>>
	  <div class="background">
	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php endwhile; endif; ?>
		  <header>

				<?php /* BEGIN MEGA MENU */ ?>
				<div id="logo-wrapper">
	        <amp-img
	          src="<?php echo $images; ?>logos/ryht-logo-tiny.png"
	          width="165"
	          height="50"
	          alt="Raise Your Hand Texas Logo"
	        ></amp-img>
				</div>
				<amp-mega-menu height="5rem" layout="fixed-height" class="ryht-supernav">
				  <nav>
				    <ul>
				      <li>
				        <span role="button">Foundation</span>
				        <div role="dialog">
					        <amp-img src="<?php echo $images; ?>foundation-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
				          <ol>
										<li class="h3"><a href="https://www.raiseyourhandtexas.org/foundation/">Foundation Overview</a></li>
										<li class="hr-ruler"></li>
				            <li><a href="https://www.raiseyourhandtexas.org/foundation/blended">Raising Blended Learners</a></li>
				            <li><a href="https://www.raiseyourhandtexas.org/foundation/raising-family-partnerships">Raising Family Partnerships</a></li>
				            <li><a href="https://www.raiseyourhandtexas.org/foundation/raising-texas-teachers">Raising Texas Teachers</a></li>
				            <li><a href="https://www.raiseyourhandtexas.org/foundation/raising-school-leaders">Raising School Leaders</a></li>
				            <li><a href="https://www.raiseyourhandtexas.org/2020poll">RYHT Poll</a></li>
				            <li><a href="https://www.raiseyourhandtexas.org/foundation/raising-texas-teachers/voices-on-teaching">Our Campaign</a></li>
				            <li><a href="https://www.raiseyourhandtexas.org/foundation/raising-texas-teachers/charles-butt-scholarship">Charles Butt Scholarship</a></li>
				          </ol>
				        </div>
				      </li>
				      <li>
				        <span role="button">Advocacy</span>
				        <div role="dialog">
					        <amp-img src="<?php echo $images; ?>advocacy-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
				          <ol>
				            <li><a href="#">Census 2020</a></li>
				            <li><a href="#">Candidate Forums &#038; Town Halls</a></li>
				            <li><a href="#">Regional Advocacy Directors</a></li>
				          </ol>
				        </div>

				      </li>
				      <li>
				        <span role="button">Policy</span>
				        <div role="dialog">
					        <!--
					        <amp-img src="<?php echo $images; ?>advocacy-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
				          <ol>
				            <li><a href="#">Census 2020</a></li>
				            <li><a href="#">Candidate Forums &#038; Town Halls</a></li>
				            <li><a href="#">Regional Advocacy Directors</a></li>
				          </ol>
				          -->
				        </div>

				      </li>
				      <li>
				        <span role="button">Stories</span>
				        <div role="dialog">
					        <!--
					        <amp-img src="<?php echo $images; ?>advocacy-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
				          <ol>
				            <li><a href="#">Census 2020</a></li>
				            <li><a href="#">Candidate Forums &#038; Town Halls</a></li>
				            <li><a href="#">Regional Advocacy Directors</a></li>
				          </ol>
				          -->
				        </div>

				      </li>
				      <li>
				        <span role="button">Newsroom</span>
				        <div role="dialog">
					        <!--
					        <amp-img src="<?php echo $images; ?>advocacy-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
				          <ol>
				            <li><a href="#">Census 2020</a></li>
				            <li><a href="#">Candidate Forums &#038; Town Halls</a></li>
				            <li><a href="#">Regional Advocacy Directors</a></li>
				          </ol>
				          -->
				        </div>

				      </li>
				      <li>
				        <span role="button">About Us</span>
				        <div role="dialog">
					        <!--
					        <amp-img src="<?php echo $images; ?>advocacy-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
				          <ol>
				            <li><a href="#">Census 2020</a></li>
				            <li><a href="#">Candidate Forums &#038; Town Halls</a></li>
				            <li><a href="#">Regional Advocacy Directors</a></li>
				          </ol>
				          -->
				        </div>

				      </li>
				    </ul>
				  </nav>
				</amp-mega-menu>
				<?php /* END MEGA MENU */ ?>

		  </header>