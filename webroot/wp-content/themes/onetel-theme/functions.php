<?php


function load_files() {


    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

    wp_register_script('mainjs', get_template_directory_uri() . '/js/all.js', array('jquery'), null, true);
    wp_enqueue_script('mainjs');
}

add_action('wp_enqueue_scripts', 'load_files');



add_theme_support('menus');

register_nav_menus(
    array(
      'top-menu' => __('Top Menu', 'theme'),
      'footer-menu' => __('Footer Menu', 'theme'),
    )
  );


  $args = array(
    'flex-width'    => true,
	  'width'         => 120,
	  'flex-height'   => true,
	  'height'        => 60,
	  'default-image' => get_template_directory_uri() . '/assets/logo.png',
    'uploads'       => true,
  );
  add_theme_support('custom-header', $args);

register_sidebar( array(
  'name'  => __('socials'),
  'class' => 'footer__list',
 )
);


  add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
  add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
  function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
  }
