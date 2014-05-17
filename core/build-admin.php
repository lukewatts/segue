<?php
/**
 * The Core will be modular and thus removable and transferable.
 *
 * @package  Wordress
 * @subpackage segue
 * @since Noesis Framework 0.0.1
 */

// Set our constants
define( 'TEXTDOMAIN', 'segue' ); // For use as indexes and urls
define( 'THEME_NAME', 'Segue' ); // For use in our views
define( 'OPTIONS_BASENAME', TEXTDOMAIN . '-settings' );

require_once( 'theme-options-controller.php' );
require_once( 'theme-options.php' );