<?php
/**
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
				<img src="<?php echo get_template_directory_uri(); ?>/img/default-thumb.png" />
			<?php endif; ?>
		</div>
		
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'heisenberg' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'heisenberg' ), __( '1 Comment', 'heisenberg' ), __( '% Comments', 'heisenberg' ) ); ?></span>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
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
				<?php printf( __( 'Tagged %1$s', 'heisenberg' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'heisenberg' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
