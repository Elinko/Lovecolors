<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lovecolors
 */
global $post;
?>

	<article class="padding" id="post-<?php the_ID(); ?>">
		<a href="<?php the_permalink($post->ID);?>">
			<div class="menu-box relativ ">
					<div class="blogcontent">
						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
						<span></span>
						<p><?php echo get_field('podnadpis'); ?></p>
					</div>
					<div class="blogArtImg">
						<?php the_post_thumbnail('large')?>
					</div>
					<div class="stitok">
						<h3><?php echo the_time('j M');?></h3>
						<span></span>
						<p><?php echo the_time('Y');?></p>
					</div>
			</div>
		</a>
	</article>
