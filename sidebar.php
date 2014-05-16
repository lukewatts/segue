      <div class="span4 sidebar">
      <?php
        if ( is_active_sidebar( 'right-sidebar' ) ) {
          dynamic_sidebar( 'right-sidebar' );
        }
        else { ?>
          <a href ="http://codepen.io">
            <img class= "codepen" src="<?php echo IMG; ?>codepen-black.png" alt=""/>
          </a> 
          <a href ="http://github.com">
            <img class= "github" src="<?php echo IMG; ?>github.png" alt=""/>
          </a>
          <div id="jstwitter">
            <a href="https://twitter.com/AndrewByrne15" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @AndrewByrne15</a>
          </div><!-- .jstwitter -->
        <?php
        } 
      ?>

      </div><!-- .span4.sidebar -->