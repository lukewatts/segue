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
}
add_action( 'wp_enqueue_scripts', 'segue_load_scripts' );