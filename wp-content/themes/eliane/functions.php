<?php 

function eliane_theme_styles() {

	wp_enqueue_style('bootstrap_css', get_template_directory_uri() .'/css/bootstrap.min.css');
	wp_enqueue_style( 'style_css', get_template_directory_uri() .'/css/style.css');
}

add_action ('wp_enqueue_scripts', 'eliane_theme_styles');

function eliane_theme_js() {

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}

add_action ('wp_enqueue_scripts', 'eliane_theme_js');

 ?>