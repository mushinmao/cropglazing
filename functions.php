<?php
/**
 * Cropglazing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cropglazing
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cropglazing_setup() {

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
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Primary', 'cropglazing' ),
			'footer-menu' => esc_html__( 'Secondary (footer)', 'cropglazing' ),
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'cropglazing_setup' );

/**
 * Enqueue scripts and styles.
 */
function cropglazing_scripts() {
	wp_enqueue_style( 'cropglazing-bootstrap-style', get_template_directory_uri() . '/includes/bootstrap/css/bootstrap.min.css', array(), '5.1.3' );
	wp_enqueue_style( 'cropglazing-bootstrap-icons', get_template_directory_uri() . '/includes/bootstrap/icons/bootstrap-icons.css', array(), '1.7.2' );
	wp_enqueue_style( 'cropglazing-lightbox', get_template_directory_uri() . '/includes/lightbox/css/lightbox.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'cropglazing-style', get_template_directory_uri() . '/style.min.css', array(), time());

	wp_enqueue_script( 'cropglazing-jquery', get_template_directory_uri() . '/includes/jquery/jquery.min.js', array(), '3.6.0', true );
	wp_enqueue_script( 'cropglazing-bootstrap', get_template_directory_uri() . '/includes/bootstrap/js/bootstrap.bundle.min.js', array(), '5.1.3', true );
	wp_enqueue_script( 'cropglazing-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'cropglazing-lightbox-js', get_template_directory_uri() . '/includes/lightbox/js/lightbox.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cropglazing_scripts' );

require_once 'classes/Header_Nav_Walker.php';
require_once 'classes/Simple_Nav_Walker.php';

# Разрешить загрузку svg
function allow_type($type) {
    $type['svg'] = 'image/svg+xml';
    return $type;
}
add_filter('upload_mimes', 'allow_type');

