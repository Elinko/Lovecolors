<?php
/*
	Template Name: Detský svet Tematicke izby
*/
// Advanced custom fields

get_header();


if($lang=='en'){$page=1015;} else{$page=36;}

$popisstranky= get_field('popis_stranky',$page);
$nadpisstranky= get_field('nadpis_stranky',$page);

$nadpis_text1= get_field('tematicke_detske_izby_nadpis',$page);
$obsah_text1= get_field('tematicke_detske_izby_obsah',$page);

$tematicke = get_field('galeria',928);
// $doplnky = get_field('galeria',929);
// $colorme = get_field('galeria',930);
$size = 'full'; // (thumbnail, medium, large, full or custom size)

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
               <div class="shadow1 activ">
                 <div class="color"></div>
               </div>
                <div class="toscale activatescal">
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
            <a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'detske-tematicke-en';} else{echo 'detske-tematicke';}?>/" class="fade2">
              <div class="toscale activatescal">
                <div class="coloring"></div>
                  <h2 class="tematicke"><?php if($lang=='en'){echo "Thematic <br> children&nbsp;rooms";} else{echo 'Tematické <br> detské&nbsp;izby';}?></h2>
                  <i class="h2border">______</i>
                  <p><?php if($lang=='en'){echo "implementation";} else{echo 'realizácie';}?> </p>
              </div>
            </a>
        </div>
      </div>

      <div class="padding">
        <div class="menu-box forfade menu-box2" style="background:url('<?= the_field('pozadie_sekcie',929) ?>'); background-size:cover;">
          <a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'detske-doplnky-en';} else{echo 'detske-doplnky';}?>/" class="fade3">

              <div class="toscale ">
                <div class="coloring"></div>
                  <h2 style="margin-top:10px;"><?php if($lang=='en'){echo "accessories";} else{echo 'DOPLNKY';}?></h2>
                  <i class="h2border">______</i>
                  <p><?php if($lang=='en'){echo "canopies and&nbsp;buffs";} else{echo 'baldachýny a&nbsp;puffy';}?></p>
              </div>
            </a>
        </div>
      </div>

      <div class="padding">
        <div class="menu-box forfade menu-box1" style="background:url('<?= the_field('pozadie_sekcie',930) ?>'); background-size:cover;">
            <a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'detske-rainboo-en';} else{echo 'detske-rainboo';}?>/" class="fade1">
              <div class="toscale ">
                <div class="coloring"></div>
                  <h2>Color me</h2>
                  <i class="h2border">______</i>
                  <p><?php if($lang=='en'){echo "original collections";} else{echo 'autorské kolekcie';}?> </p>
              </div>
            </a>
        </div>
      </div>

    </div>
 <!--- zaciatok galerie  -->

 <div class="fadeout fade2">
 		<aside class="social">
 			<div class="social-content">
 				<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/leftheartpink.png" alt="">
 					<h2 class="super-font"><?php if($lang=='en'){echo "Thematic children rooms";} else{echo 'Tematické detské izby';}?></h2>
 				<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/rightheartpink.png" alt="">
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


 	</section>




 </main>
 <?php
 get_footer();

 ?>
 <script type="text/javascript">
   $(document).ready(function(){
     $('.main-nav >ul li:nth-child(1) a').addClass('activ');
     $('.sub-main-nav ul li:nth-child(2) a').addClass('activ');
     $('html, body').animate({
          scrollTop: $(".fadeout").offset().top -30
      }, 500);
   });
 </script>
