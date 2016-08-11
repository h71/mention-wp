<?php

// Add needed class name to menu items
function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'navLink';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);


if ( ! function_exists( 'mention_wp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mention_wp_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Mention, use a find and replace
	 * to change 'mention-wp' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mention-wp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'mention-wp' ),
		'footer' => esc_html__( 'Footer Menu', 'mention-wp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mention_wp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // mention_wp_setup
add_action( 'after_setup_theme', 'mention_wp_setup' );


/**
 * Load public assets
 */
function mention_wp_public_assets() {

	wp_enqueue_style( 'mention-wp-style', get_template_directory_uri() . '/style.css', array(), false, 'all' );
	wp_enqueue_style( 'mention-wp-font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), false, 'all' );
	wp_enqueue_script( 'mention-wp-js', get_template_directory_uri() . '/js/main.js', array(), false, true );

}
add_action( 'wp_enqueue_scripts', 'mention_wp_public_assets' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';