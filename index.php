<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  
  <!-- TITLE -->
  <title><?php wp_title(); ?></title>
  
  <!-- WORDPRESS STUFF -->
  <?php wp_head(); ?>
  
  <!-- Keep enough space for header -->
  <style>
    body {
      padding-top: 180px;
      padding-bottom: 40px;
    }
  </style>
</head>

<body>
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

  <div class="container">
    <div class="row">
      <div class="span6 ctb">
        <!-- START OF "The Loop" -->
        <?php
        /**
         * TODO: use the_ID() to generate a CSS class for each post
         * TODO: Add metadat for author, time, categories, taxonomy etc
         * TODO: Add moretag functionality
         * TODO: Add "edit post" functionality
         * TODO: Ensure scheduled posts don't appear before they're meant to
         */
        ?><?php if( have_posts() ) : ?>

          <?php while( have_posts() ) : the_post();  ?>

          <article>
            
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            
            <?php the_content(); ?>
            
          </article>          

            <?php endwhile; ?>

          <?php endif; ?><!-- END OF "The Loop" -->
      
        <!-- <div class="news">
          <h3>Flavours of the week</h3>
          <a href = "lorempixel.com">
            <img src="<?php echo IMG; ?>placeholder.jpg" alt=""/>
          </a>
        </div> -->
      </div><!-- .span6 -->

      <div class="span4 sidebar">
        <a href ="http://codepen.io">
          <img class= "codepen" src="<?php echo IMG; ?>codepen-black.png" alt=""/>
        </a> 
        <a href ="http://github.com">
          <img class= "github" src="<?php echo IMG; ?>github.png" alt=""/>
        </a>

        <div id="jstwitter">
          <a href="https://twitter.com/AndrewByrne15" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @AndrewByrne15</a>
        </div>
      </div>
      
    </div><!-- .row -->
  </div><!-- .container -->

  <?php wp_footer(); ?>
</body>
</html>
