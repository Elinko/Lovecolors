<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lovecolors
 */


 get_header('designer');

  ?>

  <main>
    <section class="designer ">
     <div class="group">
       <div class="col-sm-12">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

      </div>
    </div>
 	</section>
 </main>
	<script type="text/javascript">
    $(document).ready(function(){
      // poradie hlavneho menu
      $('.main-nav > ul li:nth-child(2) a').addClass('activ');
      // poradie sub menu
      if(window.location.pathname.search('press')==1 || window.location.pathname.search('press')==12){
              $('.sub-main-nav ul li:nth-child(3) a').addClass('activ');
              console.log('true');
      }
      else{
        $('.sub-main-nav ul li:nth-child(2) a').addClass('activ');
      }
    });
  </script>
<?php
// get_sidebar();
get_footer();
