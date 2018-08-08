<?php
/*
	Template Name: Detský svet Page
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

// $tematicke = get_field('galeria',928);
// $doplnky = get_field('galeria',929);
// $colorme = get_field('galeria',930);
$size = 'full'; // (thumbnail, medium, large, full or custom size)

 ?>
 <main>
 	<section class="hp first detskysvet group">
 		<div class="padding babysub">
 			<div class="menu-box menu-box1 "  style="background:url('<?= the_field('pozadie_baby',5) ?>'); background-size:cover;">
 					<a href="<?php echo esc_url(home_url('/')); ?>baby">
 						<div class="">

 							<div class="shadow1">
                <div class="color"></div>
              </div>
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

 		<div class="padding">
 			<div class="menu-box menu-box2"  style="background:url('<?= the_field('pozadie_detsky_svet',5) ?>'); background-size:cover;">
 					<a href="<?php echo esc_url(home_url('/')); ?>detsky-svet">
 						<div class=" ">
 						<div class="shadow1 activ"></div>
 							<div class="toscale activatescal">
 								<h2>detský svet</h2>
 								<i class="h2border">______</i>
 								<p>pre naše detičky</p>
 							</div>
 						</div>
 					</a>
 			</div>
 		</div>

 		<div class="padding homedecorsub">
 			<div class="menu-box menu-box3"  style="background:url('<?= the_field('pozadie_home_decor',5) ?>'); background-size:cover;">
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
 	<section class="tab2 kolekciesub detskesub">

 			<div class="hp group smaller">
 				<div class="padding">
 					<div class="menu-box forfade menu-box1" style="background:url('<?= the_field('pozadie_sekcie',928) ?>'); background-size:cover;">
 							<a href="<?php echo esc_url(home_url('/')); ?>detske-tematicke/" class="fade2">
 								<div class="toscale ">
                  <div class="coloring"></div>
 										<h2 class="tematicke">Tematické <br> detské&nbsp;izby</h2>
 										<i class="h2border">______</i>
 										<p>realizácie</p>
 								</div>
 							</a>
 					</div>
 				</div>

 				<div class="padding">
 					<div class="menu-box forfade menu-box2" style="background:url('<?= the_field('pozadie_sekcie',929) ?>'); background-size:cover;">
 							<a href="<?php echo esc_url(home_url('/')); ?>detske-doplnky/" class="fade3">
 								<div class="toscale ">
                  <div class="coloring"></div>
 										<h2 style="margin-top:10px;">DOPLNKY</h2>
 										<i class="h2border">______</i>
 										<p>baldachýny a&nbsp;pufy</p>
 								</div>
 							</a>
 					</div>
 				</div>

        <div class="padding">
          <div class="menu-box forfade menu-box1" style="background:url('<?= the_field('pozadie_sekcie',930) ?>'); background-size:cover;">
              <a href="<?php echo esc_url(home_url('/')); ?>detske-rainboo/" class="fade1">
                <div class="toscale ">
                  <div class="coloring"></div>
                    <h2>Rainboo</h2>
                    <i class="h2border">______</i>
                    <p>autorské kolekcie</p>
                </div>
              </a>
          </div>
        </div>

 			</div>

 	</section>




 </main>
 <?php
 get_footer();

 ?>
 <script type="text/javascript">
   $(document).ready(function(){
     $('.sub-main-nav ul li:nth-child(2) a').addClass('activ');
   });
 </script>
