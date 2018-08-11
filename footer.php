<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lovecolors
 */

// get_template_part('footer','content');
if(get_locale()=='en_GB'){
	$lang='en';
}
?>

<?php wp_footer(); ?>

<footer>
<aside class="social">
	<div class="social-content">
		<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/leftheart.png" alt="">
		<a href="https://www.facebook.com/LoveColorsByJuliannaRencesKovacs/" target="_blank">
				<i class="fa fa-facebook" aria-hidden="true"></i>
		</a>
		<a href="https://sk.pinterest.com/lovecolorsslovakia" target="_blank">
				<i class="fa fa-pinterest-p" aria-hidden="true"></i>
		</a>
		<a href="https://www.instagram.com/lovecolorsslovakia/" target="_blank">
			<i class="fa fa-instagram" aria-hidden="true"></i>
		</a>
		<a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'contact';} else{echo 'kontakt';}?>">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</a>
		<a href="https://eshop.lovecolors.sk/" target="_blank">
			<i class="fa fa-question" aria-hidden="true"></i>
		</a>
		<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/rightheart.png" alt="">
	</div>
</aside>

<div class="footer-content">
		<div class="footer-box">
			<div class="row">
				<div class="col-sm-4">
					<h3 class="super-font"><?php if($lang=='en'){echo 'I KNOW';} else{echo 'POZNÁM';}?></h3>
					<p><?php if($lang=='en'){echo "those little steps of the feet
on the sixth morning they will be robbed
into the dormitory for hugging; I know that
huncout children's laughs that just
something has brought about; until the ears are dirty
pudingom trafia
everywhere, not just in the mouth. And I know
that strong love, puto between the parent and
to a child that does not destroy or accidental
breaking the most expensive wedding vase
- if only strengthen it.
This is what I try to transfer to my own
creating and spreading to those who do it
they will know - your parents, your children
and generations after them.";} else{echo 'tie malé kroky nožičiek
o šiestej ráno, ktoré sa vkradnú
do spálne na objímanie; poznám ten
huncútsky detský smiech, ktoré práve
niečo vyviedlo; až po uši zašpinené
tváričky, lebo pudingom trafia
všade, len nie do úst. A poznám aj
tú silnú lásku, puto medzi rodičom a
dieťaťom, ktoré nezničí ani náhodné
rozbitie najdrahšej svadobnej vázy
– ba len viac posilní.
Toto sa snažím preniesť do svojej
tvorby a šíriť ďalej tým, ktorí to
poznajú – Vám, rodičom, Vaším deťom
a generáciám po nich.';}?></p>

				</div>
				<div class="col-sm-2">
					<h3 class="super-font">MENU</h3>
					<ul>
						<li></li>
						<li><a href="<?php echo esc_url(home_url('/')); ?>"><?php if($lang=='en'){echo 'home';} else{echo 'úvod';}?> </a></li>
						<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'collection';} else{echo 'kolekcie';}?>"><?php if($lang=='en'){echo 'collection';} else{echo 'kolekcie';}?> </a> </li>
						<li><a href="<?php echo esc_url(home_url('/')); ?><?php if($lang=='en'){echo 'about-me';} else{echo 'o-mne';}?>">designer</a> </li>


						<li><a href="https://eshop.lovecolors.sk/" target="_blank">E-SHOP</a></li>
					</ul>
				</div>
				<div class="col-sm-33">
					<div class="foot-adress">
						<h3 class="super-font"><?php if($lang=='en'){echo 'ADDRESS';} else{echo 'ADRESA';}?></h3>
						<ul>
							<li>Love Colors</li>
							<li>Julianna Rencés Kovács</li>
							<li class="noborder">prevádzka:</li>
							<li class="noborder"> </li>
							<li class="noborder">29.augusta 16</li>
							<li class="noborder">924 01 Galanta</li>
							<li class="noborder"><a href="mailto:lovecolors@lovecolors.sk">lovecolors@lovecolors.sk</a> </li>
							<li class="noborder"><a href="http://www.lovecolors.sk">www.lovecolors.sk</a> </li>
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

<script src="<?php bloginfo('stylesheet_directory');?>/assets/src/js/smartphoto.js?v=1"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/dist/js/main.js"></script>

</body>
</html>
