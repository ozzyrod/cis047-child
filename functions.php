<?php
/**
 * Include library and setup files.
 *
 * @package    CIS047Child
 * @author     Ozzy Rodriguez
 * @since      1.0.0
 */

/**
 * The current version of the theme. Should match the version in style.css.
 *
 * @since 1.0.0
 */
define( 'CHILD_THEME_VERSION', '1.0.0' );

/**
 * The absolute path to the template's root directory with a trailing slash.
 *
 * @since 1.0.0
 * @uses  get_template_directory()
 * @uses  trailingslashit()
 */
define( 'PARENT_THEME_DIR', trailingslashit( get_template_directory() ) );

/**
 * The absolute path to the template's root directory with a trailing slash.
 *
 * @since 1.0.0
 * @uses  get_template_directory_uri()
 * @uses  trailingslashit()
 */
define( 'PARENT_THEME_URI', trailingslashit( get_template_directory_uri() ) );

/**
 * The absolute path to the template's root directory with a trailing slash.
 *
 * @since 1.0.0
 * @uses  get_stylesheet_directory()
 * @uses  trailingslashit()
 */
define( 'CHILD_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );

/**
 * The absolute path to the template's root directory with a trailing slash.
 *
 * @since 1.0.0
 * @uses  get_stylesheet_directory_uri()
 * @uses  trailingslashit()
 */
define( 'CHILD_THEME_URI', trailingslashit( get_stylesheet_directory_uri() ) );

/**
 * Enqueue necessary styles for the theme.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function cis047_child_styles() {
	$child_style  = 'cis047-child-style';

	wp_enqueue_style( 'cis047-child-fonts', '//fonts.googleapis.com/css?family=Source+Code+Pro:400,700|Source+Sans+Pro:400,400i,700,700i,900,900i', array(), null );
	wp_enqueue_style( $child_style, CHILD_THEME_URI . 'style.css', array(), CHILD_THEME_VERSION );
}

add_action( 'wp_enqueue_scripts', 'cis047_child_styles', 5 );

/**
 * Dequeue necessary styles.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function cis047_child_dequeue_styles() {
	wp_dequeue_style( 'twentysixteen-fonts' );
}

add_action( 'wp_print_styles', 'cis047_child_dequeue_styles', 99 );
