<?php $logo = get_field('logo', 'option'); ?>

<footer class="footer">
  <div class="container">
    <div>
      <a href="<?= home_url() ?>" class="text-logo">
        <?php bloginfo('name'); ?>
      </a>
    </div>

    <div class="footer__widgets">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer widgets") ) : ?><?php endif;?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
