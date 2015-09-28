<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="footer-menu row">
				<div class="col-sm-12">
				<?php
				wp_nav_menu( array('container_class' => 'menu-footer',
					'theme_location' => 'secondary') ); ?>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
