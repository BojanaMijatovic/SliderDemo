<!DOCTYPE html>
<html>

    <head>

        <?php wp_head();?>
        <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    </head>

<body <?php body_class();?>>

<header>
  <div class="navigation-bar">
  <div class="logo">
    <a href="#">
      <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    </a>
  </div>
    <?php wp_nav_menu(
      array(
        'menu' => 'top-menu',
        'theme_location' => 'top-menu',
        'container_class' => 'nav',
        'menu_class' => 'nav__menu',
        )
      );?>
  <button class="burger">
    <span class="burger__line burger--first"></span>
    <span class="burger__line burger--second"></span>
    <span class="burger__line burger--third"></span>
  </button>
</div>
</header>
