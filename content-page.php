<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Heisenberg
 * @since Heisenberg 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-image">
			<?php if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			else : ?>
				<img src="<?php bloginfo( 'template_directory' ); ?>/img/default-thumb.png" />
			<?php endif; ?>
		</div>
		
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'heisenberg' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'heisenberg' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
