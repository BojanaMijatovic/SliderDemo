<?php
  /**
    *
    * FOOTER
    */
?>

<footer>
  <p> Copyright  	&copy;  2084 Company Name </p>
  <?php wp_nav_menu(
    array(
      'menu' => 'footer-menu',
      'theme_location' => 'footer-menu',
      'container_class' => 'nav',
      'menu_class' => 'navigation-menu',
      )
    );?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
