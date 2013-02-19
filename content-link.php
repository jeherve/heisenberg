<?php
/**
 * @package Heisenberg
 * @since Heisenberg 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="link-entry-header">
		<h1 class="entry-title">
			<a href="<?php echo esc_url( heisenberg_get_first_url() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'heisenberg' ), __( '1 Comment', 'heisenberg' ), __( '% Comments', 'heisenberg' ) ); ?></span>
		<span class="sep"> | </span>
		<?php heisenberg_posted_on(); ?>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'heisenberg' ) );
				if ( $categories_list && heisenberg_categorized_blog() ) :
			?>
			<span class="sep"> | </span>
			<span class="cat-links">
				<?php printf( __( 'In %1$s', 'heisenberg' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'heisenberg' ) );
				if ( $tags_list ) :
			?>
			<span class="sep"> | </span>
			<span class="tags-links">
				<?php printf( __( '%1$s', 'heisenberg' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'heisenberg' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->