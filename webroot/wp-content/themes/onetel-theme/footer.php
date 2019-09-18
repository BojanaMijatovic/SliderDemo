<?php
  /**
    *
    * FOOTER
    */
?>

<footer class="footer">
  <p> Copyright  	&copy;  2084 Company Name </p>
  <?php wp_nav_menu(
    array(
      'menu' => 'footer-menu',
      'theme_location' => 'footer-menu',
      'container_class' => 'footer__social',
      'menu_class' => 'footer__list',
      )
    );?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
