<?php
/*
	Template Name: Kolekcie Page
*/
// Advanced custom fields

get_header();

$nadpis_text1= get_field('nadpis_textu1');
$obsah_textu1= get_field('obsah_textu1');
$obsah_textu2= get_field('obsah_textu2');
$nadpis_text2= get_field('nadpis_textu2');


 ?>

 <main>
 	<section class="hp first group">
 		<div class="padding">
 			<div class="menu-box menu-box1">
 					<a href="<?php echo esc_url(home_url('/')); ?>baby">
 						<div class=" ">

 							<div class="shadow1"></div>
 							<div class="toscale">
 								<h2>baby</h2>
 								<i class="h2border">______</i>
 								<p>do postielky</p>
 							</div>

 						</div>
 					</a>
 			</div>
 		</div>

 		<div class="padding">
 			<div class="menu-box menu-box2">
 					<a href="<?php echo esc_url(home_url('/')); ?>detsky-svet">
 						<div class=" ">
 						<div class="shadow1"></div>
 							<div class="toscale">
 								<h2>detský svet</h2>
 								<i class="h2border">______</i>
 								<p>pre naše detičky</p>
 							</div>
 						</div>
 					</a>
 			</div>
 		</div>

 		<div class="padding">
 			<div class="menu-box menu-box3">
 					<a href="<?php echo esc_url(home_url('/')); ?>home-decor">
 						<div class="">
 						<div class="shadow1"></div>
 							<div class="toscale">
 								<h2>home decor</h2>
 								<i class="h2border">______</i>
 								<p>pre krajší domov</p>
 								</div>
 						</div>
 					</a>
 			</div>
 		</div>

 	</section>

 	<section class=" tab1">
 			<article class="content-text">
        <?php if(!empty($nadpis_text1)) :?>
 					<h1 class="super-font"> <?php echo $nadpis_text1 ?></h1>
        <?php endif ?>
 					<p><?php echo $obsah_textu1 ?></p>
 			</article>

 			<div class="hp group whiter">
 				<div class="padding">
 					<div class="menu-box menu-box1">
 							<a>
 								<div class="shadow1">
 										<h2>TEMATICKÉ
 DETSKÉ IZBY</h2>
 										<i class="h2border">______</i>
 										<p>Galéria</p>
 									<div class=""></div>
 								</div>
 							</a>
 					</div>
 				</div>

 				<div class="padding">
 					<div class="menu-box menu-box2">
 							<a >
 								<div class=" ">
 										<h2>DOPLNKY</h2>
 										<i class="h2border">______</i>
 										<p>Galéria</p>
 									<div class="shadow1"></div>
 								</div>
 							</a>
 					</div>
 				</div>

 				<div class="padding">
 					<div class="menu-box menu-box3">
 							<a >
 								<div class="">
 										<h2>COLOR ME</h2>
 										<i class="h2border">______</i>
 										<p>Galéria</p>
 									<div class="shadow1"></div>
 								</div>
 							</a>
 					</div>
 				</div>

 			</div>

 			<article class="content-text">
        <?php if(!empty($nadpis_text2)) :?>
          <h1 class="super-font"><?php echo $nadpis_text2 ?></h1>
        <?php endif ?>

        <?php if(!empty($obsah_textu2)) :?>
          <p> <?php echo $obsah_textu2 ?></p>
        <?php endif ?>

 					</p>
 			</article>
 	</section>



 	</section>




 </main>

 <?php
 get_footer();
