<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel='stylesheet' type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/styles.min.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div class="container">

		<div id="header">
			<div class="site-logo">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/logo.png" />
			</div>
		</div>

		<nav class="navbar navbar-inverse">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">
						<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="main-menu-collapse-1">
						<?php
						$defaults = array(
							'theme_location'  => 'primary',
							'menu'            => '',
							'container'       => 'div',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="navbar-main" class="nav navbar-nav">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);

						wp_nav_menu( $defaults );
						?>
				</div><!-- /.navbar-collapse -->
		</nav>
	</div><!-- /.container-fluid -->

	<div id="content" class="site-content">
