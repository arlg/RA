<?php

/**
 * Four Tickets Please setup.
 *
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 */

/**
 * Add Custom CSS and Scripts
 */
function _scripts() {

	wp_enqueue_style( 'tp-style', get_template_directory_uri() . '/css/main.css', array(), '',false );

	wp_enqueue_script( 'tp-plugins', get_template_directory_uri() . '/js/plugins/plugins.min.js', array(), '', true );
	wp_enqueue_script( 'tp-app', get_template_directory_uri() . '/js/app/main.js', array(), '', true );

}

add_action( 'wp_enqueue_scripts', '_scripts' );

?>