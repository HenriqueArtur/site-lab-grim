<?php
// Requerendo o Customizer
require get_template_directory() . '/customizers/customizer-footer.php';
require get_template_directory() . '/customizers/customizer-sobre.php';

// Carrega scripts e folhas de estilo
function load_scripts() {
	// CSS
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
	
	// Funções JS
	wp_enqueue_script( 'responsiveHeader', get_stylesheet_directory_uri() . '/js/responsiveHeader.js', array(), '1.0', true );
	wp_enqueue_script( 'sandwichMenu', get_stylesheet_directory_uri() . '/js/sandwichMenu.js', array(), '1.0', true );
	
	// Script Principal
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0', true );

	// Bootstrap
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

	register_sidebar(
		array(
			'name'             => 'Footer',
			'id'               => 'footer',
			'description'      => 'Aqui fica a área de costumização do rodapé',
			'before_widget'    => '<div class="social-icon-wrapper">',
			'after_widget'     => '</div>',
			'before_title'     => '<h2 class="social-icon-title">',
			'after_title'      => '</h2>'
		)
	);
}