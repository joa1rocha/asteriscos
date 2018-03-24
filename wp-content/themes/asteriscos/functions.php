<?php
/**
 * Asteriscos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Asteriscos
 * @since 1.0
 */

/**
 * Asteriscos only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

function add_theme_scripts() {
    enqueue_styles();
    enqueue_scripts();
}

function enqueue_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array());
	wp_enqueue_style( 'noscript', get_template_directory_uri() . '/assets/css/noscript.css', array());

}

function enqueue_scripts() {
	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'));
	wp_enqueue_script( 'jquery-scrollex-min', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array('jquery'));
	wp_enqueue_script( 'jquery-scrolly-min', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array('jquery'));
	wp_enqueue_script( 'skel-min', get_template_directory_uri() . '/assets/js/skel.min.js', array('jquery'));
	wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', array('jquery'));
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'));
	wp_enqueue_script( 'asteriscos', get_template_directory_uri() . '/assets/js/asteriscos.js', array('jquery'));
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 150,
		'single_image_width'    => 300,

//		'product_grid'          => array(
//			'default_rows'    => 3,
//			'min_rows'        => 2,
//			'max_rows'        => 8,
//			'default_columns' => 4,
//			'min_columns'     => 2,
//			'max_columns'     => 5,
//		),
	) );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
