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
      'container_class' => 'footer-social',
      'menu_class' => 'footer-icon',
      )
    );?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
