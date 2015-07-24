<?php

define( 'WCMKE_THEME_DIR', __DIR__ ); // making sure wordpress always knows where we are

// add_theme_support( 'post-thumbnails' );

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
// function wcmke2015_scripts() {
	// wp_enqueue_style( 'screen', get_template_directory_uri() . '/static/css/mystyles.css', false, false, 'screen' );
	// wp_enqueue_script( 'jquery' );
// }

// add_action( 'wp_enqueue_scripts', 'wcmke2015_scripts' );

// require_once( WCMKE_THEME_DIR . '/inc/helpers.php' );