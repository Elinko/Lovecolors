<?php
/*
	Template Name: Kontakt Page
*/
// Advanced custom fields

get_header('designer');

$popisstranky= get_field('popis_stranky');
$nadpisstranky= get_field('nadpis_stranky');


$size = 'full'; // (thumbnail, medium, large, full or custom size)

 ?>
 <main>
 	<section class="kontakt ">
 		<div class="group">
 			<div class="col-sm-5">
 				<article class="artdesigner kontaktText">
 					<h1><?php echo get_field('meno'); ?></h1>
 					<h2 class="super-font"><?php echo get_field('nazov_stranky'); ?></h2>
 					<h3><?php echo get_field('nadpis_podstranky'); ?></h3>
 					<?php echo get_field('obsah_textu'); ?>
 				</article>
 			</div>
 			<div class="col-sm-7">
 				<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/kontaktimg.png" alt="">
 			</div>
 		</div>
 	</section>
 </main>

 <script type="text/javascript">
   $(document).ready(function(){
     // poradie hlavneho menu
     $('.main-nav > ul li:nth-child(2) a').addClass('activ');
     // poradie sub menu
     $('.sub-main-nav ul li:nth-child(3) a').addClass('activ');
   });
 </script>

 <?php
 get_footer();
