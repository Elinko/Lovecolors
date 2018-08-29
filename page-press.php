<?php
/*
  Template Name: Index Press
*/
 $image1 = get_field('prvy_obrazok');
 $image2 = get_field('druhy_obrazok');

get_header('designer');

?>
			<section class="designer blog">
				<div class="group row">
          <div class="col-sm-8">
            	<article class="artdesigner">
                <h1><?php echo get_field('popis_stranky');?></h1>
                <i class="h2border">_________</i>
                <h2><?php echo get_field('nadpis_stranky');?></h2>
                <?php echo get_field('obsah');?>
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

        $galeries = new WP_query(array('post_type' => 'press', 'orderby' => 'post_id', 'order' => 'ASC'));
        while($galeries->have_posts()){
            $galeries->the_post();
            get_template_part( 'template-parts/content', 'page' );
            // echo'<br><br>';
            // var_dump(get_field('galeria'));
            // echo'<br><br>';

        }
				// while ( have_posts() ) : the_post();
				// 	get_template_part( 'template-parts/content', 'page' );
        //
				// endwhile;
				?>
			</section>


	<script type="text/javascript">
    $(document).ready(function(){
      // poradie hlavneho menu
      $('.main-nav > ul li:nth-child(2) a').addClass('activ');
      // poradie sub menu
      $('.sub-main-nav ul li:nth-child(3) a').addClass('activ');
    });
  </script>

<?php
//get_sidebar();
get_footer();
