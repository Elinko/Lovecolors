<?php
/*
	Template Name: Detský svet Page
*/
// Advanced custom fields

get_header();

$popisstranky= get_field('popis_stranky');
$nadpisstranky= get_field('nadpis_stranky');


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
 								<div class="toscale ">
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

 	</section>




 </main>
 <?php
 get_footer();

 ?>
 <script type="text/javascript">
   $(document).ready(function(){
     $('.main-nav >ul li:nth-child(1) a').addClass('activ');
     $('.sub-main-nav ul li:nth-child(2) a').addClass('activ');
   });
 </script>
