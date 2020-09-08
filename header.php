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
    <?php wp_head(); ?>

    <script async src="https://cdn.ampproject.org/v0.js"></script>
		
    <?php /* AMP EXTENSIONS */?>
		<script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>
		<script async custom-element="amp-animation" src="https://cdn.ampproject.org/v0/amp-animation-0.1.js"></script>
		<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
		<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
		<script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
		<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
	  <script async custom-element="amp-mega-menu" src="https://cdn.ampproject.org/v0/amp-mega-menu-0.1.js"></script>
 		<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js"></script>
		<script async custom-element="amp-position-observer" src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.js"></script>
		<script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
		<script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>

<!--
		<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
		<script async custom-element="amp-fx-flying-carpet" src="https://cdn.ampproject.org/v0/amp-fx-flying-carpet-0.1.js"></script>
-->

    <?php /* FONT */?>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <?php $images = get_stylesheet_directory_uri().'/assets/images'; ?>

<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <style amp-custom>
	    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/css/main.css' ); ?>
    </style>

  </head>
  <body <?php body_class(); ?>>
	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php endwhile; endif; ?>
	  <header>

			<?php /* BEGIN MEGA MENU */ ?>
			<div id="logo-wrapper">
        <amp-img
          src="<?php echo $images; ?>/logos/ryht-logo-tiny.png"
          width="165"
          height="50"
          alt="Raise Your Hand Texas Logo"
        ></amp-img>
			</div>
			<amp-mega-menu height="75" layout="fixed-height" class="ryht-nav hide-sm">
			  <nav>
			    <ul>
			      <li>
			        <span role="button">Foundation</span>
			        <div role="dialog">
				        <amp-img src="<?php echo $images; ?>/foundation-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
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
				        <amp-img src="<?php echo $images; ?>/advocacy-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
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
				        <amp-img src="<?php echo $images; ?>/advocacy-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
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
				        <amp-img src="<?php echo $images; ?>/advocacy-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
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
				        <amp-img src="<?php echo $images; ?>/advocacy-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
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
				        <amp-img src="<?php echo $images; ?>/advocacy-mega-menu.jpg" width="177" height="202" layout="responsive"></amp-img>
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
      <span role="button" class="search hide-sm"><span class="sr-only">Search Icon</span></span>
      <div id="search-bar">
        <form class="sample-form"
				  method="GET"
				  action="/documentation/examples/api/submit-form"
				  target="_top">
				  <input type="search"
				    placeholder="Search..."
				    name="search">
				  <input type="submit"
				    value="OK">
				</form>
      </div>
			<?php /* END MEGA MENU */ ?>

				  <a class="target-anchor" id="top"></a>
				  <amp-position-observer on="enter:hideAnim.start; exit:showAnim.start" layout="nodisplay">
				  </amp-position-observer>

	  </header>