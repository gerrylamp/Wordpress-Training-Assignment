<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

function custom_style() {
    wp_enqueue_style('custom-theme-style', get_theme_file_uri('/css/style.min.css'));
    wp_enqueue_style('bootstrap5', get_theme_file_uri('/css/bootstrap5.min.css'));

    wp_enqueue_script('script-js', get_theme_file_uri('/js/script.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap5-js', get_theme_file_uri('/js/bootstrap5.min.js'), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'custom_style');

function portfolio_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation1', 'Footer Menu Location1');
    register_nav_menu('footerMenuLocation2', 'Footer Menu Location2');
    register_nav_menu('footerMenuLocation3', 'Footer Menu Location3');
    register_nav_menu('footerMenuLocation4', 'Footer Menu Location4');
    register_nav_menu('footerMenuLocation5', 'Footer Menu Location5');
}
add_action('after_setup_theme', 'portfolio_features');