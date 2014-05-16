<?php get_header(); ?>

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

<?php get_sidebar(); ?>      
      
    </div><!-- .row -->

<?php get_footer(); ?>