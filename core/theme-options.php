<?php
/**
 * Noesis framework theme options.
 * Requires theme-options-controller.php
 *
 * @package Wordpress
 * @subpackage segue
 * @since Noesis 0.0.1
 */

/**
 * Define our settings sections
 * 
 * @return array array key=$id, array value=$title in add_settings_section( $id, $title, $callback, $page );
 * @since Noesis 0.0.1
 */
function noesis_options_page_sections() {
     
    $sections = array(
      // 'id'             => __( $title, TEXTDOMAIN );
      'text_section'      => __( 'Text Form Fields', TEXTDOMAIN ),
      'textarea_section'  => __( 'Textarea Form Fields', TEXTDOMAIN ),
      'select_section'    => __( 'Select Form Fields', TEXTDOMAIN ),
      'checkbox_section'  => __( 'Checkbox Form Fields', TEXTDOMAIN )
    );
     
    return $sections;  
}