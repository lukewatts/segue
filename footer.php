  </div><!-- .container -->

  <hr />

  <footer class="container">
    <section class="row">
      <div class="span6 copyright-info" >
        <p>

        <?php

        global $data;

            echo $data[ 'copyright' ];  

        ?>
        </p>
      </div>
      <div class="span6 right-footer-thingy">
        <p><?php echo $data[ 'footer-text' ]; ?></p>
      </div>
    </section>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>