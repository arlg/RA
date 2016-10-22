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

add_filter( "the_content", "add_class_to_img_content" );
function add_class_to_img_content( $content ) {
    return str_replace('<p><img ', '<p class="img_wrapper"><img ', $content);
}

add_filter( "the_content", "add_class_to_p_content" );
function add_class_to_p_content( $content ) {
    return str_replace('<p>', '<p class="col_10">', $content);
}


add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="next_page"';
}
function posts_link_attributes_2() {
    return 'class="prev_page"';
}


// Polylang strings to translate
if ( function_exists( 'pll_register_string' ) ) {

pll_register_string( 'menu 1', 'Services', 'header' );
pll_register_string( 'menu 2', 'Training', 'header' );
pll_register_string( 'menu 3', 'About Us', 'header' );
pll_register_string( 'menu 4', 'Contact', 'header' );
pll_register_string( 'menu 5', 'Blog', 'header' );
pll_register_string( 'meta description', 'Description', 'meta' );
pll_register_string( 'mentions link', 'legalmentions', 'footer' );
pll_register_string( 'mentions text', 'Legal mentions', 'footer' );
pll_register_string( 'linkedin link', 'linkedin', 'footer' );
pll_register_string( 'twitter text', 'twitter', 'footer' );
pll_register_string( 'previous', 'Previous', 'blog' );
pll_register_string( 'next', 'Next', 'blog' );

}


?>