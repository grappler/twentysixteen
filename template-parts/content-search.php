<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<?php if ( 'post' == get_post_type() ) : ?>

		<footer class="entry-footer">
			<?php twentysixteen_entry_meta(); ?>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						__( 'Edit %s', 'twentysixteen' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->

	<?php else : ?>

		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit %s', 'twentysixteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				),
				'<footer class="entry-footer"><span class="edit-link">',
				'</span></footer><!-- .entry-footer -->'
			);
		?>

	<?php endif; ?>
</article><!-- #post-## -->

