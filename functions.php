<?php

//** Enqueue styles form DIVI */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

//** Enqueue scripts and style for child theme */
add_action( 'wp_enqueue_scripts', 'load_theme_child_scripts_styles', 9999 );

function load_theme_child_scripts_styles() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' );
    wp_enqueue_style("child-css", get_stylesheet_directory_uri()."/assets/css/main.css");
    wp_enqueue_script("child-js", get_stylesheet_directory_uri()."/assets/js/main.js");
    wp_enqueue_script('bootstrap-bundle-with-popper', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', '', '', true);
}

//** Disable Gutenberg and Keep the Classic Editor */
add_filter('use_block_editor_for_post', '__return_false', 10);