<?php

function riders_script_enqueue()
{

	// CSS
	wp_enqueue_style('bootstrapmincss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style('bxslidercss', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.2.12', 'all');
	wp_enqueue_style('estilocss', get_template_directory_uri() . '/css/estilo.css', array(), '1.0.0', 'all');


	// JS
	wp_enqueue_script('jqueryjs', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '3.4.1', true);
	wp_enqueue_script('bootstrapminjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.3.1', true);
	wp_enqueue_script('bxsliderjs', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '4.2.12', true);
	wp_enqueue_script('estilojs', get_template_directory_uri() . '/js/mijs.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'riders_script_enqueue');



/*--=====================================
		MENU
=======================================-*/
function riders_theme_setup()
{
    add_theme_support('menus');

    register_nav_menu('primary', 'Menu Primario');
}

add_action('init', 'riders_theme_setup');




/*--=====================================
		ACTIVAR MENUS (SUBIR IMAGENES)
=======================================-*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');



// Register custom navigation walker
// require_once('wp-bootstrap-navwalker.php');
