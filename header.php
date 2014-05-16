<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package WordPress
 * @subpackage segue
 * @since segue 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <!-- META -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  
  <!-- TITLE -->
  <title><?php wp_title( ':', true, 'right' ); ?></title>

  <!-- WORDPRESS STUFF -->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
  <?php wp_head(); ?>
  
  <!-- Keep enough space for header -->
  <style>
    body {
      padding-top: 180px;
    }
  </style>
</head>

<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php bloginfo( 'site-url' ); ?>">Andrew <span>J</span> Byrne</a>
        
        <!-- MOBILE MENU -->
        <div class="nav-collapse collapse">
          <?php

            $args = array(
              'theme_location'  => 'header',
              'menu'            => 'Primary Menu',
              'container'       => 'ul',
              'menu_class'      => '',
              'menu_id'         => 'mobile-menu'
            );

            wp_nav_menu( $args );

          ?>

        </div><!-- .nav-collapse -->
        
        <!-- MAIN MENU -->
        <?php

          $args = array(
            'theme_location'  => 'header',
            'menu'            => 'Primary Menu',
            'container'       => 'ul',
            'menu_class'      => 'nav'
          );

          wp_nav_menu( $args );

        ?>

      </div><!-- .container -->
    </div><!-- .navbar-inner -->
  </div><!-- .navbar -->
  
  <!-- CONTENT -->
  <div class="container">