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
   <section class="hp first baby group">
      <div class="padding babysub">
        <div class="menu-box menu-box1 " style="background:url('<?= the_field('pozadie_baby',5) ?>'); background-size:cover;">
            <a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'baby-en';} else{echo 'baby';}?>">
              <div class="">
                <div class="shadow1  ">
                    <div class="color"></div>
               </div>
                <div class="toscale  ">
                  <div class="coloring"></div>
                    <h2>baby</h2>
                    <i class="h2border">______</i>
                    <p><?php if($lang=='en'){echo 'to the bed';} else{echo 'do postielky';}?></p>
                </div>

              </div>
            </a>
        </div>
      </div>

      <div class="padding detskesub">
        <div class="menu-box menu-box2" style="background:url('<?= the_field('pozadie_detsky_svet',5) ?>'); background-size:cover;">
            <a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'the-world-of-children';} else{echo 'detsky-svet';}?>">
              <div class=" ">
               <div class="shadow1 ">
                 <div class="color"></div>
               </div>
                <div class="toscale ">
                 <div class="coloring"></div>
                 <h2 style="<?php if($lang=='en'){echo "padding-bottom: 35px;";}?> "><?php if($lang=='en'){echo "children's world";} else{echo 'detský svet';}?></h2>
                  <i class="h2border">______</i>
                 <p><?php if($lang=='en'){echo "for our children";} else{echo 'pre naše detičky';}?></p>
                </div>
              </div>
            </a>
        </div>
      </div>

      <div class="padding homedecorsub">
        <div class="menu-box menu-box3" style="background:url('<?= the_field('pozadie_home_decor',5) ?>'); background-size:cover;">
            <a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'home-decor-en';} else{echo 'home-decor';}?>">
              <div class="">
               <div class="shadow1">
                 <div class="color"></div>
               </div>
                <div class="toscale">
                 <div class="coloring"></div>
                  <h2>home decor</h2>
                  <i class="h2border">______</i>
                  <p><?php if($lang=='en'){echo "for a better home";} else{echo 'pre krajší domov';}?></p>
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
<script type="text/javascript">
$(document).ready(function(){
  $('.main-nav >ul li:nth-child(1) a').addClass('activ');

});
</script>
 <?php
 get_footer();
