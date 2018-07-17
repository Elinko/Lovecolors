<?php
/*
  Template Name: Index Press
*/
 $image1 = get_field('prvy_obrazok');
 $image2 = get_field('druhy_obrazok');

get_header('designer');
$galeries = new WP_query(array('post_type' => 'press', 'orderby' => 'post_id', 'order' => 'ASC'));
// while($galeries->have_posts()){
//     $galeries->the_post();
//     echo'<br><br>';
//     var_dump(get_field('galeria'));
//     echo'<br><br>';
//
// }
?>
			<section class="designer blog">
				<div class="group">
          <div class="col-sm-8" style="width:100%;margin:15px;">
            	<article class="artdesigner" style="padding:0; margin:0;">
                <h2 class="super-font" style="padding: 15px; margin:0;">Press</h2>
              </article>

          </div>

				</div>

			</section>
			<section class="blogArticles group">
				<?php
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
