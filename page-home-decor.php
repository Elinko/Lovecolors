<?php
/*
	Template Name: Home decor Page
*/
// Advanced custom fields

get_header();

$popisstranky= get_field('popis_stranky');
$nadpisstranky= get_field('nadpis_stranky');

$nadpis_text1= get_field('tematicke_detske_izby_nadpis');
$obsah_text1= get_field('tematicke_detske_izby_obsah');
$nadpis_text2= get_field('doplnky_nadpis');
$obsah_text2= get_field('doplnky_obsah');
$obsah_text3= get_field('color_me_nadpis');
$nadpis_text3= get_field('color_me_obsah');
$tematicke = get_field('galeria',931);
$doplnky = get_field('galeria',932);
$colorme = get_field('galeria',933);
$size = 'full'; // (thumbnail, medium, large, full or custom size)

 ?>
 <main>
 	<section class="hp first homedecor group">
 		<div class="padding babysub">
 			<div class="menu-box menu-box1 "  style="background:url('<?= the_field('pozadie_baby',5) ?>'); background-size:cover;">
 					<a href="<?php echo esc_url(home_url('/')); ?>baby">
 						<div class="">

 							<div class="shadow1">
                <div class="color"></div></div>
 							<div class="toscale">
                <div class="coloring"></div>
 									<h2>baby</h2>
 									<i class="h2border">______</i>
 									<p>do postielky</p>
 							</div>

 						</div>
 					</a>
 			</div>
 		</div>

 		<div class="padding detskesub">
 			<div class="menu-box menu-box2"  style="background:url('<?= the_field('pozadie_detsky_svet',5) ?>'); background-size:cover;">
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

 		<div class="padding">
 			<div class="menu-box menu-box3"  style="background:url('<?= the_field('pozadie_home_decor',5) ?>'); background-size:cover;">
 					<a href="<?php echo esc_url(home_url('/')); ?>home-decor">
 						<div class="">
 						<div class="shadow1 activ"></div>
 							<div class="toscale activatescal">
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
 	<section class="tab2 kolekciesub homedecorsub">

 			<div class="hp group smaller">
 				<div class="padding">
 					<div class="menu-box forfade menu-box1"  style="background:url('<?= the_field('pozadie_sekcie',931) ?>'); background-size:cover;">
 							<a href="" class="fade2">
 								<div class="toscale ">
                  <div class="coloring"></div>
 										<h2>QUILT</h2>
 										<i class="h2border">______</i>
 										<p>Galéria</p>
 								</div>
 							</a>
 					</div>
 				</div>

 				<div class="padding">
 					<div class="menu-box forfade menu-box2"  style="background:url('<?= the_field('pozadie_sekcie',932) ?>'); background-size:cover;">
 							<a href="" class="fade3">
 								<div class="toscale ">
                  <div class="coloring"></div>
 										<h2>DOPLNKY</h2>
 										<i class="h2border">______</i>
 										<p>Galéria</p>
 								</div>
 							</a>
 					</div>
 				</div>

        <div class="padding">
          <div class="menu-box forfade menu-box3"  style="background:url('<?= the_field('pozadie_sekcie',933) ?>'); background-size:cover;">
              <a href="" class="fade1">
                <div class="toscale ">
                  <div class="coloring"></div>
                    <h2>SEDACIE PUFFY</h2>
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
 				<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/leftheartblue.png" alt="">
 					<h2 class="super-font">Quilt</h2>
 				<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/rightheartblue.png" alt="">
 			</div>
 		</aside>
 		<article class=" content-text">
      <?php if( $nadpis_text1 ) {echo"<h1 class='super-font'>".$nadpis_text1."</h1>"; } ?>
      <?php if( $obsah_text1 ) {echo"<p>".$obsah_text1."</p>"; } ?>

 		</article>
    <?php if( $tematicke ): ?>
      <div class="hp first group">
           <?php foreach( $tematicke as $image ): ?>
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

 <div class="fadeout fade3">
 		<aside class="social">
 			<div class="social-content doplnky">
 				<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/leftheartblue.png" alt="">
 					<h2 class="super-font">Doplnky</h2>
 				<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/rightheartblue.png" alt="">
 			</div>
 		</aside>

 		<article class="content-text">
      <?php if( $nadpis_text2 ) {echo"<h1 class='super-font'>".$nadpis_text2."</h1>"; } ?>
      <?php if( $obsah_text2 ) {echo"<p>".$obsah_text2."</p>"; } ?>
 		</article>
    <?php if( $doplnky ): ?>
      <div class="hp first group">
           <?php foreach( $doplnky as $image ): ?>
             <div class="padding">
        				<div class="menu-box galeryimgbox">
        					<a href="<?php echo $image['url']; ?>" class="js-img-viwer2" data-caption="" data-id="2">
        						<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" data-group="group2"  />
        					</a>
        				</div>
        			</div>
           <?php endforeach; ?>
       </div>
   <?php endif; ?>

 </div>

 <div class="fadeout fade1">
     <aside class="social">
       <div class="social-content doplnky">
         <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/leftheartblue.png" alt="">
           <h2 class="super-font">Sedacie puffy</h2>
         <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/rightheartblue.png" alt="">
       </div>
     </aside>

     <article class="content-text">
       <?php if( $nadpis_text3 ) {echo"<h1 class='super-font'>".$nadpis_text3."</h1>"; } ?>
       <?php if( $obsah_text3 ) {echo"<p>".$obsah_text3."</p>"; } ?>
     </article>
    <?php if( $doplnky ): ?>
      <div class="hp first group">
           <?php foreach( $colorme as $image ): ?>
             <div class="padding">
               <div class="menu-box galeryimgbox">
                 <a href="<?php echo $image['url']; ?>" class="js-img-viwer3" data-caption="" data-id="3">
                   <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" data-group="group3"  />
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
    $('.sub-main-nav ul li:nth-child(3) a').addClass('activ');
  });
</script>

 <?php

 get_footer();
