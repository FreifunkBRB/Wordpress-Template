<?php
/* https://codex.wordpress.org/Post_Thumbnails */
add_theme_support( 'post-thumbnails' );

/* https://codex.wordpress.org/Post_Formats */
add_theme_support( 'post-formats', array( 'status', 'image', 'video' ) );

/* https://codex.wordpress.org/Title_Tag */
add_theme_support( 'title-tag' );

/* Register the sidebar (https://codex.wordpress.org/Sidebars) */
register_sidebar( array(
    'name'          => 'Sidebar Right',
	'id'            => "sidebar-right",
	'description'   => 'Right Sidebar for custom content.',
	'class'         => 'sidebar-right',
	'before_widget' => '<li class="sidebar-widget">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h2 class="title">',
	'after_title'   => "</h2>\n",
) );

/* Register the menu (https://codex.wordpress.org/Navigation_Menus) */
function register_main_navigation() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_main_navigation' );

