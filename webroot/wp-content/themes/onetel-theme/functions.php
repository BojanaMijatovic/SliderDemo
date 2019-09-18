<?php


function load_files() {
  
  
  wp_register_style( 'style', get_template_directory_uri() . '/style.css', [], false, 'all' );
  wp_enqueue_style( 'style' );
  
  wp_register_script( 'mainjs', get_template_directory_uri() . '/js/all.js', [ 'jquery' ], null, true );
  wp_enqueue_script( 'mainjs' );
}

add_action( 'wp_enqueue_scripts', 'load_files' );



add_theme_support( 'menus' );

register_nav_menus(
  [
    'top-menu'     => __( 'Top Menu', 'theme' ),
    'footer-menu'  => __( 'Footer Menu', 'theme' ),
    'social-icons' => __( 'Social Icons Menu', 'theme' )
  ]
);


$args = [
  'flex-width'    => true,
  'width'         => 120,
  'flex-height'   => true,
  'height'        => 60,
  'default-image' => get_template_directory_uri() . '/assets/logo.png',
  'uploads'       => true,
];
add_theme_support( 'custom-header', $args );



add_filter( 'nav_menu_css_class', 'my_css_attributes_filter', 100, 1 );
add_filter( 'nav_menu_item_id', 'my_css_attributes_filter', 100, 1 );
function my_css_attributes_filter( $var ) {
  return is_array( $var ) ? array_intersect( $var, [ 'current-menu-item' ] ) : '';
}



class OnetelNavWalker extends Walker_Nav_Menu {
  
  function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
    
    $classes = [];
    if ( !empty( $item->classes ) ) $classes = (array)$item->classes;
    $class_names = join( ' ', $classes );
    
    $class_names = esc_attr( $class_names );
    $item->attr_title = esc_attr( $item->attr_title );
    $item->target = esc_attr( $item->target );
    $item->xfn = esc_attr( $item->xfn );
    $item->url = esc_attr( $item->url );
    
    if ( !empty( $output ) ) $output .= "<li id='menu-item-{$item->ID}'";
    $output .= "<li id='menu-item-$item->ID' class='$class_names'>";
    
    $attributes = '';
    
    if ( !empty( $item->attr_title ) ) $attributes .= ' title="' . esc_attr( $item->attr_title ) . '"';
    if ( !empty( $item->target ) ) $attributes .= ' target="' . esc_attr( $item->target ) . '"';
    if ( !empty( $item->xfn ) ) $attributes .= ' rel="' . esc_attr( $item->xfn ) . '"';
    if ( !empty( $item->url ) ) $attributes .= ' href="' . esc_attr( $item->url ) . '"';
    
    if ( !empty( $item->description ) and $depth == 0 ) $description = '<small class="nav_desc">' . esc_attr( $item->description ) . '</small>';
    else $description = '';
    
    $title = apply_filters( 'the_title', $item->title, $item->ID );
    
    $item_output = $args->before . "<a $attributes>" . $args->link_before . $title . '</a> ' . $args->link_after . $description . $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}