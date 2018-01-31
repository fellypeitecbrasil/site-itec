<?php
function zodkoo_js_css()
{
    // CSS File
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_style('zodkoo-style',get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style('default',get_template_directory_uri().'/assets/css/colors/default.css');
    wp_enqueue_style('pen-icon',get_template_directory_uri().'/assets/css/pe-icon-7-stroke.css');
	wp_enqueue_style('themify-icons',get_template_directory_uri().'/assets/css/themify-icons.css');
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), 'zodkoo' );
	
    // JS File
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '');
    wp_enqueue_script( 'jquery_easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.min.js', array(), '');
    wp_enqueue_script('jquery_sticky',get_template_directory_uri().'/assets/js//jquery.sticky.js',array(),'',true);
    wp_enqueue_script('jquery_app',get_template_directory_uri().'/assets/js/jquery.app.js',array(),'',true);
	wp_enqueue_script('skip_link_focus_fix',get_template_directory_uri().'/assets/js/skip-link-focus-fix.js',array(),'');

}

add_action('wp_enqueue_scripts', 'zodkoo_js_css');

//Dynamic CSS
add_editor_style( array( 'assets/css/colors/default.css') );