<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Heisenberg
 * @since Heisenberg 1.0
 */
// Check if the footer widget areas are populated
if (   ! is_active_sidebar( 'sidebar-1'  )
	&& ! is_active_sidebar( 'sidebar-2' )
	&& ! is_active_sidebar( 'sidebar-3'  )
)
	return;
?>
<div id="secondary" <?php heisenberg_footer_sidebar_class(); ?>>
<?php do_action( 'before_sidebar' ); ?>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="first" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="second" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #second .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="third" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #third .widget-area -->
	<?php endif; ?>
</div><!-- #secondary -->