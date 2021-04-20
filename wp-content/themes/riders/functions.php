<?php

function riders_script_enqueue()
{

	// CSS
	// wp_enqueue_style('bootstrapmincss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
	// wp_enqueue_style('bxslidercss', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.2.12', 'all');
	// wp_enqueue_style('estilocss', get_template_directory_uri() . '/css/estilo.css', array(), '1.0.0', 'all');
	// THEME

	// wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.css', array(), '4.3.1', 'all');
	wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css', array(), '4.2.12', 'all');
	wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), '4.2.12', 'all');
	wp_enqueue_style('line-awesome', get_template_directory_uri() . '/assets/vendor/line-awesome/css/line-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', array(), '4.3.1', 'all');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', array(), '4.2.12', 'all');
	wp_enqueue_style('owl.theme.carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.theme.default.min.css', array(), '4.2.12', 'all');
	wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '1.0.0', 'all');
	wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('mediaquery', get_template_directory_uri() . '/assets/css/media_query.css', array(), '1.0.0', 'all');

	


	// JS
	// wp_enqueue_script('jqueryjs', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '3.4.1', true);
	// wp_enqueue_script('bootstrapminjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.3.1', true);
	// wp_enqueue_script('bxsliderjs', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '4.2.12', true);
	// wp_enqueue_script('estilojs', get_template_directory_uri() . '/js/mijs.js', array(), '1.0.0', true);
	// THEME
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), '3.4.1', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '4.3.1', true);
	wp_enqueue_script('jquery.easing', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array(), '4.2.12', true);
	wp_enqueue_script('php-email-form', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '3.4.1', true);
	wp_enqueue_script('isotope-layout', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '4.3.1', true);
	wp_enqueue_script('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array(), '4.2.12', true);
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array(), '3.4.1', true);
	wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '4.3.1', true);
	wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/main.js', array(), '4.2.12', true);

	// <script src="owl.carousel.min.js"></script>
	// C:\xampp\htdocs\riders\wp-content\themes\riders\assets\vendor\owl.carousel\owl.carousel.min.js
	// <script src="main.js"></script>
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
require_once('wp-bootstrap-navwalker.php');
