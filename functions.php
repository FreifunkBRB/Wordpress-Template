<?php
add_theme_support( 'menus' );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 825, 510, true );

add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );

add_theme_support( 'post-formats', array(
    'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
) );

function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'freifunk'),
    'secondary' => __( 'Secondary Menu', 'freifunk' ),
) );