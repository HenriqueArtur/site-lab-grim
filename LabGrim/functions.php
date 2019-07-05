<?php

// Carrega scripts e folhas de estilo
function load_scripts() {
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );

	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), '4.3.1', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Configurando o tema
function labgrim_config() {
	// Registrando Menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu'
		)
	);
}
add_action( 'after_setup_theme', 'labgrim_config', 0 );


///instalar pluguin easy social icons


//Registrando Sidebars
add_action( 'widgets_init', 'labgrim_sidebars' );
function labgrim_sidebars() {
	register_sidebar(
		array(
			'name'             => 'Social Menu',
			'id'               => 'social-menu',
			'description'      => 'Social menu area',
			'before_widget'    => '<div class="social-icon-wrapper">',
			'after_widget'     => '</div>',
			'before_title'     => '<h2 class="social-icon-title">',
			'after_title'      => '</h2>'
		)
	);
}