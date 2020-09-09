<?php 
	// DEFINITIONS
	define( 'THEME_URI', get_stylesheet_directory() );
	define( 'THEME_ASSETS', THEME_URI . '/assets' );

	//Cleaning Head Section
	remove_action( 'wp_head', 'feed_links');
	remove_action( 'wp_head', 'feed_links_extra');
	remove_action( 'wp_head', 'rsd_link');
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head');
	remove_action( 'wp_head', 'noindex');
	remove_action( 'wp_head', 'wp_print_styles');
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_head', 'wp_print_head_scripts');
	remove_action( 'wp_head', 'wp_generator');
	remove_action( 'wp_head', 'rel_canonical');
	remove_action( 'wp_head', 'wp_shortlink_wp_head');

	// https://smartwp.com/remove-gutenberg-css/
	function smartwp_remove_wp_block_library_css(){
	 wp_dequeue_style( 'wp-block-library' );
	 wp_dequeue_style( 'wp-block-library-theme' );
	 wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
	}
	add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
	
	function dequeue_unnecessary_scripts() {
    wp_dequeue_script( 'wp-embed' );
      wp_deregister_script( 'wp-embed' );
    }
	add_action( 'wp_print_scripts', 'dequeue_unnecessary_scripts' );

	require_once ( THEME_ASSETS. '/library/Mobile-Detect-2.8.34/Mobile_Detect.php' );
	
?>