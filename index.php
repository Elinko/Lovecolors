<?php

/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lovecolors
 */


 $image1 = get_field('prvy_obrazok', get_option('page_for_posts'));
 $image2 = get_field('druhy_obrazok', get_option('page_for_posts'));

get_header('designer');

?>
			<section class="designer blog">
				<div class="group">
					<div class="col-sm-8">
						<article class="artdesigner">
							<h1><?php echo the_field('popis_stranky', get_option('page_for_posts')); ?></h1>
							<i class="h2border">_________</i>
							<h2 class="super-font"><?php echo the_field('nadpis_stranky', get_option('page_for_posts')); ?></h2>
							<?php echo the_field('obsah', get_option('page_for_posts'));?>

						</article>
					</div>
					<div class="col-sm-4">
						<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
						<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />

					</div>
				</div>

			</section>
			<section class="blogArticles group">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>
			</section>


	<script type="text/javascript">
    $(document).ready(function(){
      // poradie hlavneho menu
      $('.main-nav > ul li:nth-child(2) a').addClass('activ');
      // poradie sub menu
      $('.sub-main-nav ul li:nth-child(2) a').addClass('activ');
    });
  </script>

<?php
//get_sidebar();
get_footer();
