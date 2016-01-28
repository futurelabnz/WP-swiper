<?php
/**
 * Bootstrap Basic theme
 *
 * @package webhatchery
 */


/**
 * Required WordPress variable.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1170;
}

if ( ! function_exists( 'webhatcheryEnqueueScripts' ) ) {
	/**
	 * Enqueue scripts & styles
	 */
	function webhatcheryEnqueueScripts() {
		wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
		wp_enqueue_style( 'bootstrap-theme-style', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap-theme.min.css' );
		wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css' );
		wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/node_modules/animate.css/animate.min.css' );
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css' );

		wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js' );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), false, true );
		wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.jquery.min.js', array(), false, true );
		wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array(), false, true );
		wp_enqueue_script( 'is-on-screen', get_template_directory_uri() . '/js/jquery.isonscreen.min.js', array(), false, true );
		wp_enqueue_style( 'webhatchery-style', get_stylesheet_uri() );
	}// webhatcheryEnqueueScripts
}
add_action( 'wp_enqueue_scripts', 'webhatcheryEnqueueScripts' );


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/webhatcheryMyWalkerNavMenu.php';

//adding support for images on pages
add_theme_support( 'post-thumbnails', array( 'page' ) );
