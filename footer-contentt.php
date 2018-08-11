<?php

/*
	Template Name: Footer Section
*/
// Advanced custom fields
$nadpisclanku= get_field('nadpis_textu');
var_dump($nadpisclanku);
$clanok= get_field('vnutro_textu');
$ulica= get_field('ulica');
$mesto= get_field('mesto');
$email= get_field('email');
$web_adresa= get_field('web_adresa');
if(get_locale()=='en_GB'){
 $lang='en';
 echo get_locale();
}
?>


<footer>
<aside class="social">
	<div class="social-content">
		<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/leftheart.png" alt="">
		<a href="#">
				<i class="fa fa-facebook" aria-hidden="true"></i>
		</a>
		<a href="#">
				<i class="fa fa-pinterest-p" aria-hidden="true"></i>
		</a>
		<a href="#">
			<i class="fa fa-instagram" aria-hidden="true"></i>
		</a>
		<a href="#">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</a>
		<a href="#">
			<i class="fa fa-question" aria-hidden="true"></i>
		</a>
		<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/rightheart.png" alt="">
	</div>
</aside>

<div class="footer-content">
		<div class="footer-box">
			<div class="row">
				<div class="col-sm-4">
					<?php if(!empty($nadpisclanku)) : ?>
					<h3 class="speacial-font"> <?php echo $nadpisclanku; ?> </h3>
				<?php endif; ?>
					<p> <?php echo $clanok; ?> </p>

				</div>
				<div class="col-sm-2">
					<h3 class="speacial-font">MENU</h3>
					<ul>
						<li></li>
						<li><a href="#">úvod</a></li>
						<li><a href="#">kolekcie</a> </li>
						<li><a href="#">designer</a></li>
						<li><a href="https://eshop.lovecolors.sk/" target="_blank">E-SHOP</a></li>
					</ul>
				</div>
				<div class="col-sm-33">
					<div class="foot-adress">
						<h3 class="speacial-font"><?php if($lang=='en'){echo 'ADDRESS';} else{echo 'ADRESA';}?> </h3>
						<ul>
							<li>Love Colors</li>
							<li>Julianna Renczés Kovács</li>
							<li class="noborder"><?php if($lang=='en'){echo 'traffic';} else{echo 'prevádzka';}?> :</li>
							<li class="noborder"> </li>
							<li class="noborder"><?php echo $ulica; ?></li>
							<li class="noborder"><?php echo $mesto; ?></li>
							<li class="noborder"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a> </li>
							<li class="noborder"><a href="http://<?php echo $web_adresa; ?>"><?php echo $web_adresa; ?></a> </li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 ">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/julika.png" alt="">
				</div>
			</div>
		</div>

</div>

</footer>
