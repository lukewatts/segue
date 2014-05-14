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
        <a class="brand" href="./index.html">Andrew <span>J</span> Byrne</a>
          <?php

            $args = array(
              'theme_location'  => 'Header Nav',
              'menu'            => 'header-nav',
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
        <p>Lo-fi actually Vice, Williamsburg 8-bit pork belly twee fap Godard hella church-key. Leggings asymmetrical fashion axe craft beer beard, chillwave readymade thundercats Brooklyn 3 wolf moon Echo Park. Marfa art party post-ironic, tofu cred deep v meggings sustainable. Tote bag intelligentsia flexitarian, pickled salvia Pinterest brunch forage shabby chic.</p>
        <p>Pug shoreditch Williamsburg, beard wolf cred polaroid. Direct trade master cleanse DIY, polaroid Wes Anderson McSweeney's tumblr wolf umami kale chips squid. Farm-to-table aesthetic blog, ethical seitan master cleanse photo booth 3 wolf moon polaroid blue bottle flannel. </p>
      
        <div class="news">
          <h3>Flavours of the week</h3>
          <a href = "lorempixel.com">
            <img src="<?php echo IMG; ?>placeholder.jpg" alt=""/>
          </a>
        </div><!-- .news -->
      </div><!-- .span6.ctb -->

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

  <script src="assets/js/twitter.js"></script>  
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="assets/js/vendor/jquery.capty.js"></script>
  <script src="assets/js/main.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
