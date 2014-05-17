<?php
/**
 * Controller for the theme options pages
 *
 * @package Wordpress
 * @subpackage Segue
 * @since Noesis 0.0.1
 */

/**
 * Helper function for dynamically inserting theme info
 * 
 * @return array
 * @since  Noesis 0.0.1
 */
function noesis_get_admin_settings() {
  $output = array(
      'options_name'    => TEXTDOMAIN . '_options',
      'page_title'      => __( THEME_NAME . ' Options' ),
      'page_sections'   => '',
      'page_fields'     => '',
      'contextual_help' => ''
    );

  return $output;
}


/**
 * Add the Options page output
 *
 * @return void
 * @since Noesis 0.0.1
 */
function noesis_add_options_page() {
  $noesis_settings = noesis_get_admin_settings();

  require_once( 'views/theme-options-view.php' );
}


/**
 * Add Options Menu
 *
 * @return array
 * @since Noesis 0.0.1
 */
function noesis_add_options_menu() {
    /**
     * Display Settings Page link under the "Appearance" Admin Menu
     *
     * add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function);
     */
    add_theme_page( __( THEME_NAME . ' Options' ), __( THEME_NAME . ' Options', TEXTDOMAIN ), 'manage_options', OPTIONS_BASENAME, 'noesis_add_options_page' );
}
add_filter( 'admin_menu', 'noesis_add_options_menu' );


/**
 * Register Settings
 * 
 * @return mixed
 * @since Noesis 0.0.1
 */
function noesis_register_settings() {

  // Get the settings sections array
  $noesis_settings    = noesis_get_admin_settings();
  $noesis_options_name = $noesis_settings[ 'options_name' ];

  // register_setting( $option_group, $option_name, $sanitize_callback );
  register_setting( $noesis_options_name, 'noesis_validate_options' );
}
add_action( 'admin_init', 'noesis_register_settings' );


/**
 * Validate input
 *
 * @return array
 */
function noesis_validate_options( $input ) {
     
  // For enhanced security, create a new empty array
  $valid_input = array();
     
return $valid_input; // return validated input
}
