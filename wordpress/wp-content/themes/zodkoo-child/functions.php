<?php

add_action('wp_enqueue_scripts', 'zodkoo_child_css', 1001);
 
// Load CSS
function zodkoo_child_css() {
    // appestia child theme styles
    wp_deregister_style( 'styles-child' );
    wp_register_style( 'styles-child', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'styles-child' );
}