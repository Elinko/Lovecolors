<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lovecolors
 */

 if(get_locale()=='en_GB'){
 	$lang='en';
 }

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/dist/css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Allura|Amatic+SC|Caveat|Lekton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto+Mono" rel="stylesheet">
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/jquery/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="back-top">
		<div class="back-top-content">
			<i class="fa fa-arrow-up"></i>
		</div>
	</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lovecolors' ); ?></a>

	<header>
		<div class="main">
			<a href=" <?php echo esc_url(home_url('/')); ?> ">
				<div class="logo">
					<h1>Love Colors</h1>
				</div>
			</a>
			<p>by Julianna Rencés Kovács</p>
			<span class="language">
		    <a href="<?php echo get_site_url(); ?>" class="<?php if($lang!='en'){echo 'activ';} ?>">SK</a>
				<a href="<?php echo get_site_url(); ?>/en" class="<?php if($lang=='en'){echo 'activ';} ?>">ENG</a>
			</span>
			</span>
			<label>
				<input type='checkbox'>
				<span class='menu'> <span class='hamburger'></span> </span>
				<ul>
					<span class="language">
				    <a href="<?php echo get_site_url(); ?>" class="<?php if($lang!='en'){echo 'activ';} ?>">SK</a>
						<a href="<?php echo get_site_url(); ?>/en" class="<?php if($lang=='en'){echo 'activ';} ?>">ENG</a>
					</span>
					<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'collection';} else{echo 'kolekcie';}?>"><?php if($lang=='en'){echo 'collection';} else{echo 'kolekcie';}?> </a> </li>
						<ol>
							<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'baby-en';} else{echo 'baby';}?>">baby</a> </li>
							<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'the-world-of-children';} else{echo 'detsky-svet';}?>"><?php if($lang=='en'){echo "children's world";} else{echo 'detský svet';}?></a> </li>
							<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'home-decor-en';} else{echo 'home-decor';}?>">home decor</a> </li>
						</ol>
					<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'about-me';} else{echo 'o-mne';}?>">designer</a> </li>
					<ol>
						<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'about-me';} else{echo 'o-mne';}?>"><?php if($lang=='en'){echo 'about me';} else{echo 'o mne';}?></a> </li>
						<li><a href="<?php echo esc_url(home_url('/')); ?>blog">blog</a> </li>
						<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'contact';} else{echo 'kontakt';}?>"><?php if($lang=='en'){echo 'contact';} else{echo 'kontakt';}?></a> </li>
					</ol>
					<li><a href="https://eshop.lovecolors.sk/" target="_blank">E-SHOP</a></li>
				</ul>
			</label>

			<?php
				// wp_nav_menu( array(
				// 	'theme_location' => 'primary',
				// 	'container' 		 => 'nav',
				// 	'container_class'=> 'main-nav',
				// 	'menu_class'		 => ''
				// )	);

			?>

			<nav class="main-nav">
				<ul>
					<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'collection';} else{echo 'kolekcie';}?>"><?php if($lang=='en'){echo 'collection';} else{echo 'kolekcie';}?> </a> </li>
					<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'about-me';} else{echo 'o-mne';}?>">designer</a> </li>
					<li><a href="https://eshop.lovecolors.sk/" target="_blank">E-SHOP</a></li>
					<?php //if($_SERVER['REQUEST_URI']=="/detsky-svet/") { echo'mam jooo';} ?>
				</ul>

				<div class="sub-main-nav">
					<ul>
						<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'baby-en';} else{echo 'baby';}?>">baby</a> </li>
						<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'the-world-of-children';} else{echo 'detsky-svet';}?>"><?php if($lang=='en'){echo "children's world";} else{echo 'detský svet';}?></a> </li>
						<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'home-decor-en';} else{echo 'home-decor';}?>">home decor</a> </li>
						
					</ul>
				</div>

			</nav>
		</div>

	</header>
