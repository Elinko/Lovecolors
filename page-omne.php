<?php
/*
	Template Name: O mne Page
*/
// Advanced custom fields

get_header('designer');

$popisstranky= get_field('popis_stranky');
$nadpisstranky= get_field('nadpis_stranky');


$size = 'full'; // (thumbnail, medium, large, full or custom size)

 ?>
 <main>
   <section class="designer ">
 		<div class="group">
 			<div class="col-sm-8">
 				<article class="artdesigner">
 					<h1><?php echo get_field('designer_meno'); ?></h1>
 					<i class="h2border">_________</i>
 					<h2 class="super-font"><?php echo get_field('designer_nadpis'); ?></h2>
 					<?php echo get_field('designer_obsah'); ?>
 				</article>
 			</div>
 			<div class="col-sm-4">
 				<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/omne.jpg" alt="">
 			</div>
 		</div>
 		<article class="content-text">
 			<p><?php echo get_field('pred_nadpisom'); ?></p><h1 class="super-font"><?php echo get_field('nadpis_textu'); ?></h1>
      <?php echo get_field('obsah_textu'); ?>
 	</article>

 	<div class="group krasa">
 		<div class="col-sm-4">
 			<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/quilminta.jpg" alt="">
 		</div>
 		<div class="col-sm-8">
 			<article class="krasatext">
        <div style="display:block">
          <h2 class="super-font">krasa </h2>
          <p>	sa skrýva</p>
           <div class="noinline">
             <p> rovnako ako</p>
          </div>
          <h2 class="h2padding super-font">V DETAILOCH</h2>
          <p class="h2anotherpadding inline">tak aj </p> <h2 class="inline nopaddingleft super-font">V CELKU</h2>

        </div>

 			</article>
 		</div>

 	</div>
 	<div class="group krasa originalne">

 		<div class="col-sm-8">
 			<article class="artoriginalne">
        <div style="display:block">
          <p><?php echo get_field('originalne_pred_nadpisom');?>
          <h2 class="super-font"><?php echo get_field('originalne_nadpis');?></h2>
          <?php echo get_field('originalne_obsah');?></p>
        </div>

 			</article>
 		</div>
 		<div class="col-sm-4">
 			<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/detail1.jpg" alt="">
 		</div>
 	</div>
 	<div class="designer-last">
 		<article class="content-text">
 			 <p><?php echo get_field('viac_pred_nadpisom');?></p> <h1 class="super-font"><?php echo get_field('viac_nadpis');?></h1><p> <?php echo get_field('viac_obsah');?></p>
 		</article>
 	</div>

 	</section>


 </main>

 <script type="text/javascript">
   $(document).ready(function(){
     // poradie hlavneho menu
     $('.main-nav > ul li:nth-child(2) a').addClass('activ');
     // poradie sub menu
     $('.sub-main-nav ul li:nth-child(1) a').addClass('activ');
   });
 </script>

 <?php
 get_footer();
