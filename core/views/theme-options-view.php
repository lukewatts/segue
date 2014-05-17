<div class="wrap">
  <div class="icon32" id="icon-options-general"></div>
    <h2><?php echo $noesis_settings['page_title']; ?></h2>
         
    <form action="options.php" method="post">

      <?php
        // http://codex.wordpress.org/Function_Reference/settings_fields
        settings_fields($noesis_settings['options_name']);
             
        // http://codex.wordpress.org/Function_Reference/do_settings_sections
        do_settings_sections( OPTIONS_BASENAME );
      ?>

      <p class="submit">
        <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes','segue'); ?>" />
      </p>
             
    </form>
  </div><!-- wrap -->