<?php
/**
 *
 * FOOTER
 */
?>

<footer class="footer">
    <p> Copyright &copy; 2048 Company Name </p>
  <?php wp_nav_menu(
    [
      'theme_location'  => 'footer-menu',
      'menu'            => 'footer-menu',
      'container'       => 'div',
      'container_class' => 'menu--footer-menu--container footer__social',
      'menu_class'      => 'footer__list',
      'echo'            => true,
      'walker'          => new OnetelNavWalker(),
      'fallback_cb'     => 'wp_page_menu',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 0,
    ]
  ); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
