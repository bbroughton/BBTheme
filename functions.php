<?php

add_theme_support('menus');

$defaults = array(
	'default-image'          => get_template_directory_uri() . '/UIcons/devIcon@2x.png',
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true
);
add_theme_support( 'custom-header', $defaults );

add_theme_support( 'post-thumbnails' );

function add_custom_sizes() {
    add_image_size( 'portfolio-thumb', 200, 200, true );
    add_image_size( 'portfolio-image', 300, 300, true );
}

add_action('after_setup_theme','add_custom_sizes'); 


function register_theme_menus(){
	register_nav_menus(
		array('primary-menu' => __('Primary Menu')));
	}

add_action('init' , 'register_theme_menus');

function wpbb_theme_styles(){
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('Italiana_font', 'https://fonts.googleapis.com/css?family=Italiana');
	}

add_action('wp_enqueue_scripts' , 'wpbb_theme_styles');

function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

?>