<?php
/*
Plugin Name: WP Vuelos
Description: Plugin para un formulario de búsqueda de vuelos responsive
Version: 1.0
Author: Tu Nombre
*/

define('WPGRP_DIR',plugin_dir_path(__FILE__));
define('WPGRP_URL',plugin_dir_url(__FILE__));


// Enqueue scripts y estilos
function wp_vuelos_enqueue_scripts() {

wp_enqueue_script( 'migben-jquery-1', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', false);
wp_enqueue_script( 'migben-jquery-2', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array(), '1.12.1', false);

wp_enqueue_style( 'migben-jquery-css-3', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
wp_enqueue_style( 'migben-bootstrap-css-4', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
wp_enqueue_style( 'migben-bootstrap-css-5', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' );

wp_enqueue_script( 'migben-jquery-6', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', false);

wp_enqueue_script( 'migben-jquery-7', WPGRP_URL .  'assets/js/geodatasource-cr.min.js', array(), '1.0.0', false);
wp_enqueue_style( 'migben-geo-css-8', WPGRP_URL .  'assets/css/geodatasource-countryflag.css' );
	
wp_enqueue_script( 'migben-jquery-9', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js', array(), '1.0.0', false);
wp_enqueue_style( 'migben-geo-css-10', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css' );
	
wp_enqueue_script( 'migben-jquery-11', WPGRP_URL . 'assets/js/Gettext.js', array(), '1.0.0', false);


}
add_action( 'wp_enqueue_scripts', 'wp_vuelos_enqueue_scripts' );

// Función para mostrar el formulario
function wp_vuelos_form() {
  // Obtener el contenido del archivo
  $form_content = file_get_contents( plugin_dir_path( __FILE__ ) . 'templates/form-vuelos.php' );
  
  // Retornar el contenido
  return $form_content;
}
add_shortcode( 'wp_vuelos_form', 'wp_vuelos_form' );