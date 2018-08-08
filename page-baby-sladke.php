<?php
/*
	Template Name: Baby - sladke sny
*/
// Advanced custom fields

get_header();

$popisstranky= get_field('popis_stranky',22);
$nadpisstranky= get_field('nadpis_stranky',22);

$nadpis_text1= get_field('sladke_sny_nadpis',22);
$obsah_text1= get_field('sladke_sny_obsah',22);

$sladke_sny= get_field('galeria',925);
// $doplnky= get_field('galeria',926);
$size = 'full'; // (thumbnail, medium, large, full or custom size)

 ?>
 <main>
 	<section class="hp first baby group">
 		<div class="padding">
 			<div class="menu-box menu-box1 " style="background:url('<?= the_field('pozadie_baby',5) ?>'); background-size:cover;">
 					<a href="<?php echo esc_url(home_url('/')); ?>baby">
 						<div class="">

 							<div class="shadow1 activ">
              </div>
 							<div class="toscale activatescal">
 									<h2>baby</h2>
 									<i class="h2border">______</i>
 									<p>do postielky</p>
 							</div>

 						</div>
 					</a>
 			</div>
 		</div>

 		<div class="padding detskesub">
 			<div class="menu-box menu-box2" style="background:url('<?= the_field('pozadie_detsky_svet',5) ?>'); background-size:cover;">
 					<a href="<?php echo esc_url(home_url('/')); ?>detsky-svet">
 						<div class=" ">
              <div class="shadow1">
                <div class="color"></div>
              </div>
 							<div class="toscale">
                <div class="coloring"></div>
 								<h2>detský svet</h2>
 								<i class="h2border">______</i>
 								<p>pre naše detičky</p>
 							</div>
 						</div>
 					</a>
 			</div>
 		</div>

 		<div class="padding homedecorsub">
 			<div class="menu-box menu-box3" style="background:url('<?= the_field('pozadie_home_decor',5) ?>'); background-size:cover;">
 					<a href="<?php echo esc_url(home_url('/')); ?>home-decor">
 						<div class="">
              <div class="shadow1">
                <div class="color"></div>
              </div>
 							<div class="toscale">
                <div class="coloring"></div>
 								<h2>home decor</h2>
 								<i class="h2border">______</i>
 								<p>pre krajší domov</p>
 								</div>
 						</div>
 					</a>
 			</div>
 		</div>

 	</section>

 	<article class="content-text">
    <h1 class="super-font"> <?php echo $nadpisstranky; ?>    </h1>
    <p>
      <?php echo $popisstranky; ?>
    </p>
 	</article>
 	<section class="tab2 kolekciesub babysub">

    <div class="hp group smaller">
      <div class="padding">
        <div class="menu-box forfade menu-box1" style="background:url('<?= the_field('pozadie_sekcie',925) ?>'); background-size:cover;">
            <a href="<?php echo esc_url(home_url('/')); ?>baby-sladke-sny/" class="fade2">
              <div class="toscale activatescal">
                <div class="coloring">
                </div>
                  <h2>SLADKÉ SNY</h2>
                  <i class="h2border">______</i>
                  <p>Galéria</p>
              </div>
            </a>
        </div>
      </div>

      <div class="padding">
        <div class="menu-box forfade menu-box2" style="background:url('<?= the_field('pozadie_sekcie',926) ?>'); background-size:cover;">
            <a href="<?php echo esc_url(home_url('/')); ?>baby-doplnky/" class="fade3">
              <div class="toscale ">
                <div class="coloring">
                </div>
                  <h2>DOPLNKY</h2>
                  <i class="h2border">______</i>
                  <p>Galéria</p>
              </div>
            </a>
        </div>
      </div>

    </div>

 <!--- zaciatok galerie  -->

 <div class="fadeout fade2">
 		<aside class="social">
 			<div class="social-content">
 				<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/leftheartgold.png" alt="">
 					<h2 class="super-font">SLADKÉ SNY</h2>
 				<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/rightheartgold.png" alt="">
 			</div>
 		</aside>
 		<article class=" content-text">
      <?php if( $nadpis_text1 ) {echo"<h1 class='super-font'>".$nadpis_text1."</h1>"; } ?>
      <?php if( $obsah_text1 ) {echo"<p>".$obsah_text1."</p>"; } ?>
 		</article>
    <?php if( $sladke_sny ): ?>
      <div class="hp group">
           <?php foreach( $sladke_sny as $image ): ?>
             <div class="padding">
        				<div class="menu-box galeryimgbox">
        					<a href="<?php echo $image['url']; ?>" class="js-img-viwer" >
        						<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" data-group="group"  />
        					</a>
        				</div>
        			</div>
           <?php endforeach; ?>
       </div>
   <?php endif; ?>
 </div>

 	</section>
 </main>
 <script type="text/javascript">
   $(document).ready(function(){
     $('.sub-main-nav ul li:nth-child(1) a').addClass('activ');
     $('html, body').animate({
          scrollTop: $(".fadeout").offset().top -30
      }, 500);
   });

 </script>

 <?php
 get_footer();
