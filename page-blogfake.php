<?php
/*
  Template Name: Index blog Page
*/
 $image1 = get_field('prvy_obrazok');
 $image2 = get_field('druhy_obrazok');

get_header('designer');

?>
			<section class="designer blog">  
				<div class="group">
					<div class="col-sm-8">
						<article class="artdesigner">
							<h1><?php echo get_field('popis_stranky');?></h1>
							<i class="h2border">_________</i>
							<h2 class="super-font"><?php echo get_field('nadpis_stranky');?></h2>
							<?php echo get_field('obsah');?>
							<!-- <p class="inline">V tejto sekcii nájdete aktuality o našej firme. Radi sa s Vami podelíme o
		našich inšpiráciách, o nových trendoch v interiérovom dizajne, o tom, čo sa
		nám páči alebo čo je pre nás dôležité. <br>
		Ak sa vám páči náš </p><h2 class="inline h222 "> BLOG</h2><p>, sledujte nás a nepremeškáte žiadnu udalosť
		LoveColors.</p> -->
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
