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
?>