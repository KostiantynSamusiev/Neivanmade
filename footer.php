<footer>
      <div class="footer">
        <div class="footer__logo">
          <a href="">
            #NEIVANMADE
          </a>
        </div>
        <div class="footer__icon">
          <img data-src="<?php echo bloginfo('template_url'); ?>/assets/img/eye.svg" alt="">

        </div>
        <div class="footer__links">

        <?php wp_nav_menu(array(
    'theme_location' => 'footer',
    'menu' => '',
    'container' => 'div',
    'container_class' => 'footer__nav links',
    'menu_class' => 'footer-nav',
    'menu_id' => 'footer-nav',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
))?>
        </div>
        <div class="footer__copyright">
          #NEIVANMADE / MYKHAILO SKOP
        </div>
      </div>
    </footer>
  </div>
  <?php
wp_footer();
?>

</body>

</html>
