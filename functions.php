<?php

/**
 * Define our path constants
 */
define( 'ASSETS', get_template_directory_uri() . '/assets/' );
define( 'CSS', ASSETS . 'css/' );
define( 'JS', ASSETS . 'js/' );
define( 'IMG', ASSETS . 'img/' );

/**
 * Load our stylesheets and javascript
 * 
 * @return string Ruturns absolute urls to scripts
 */
function segue_load_scripts() {
  /**
   * Load our stylesheets with dependencies
   */
  wp_enqueue_style( 'bootsrtap', CSS . 'bootstrap.min.css' );
  wp_enqueue_style( 'bootrap-responsive', CSS . 'bootstrap-responsive.min.css', 'bootstrap' );
  wp_enqueue_style( 'seque_style', get_stylesheet_uri(), 'bootstrap-responsive' );

  wp_enqueue_script( 'modernizr', JS . 'vendor/modernizr-2.6.2-respond-1.1.0.min.js', false, false );

  wp_enqueue_script( 'bootstrap-js', JS . 'vendor/bootstrap.min.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'segue_load_scripts' );

/**
 * Register our nav menus with child theme support
 */
if ( ! function_exists( 'segue_register_menus' ) ) {
  /**
   * Register our menus
   * @return string
   */
  function segue_register_menus() {

    $locations = array(
      'header' => __( 'Primary Menu', 'segue' ),
    );
    register_nav_menus( $locations );

  }
  add_action( 'init', 'segue_register_menus' );
}