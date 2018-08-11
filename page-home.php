<?php
/*
	Template Name: Home Page
*/
// Advanced custom fields
$popisstranky= get_field('popis_stranky');
$nadpisstranky= get_field('nadpis_stranky');

if(get_locale()=='en_GB'){
	$lang='en';
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Love Colors je značka, ktorá prináša svetlo, farby a šťastie do života dospelých a detí. Zameriava sa na ručne vytvorené a kvalitne spracované quilty, obliečky, prikrývky, dekoračné a úžitkové textílie, sety do postieľok a dekoračné figúrky.
">
  <meta name="author" content="Julianna Rencés Kovács">
  <meta name="keywords" content="Love Colors, Farby Lásky, detské izby, dekorácie, doplnky">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/dist/css/index-styles.css?v1.2">
  <link href="https://fonts.googleapis.com/css?family=Allura|Amatic+SC|Caveat|Lekton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto+Mono" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/favicon.png"/>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/jquery/jquery.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <title>Love Colors - Farby lásky</title>
</head>
<body>
<header style="background:url('<?= the_field('pozadie_header',5) ?>');  background-size:cover; ">
	<a href="#">
		<div class="logo">
			<h1>Love Colors</h1>
		</div>
	</a>
	<p>by Julianna Rencés Kovács</p>
	<span class="language">
    <a href="<?php echo get_site_url(); ?>" class="<?php if($lang!='en'){echo 'activ';} ?>">SK</a>
		<a href="<?php echo get_site_url(); ?>/en" class="<?php if($lang=='en'){echo 'activ';} ?>">ENG</a>
	</span>

<h2>Farby lásky</h2>
	<nav class="uvodnav">
		<ul>
      <li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'collection';} else{echo 'kolekcie';}?>"><?php if($lang=='en'){echo 'collection';} else{echo 'kolekcie';}?> </a> </li>
      <li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'about-me';} else{echo 'o-mne';}?>">designer</a> </li>
      <li><a href="https://eshop.lovecolors.sk/" target="_blank">E-SHOP</a></li>
		</ul>
	</nav>
</header>
<!-- Modal -->
<?php if( get_field('aktivovat_popup')=="Aktivovať" ): ?>
  <div class="modal fade" id="hpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php the_field('vyskakovaci_popup'); ?>
        </div>
        <div class="modal-footer">
          <?php if( get_field('vyskakovaci_odkaz')): ?>
            <a href="<?php the_field('vyskakovaci_odkaz'); ?>" class="btn"><?php the_field('vyskakovaci_text_odkazu'); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<main>
	<section class="hp group forindex">
		<div class="padding">
			<div class="menu-box menu-box1" style="background:url('<?= the_field('pozadie_baby',5) ?>'); background-size:cover;">
					<div class="stitok">baby</div>
					<a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'baby-en';} else{echo 'baby';}?>">
						<div class=" ">
							<div class="toscale">
								<h2>baby</h2>
								<i class="h2border">______</i>
								<p><?php if($lang=='en'){echo 'to the bed';} else{echo 'do postielky';}?></p>
							</div>
							<div class="shadow1">
                <div class="color">

                </div>
              </div>
						</div>
					</a>
			</div>
		</div>

		<div class="padding">
			<div class="menu-box menu-box2" style="background:url('<?= the_field('pozadie_detsky_svet',5) ?>'); background-size:cover;">
					<div class="stitok"><?php if($lang=='en'){echo "children world";} else{echo 'detský svet';}?></div>
					<a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'the-world-of-children';} else{echo 'detsky-svet';}?>">
						<div class=" ">
							<div class="toscale">
								<h2 style="<?php if($lang=='en'){echo "padding-top: 15px;";}?>"><?php if($lang=='en'){echo "children's world";} else{echo 'detský svet';}?></h2>
								<i class="h2border">______</i>
								<p><?php if($lang=='en'){echo "for our children";} else{echo 'pre naše detičky';}?></p>
							</div>
							<div class="shadow1">
                <div class="color">

                </div>
              </div>
						</div>
					</a>
			</div>
		</div>

		<div class="padding">
			<div class="menu-box menu-box3" style="background:url('<?= the_field('pozadie_home_decor',5) ?>'); background-size:cover;">
					<div class="stitok">home decor</div>
					<a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'home-decor-en';} else{echo 'home-decor';}?>">
						<div class="">
							<div class="toscale">
								<h2>home decor</h2>
								<i class="h2border">______</i>
								<p><?php if($lang=='en'){echo "for a better home";} else{echo 'pre krajší domov';}?> </p>
							</div>
							<div class="shadow1">
                <div class="color">

                </div>
              </div>
						</div>
					</a>
			</div>
		</div>

	</section>
	<section class="content-text">
			<article class="">
        <h1 class="super-font"> <?php echo $nadpisstranky; ?>    </h1>
        <p>
          <?php echo $popisstranky; ?>
        </p>
			</article>
	</section>




</main>

<script type="text/javascript">
$(document).ready(function(){
	$('#hpmodal').modal('show');
}); 
</script>
<?php

// get_sidebar();
get_footer();
