<?php

// Carrega scripts e folhas de estilo
function load_scripts() {
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
/*
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all' );
*/
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), '4.3.1', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Registrando Menus
register_nav_menus(
	array(
		'my_main_menu' => 'Main Menu'
	)
);