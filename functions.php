<?php
/**
 * Hotelia theme setup.
 *
 * @package Hotelia
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'HOTELIA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function hotelia_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'hotelia' ),
			'footer'  => esc_html__( 'Footer', 'hotelia' ),
		)
	);

	load_theme_textdomain( 'hotelia', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'hotelia_setup' );

/**
 * Footer widget area.
 */
function hotelia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'hotelia' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'hotelia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'hotelia_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function hotelia_enqueue_assets() {
	wp_enqueue_style( 'hotelia-style', get_stylesheet_uri(), array(), HOTELIA_VERSION );
	wp_enqueue_script( 'hotelia-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), HOTELIA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'hotelia_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function hotelia_enqueue_editor_assets() {
	wp_enqueue_style( 'hotelia-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), HOTELIA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'hotelia_enqueue_editor_assets' );

/**
 * Register the Hotelia pattern category.
 */
function hotelia_register_pattern_category() {
	register_block_pattern_category(
		'hotelia',
		array( 'label' => esc_html__( 'Hotelia', 'hotelia' ) )
	);
}
add_action( 'init', 'hotelia_register_pattern_category' );

/**
 * Custom block styles.
 */
function hotelia_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'gold-outline', 'label' => esc_html__( 'Gold Outline', 'hotelia' ) ) );
	register_block_style( 'core/group', array( 'name' => 'room-card', 'label' => esc_html__( 'Room Card', 'hotelia' ) ) );
	register_block_style( 'core/image', array( 'name' => 'soft-frame', 'label' => esc_html__( 'Soft Frame', 'hotelia' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'gold-rule', 'label' => esc_html__( 'Gold Rule', 'hotelia' ) ) );
}
add_action( 'init', 'hotelia_register_block_styles' );

/**
 * Custom excerpt length.
 */
function hotelia_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'hotelia_excerpt_length' );

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function hotelia_icon( $name ) {
	$icons = array(
		'bed'   => '<path d="M3 18v-6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6"/><path d="M3 18h18M5 10V6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4"/>',
		'bath'  => '<path d="M4 12h16v2a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5v-2z"/><path d="M6 19l-1 2M18 19l1 2M7 12V5a2 2 0 0 1 4 0"/>',
		'area'  => '<rect x="4" y="4" width="16" height="16" rx="2"/><path d="M4 12h16M12 4v16"/>',
		'users' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
		'star'  => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
		'wifi'  => '<path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0M12 20h.01"/>',
		'coffee' => '<path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><path d="M6 1v3M10 1v3M14 1v3"/>',
		'pool'  => '<path d="M2 17c1.5 1 3 1 4.5 0s3-1 4.5 0 3 1 4.5 0 3-1 4.5 0"/><path d="M2 21c1.5 1 3 1 4.5 0s3-1 4.5 0 3 1 4.5 0 3-1 4.5 0"/><path d="M7 13V5a2 2 0 0 1 4 0"/>',
		'phone' => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'  => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'pin'   => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
		'clock' => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
		'key'   => '<path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
