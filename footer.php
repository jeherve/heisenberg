<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Heisenberg
 * @since Heisenberg 1.0
 */
?>

	</div><!-- #main .site-main -->
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'heisenberg' ); ?></h1>

			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
	
		<?php get_sidebar(); ?>
	
		<div class="site-info">
			<?php do_action( 'heisenberg_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'heisenberg' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'heisenberg' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>