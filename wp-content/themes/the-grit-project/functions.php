<?php
/**
 * The Grit Project theme functions and definitions
 *
 * @package The_Grit_Project
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Setup theme defaults and register support for various WordPress features.
 */
function grit_project_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register Navigation Menus
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'the-grit-project' ),
			'footer'  => esc_html__( 'Footer Menu', 'the-grit-project' ),
		)
	);

	// Add theme support for HTML5 markup.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'grit_project_setup' );

/**
 * Enqueue scripts and styles.
 */
function grit_project_scripts() {
	// Enqueue main stylesheet.
	wp_enqueue_style( 'grit-project-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Enqueue custom script.js.
	wp_enqueue_script( 'grit-project-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'grit_project_scripts' );

/**
 * Filter to allow SVG uploads if needed.
 */
function grit_project_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'grit_project_mime_types' );
