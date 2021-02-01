<?php

//** Enqueue styles form DIVI */
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

//** Enqueue scripts and style for child theme */
function load_theme_child_scripts_styles() {
    wp_enqueue_style("child-css", get_stylesheet_directory_uri()."/assets/css/main.css");
    wp_enqueue_script("child-js", get_stylesheet_directory_uri()."/assets/js/main.js");
}
add_action( 'wp_enqueue_scripts', 'load_theme_child_scripts_styles', 9999 );

/**************************************** CUSTOM FUNCTIONS **********************************/

?>