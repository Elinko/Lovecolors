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

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/smartphoto.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/footer.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/assetsstyle.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Aclonica|Nanum+Brush+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lekton" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Allura|Amatic+SC|Caveat|Lekton" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lovecolors' ); ?></a>

	<header>
		<div class="main">
			<a href=" <?php echo esc_url(home_url('/')); ?> ">
				<div class="logo">
					<h1>Love Colorr</h1>
				</div>
			</a>
			<p>by Julianna Renczés Kovács</p>
			<span class="language">
				<a href="#" class="activ">SK</a>
				<a href="#">ENG</a>
			</span>
			<label>
			<input type='checkbox'>
			<span class='menu'> <span class='hamburger'></span> </span>
			<label>
				<input type='checkbox'>
				<span class='menu'> <span class='hamburger'></span> </span>
				<ul>
					<span class="language">
						<a href="#" class="activ">SK</a>
						<a href="#">ENG</a>
					</span>
					<li><a href="<?php echo esc_url(home_url('/')); ?>kolekcie">KOLEKCIE</a></li>
						<ol>
							<li><a href="<?php echo esc_url(home_url('/')); ?>baby">baby</a> </li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>detsky-svet">DETSKÝ SVET</a> </li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>home-decor">home decor</a> </li>
						</ol>
					<li><a href="<?php echo esc_url(home_url('/')); ?>o-mne">DESIGNER</a></li>
					<ol>
						<li><a href="<?php echo esc_url(home_url('/')); ?>o-mne">o mne</a> </li>
						<li><a href="<?php echo esc_url(home_url('/')); ?>blog">blog</a> </li>
						<li><a href="<?php echo esc_url(home_url('/')); ?>kontakt">kontakt</a> </li>
					</ol>
					<li><a href="#">DOSTUPNÉ</a></li>
				</ul>
			</label>
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
					<li><a href="<?php echo esc_url(home_url('/')); ?>kolekcie">kolekcie</a> </li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>o-mne">designer</a> </li>
					<li><a href="#">dostupné</a> </li>
					<?php //if($_SERVER['REQUEST_URI']=="/detsky-svet/") { echo'mam jooo';} ?>
				</ul>

				<div class="sub-main-nav">
					<ul>
						<li><a href="<?php echo esc_url(home_url('/')); ?>o-mne">O mne</a> </li>
						<li><a href="<?php echo esc_url(home_url('/')); ?>blog">Blog</a> </li>
						<li><a href="<?php echo esc_url(home_url('/')); ?>kontakt">Kontakt</a> </li>
					</ul>
				</div>

			</nav>
		</div>

	</header>