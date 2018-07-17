<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lovecolors
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class=" post">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<i class="h2border">_________</i>
		<h2><?php echo get_field('podnadpis'); ?></h2>
	</div>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lovecolors' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lovecolors' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

<!--
	<footer class="entry-footer">
		<?php lovecolors_entry_footer(); ?>
	</footer><!-- .entry-footer --> -->
</article><!-- #post-<?php the_ID(); ?> -->
