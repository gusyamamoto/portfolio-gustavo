<?php

/**
 * Template part for displaying About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_Gustavo
 */

?>
<section class="about" id="about">
<section class="separator">
	<!-- <svg class="spinning-svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
		<path d="M10.557.472c.859-.628 2.026-.628 2.886 0 2.059 1.506 1.616 1.362 4.166 1.354 1.065-.003 2.009.683 2.334 1.696.78 2.427.507 2.052 2.575 3.544.863.623 1.224 1.733.892 2.745-.794 2.417-.798 1.953 0 4.38.333 1.011-.028 2.122-.892 2.745-2.068 1.491-1.794 1.116-2.575 3.544-.325 1.014-1.27 1.7-2.334 1.696-2.551-.008-2.108-.152-4.166 1.354-.859.628-2.026.628-2.886 0-2.059-1.505-1.616-1.363-4.166-1.354-1.065.003-2.009-.683-2.334-1.696-.78-2.43-.511-2.055-2.575-3.544-.863-.623-1.224-1.733-.892-2.745.795-2.417.798-1.953 0-4.38-.333-1.013.028-2.123.891-2.746 2.062-1.489 1.795-1.111 2.575-3.544.325-1.014 1.27-1.7 2.334-1.696 2.545.008 2.096.161 4.167-1.353z" />
	</svg> -->
	<h2>About</h2>
	<!-- <svg class="spinning-svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
		<path d="M10.557.472c.859-.628 2.026-.628 2.886 0 2.059 1.506 1.616 1.362 4.166 1.354 1.065-.003 2.009.683 2.334 1.696.78 2.427.507 2.052 2.575 3.544.863.623 1.224 1.733.892 2.745-.794 2.417-.798 1.953 0 4.38.333 1.011-.028 2.122-.892 2.745-2.068 1.491-1.794 1.116-2.575 3.544-.325 1.014-1.27 1.7-2.334 1.696-2.551-.008-2.108-.152-4.166 1.354-.859.628-2.026.628-2.886 0-2.059-1.505-1.616-1.363-4.166-1.354-1.065.003-2.009-.683-2.334-1.696-.78-2.43-.511-2.055-2.575-3.544-.863-.623-1.224-1.733-.892-2.745.795-2.417.798-1.953 0-4.38-.333-1.013.028-2.123.891-2.746 2.062-1.489 1.795-1.111 2.575-3.544.325-1.014 1.27-1.7 2.334-1.696 2.545.008 2.096.161 4.167-1.353z" />
	</svg> -->
</section>

<div id="pillar">
	<div class="row">
		<div class="wrap">
			<div class="left">Based in Vancouver<span class="orange">...</span></div>
			<div class="right">born in São Paulo</div>
		</div>
	</div>

	<div class="row">
		<div class="wrap">
			<div class="left">Creating with code<span class="orange">...</span></div>
			<div class="right">and designing with heart</div>
		</div>
	</div>

	<div class="row">
		<div class="wrap">
			<div class="left">Developer by profession<span class="orange">...</span></div>
			<div class="right">problem solver by nature</div>
		</div>
	</div>

	<div class="row">
		<div class="wrap">
			<div class="left">Bringing ideas to life<span class="orange">...</span></div>
			<div class="right">one pixel at a time</div>
		</div>
	</div>

	<div class="row">
		<div class="wrap">
			<div class="left">Driven by clean code<span class="orange">...</span></div>
			<div class="right">fueled by creativity</div>
		</div>
	</div>

	<div class="row">
		<div class="wrap">
			<div class="left">Focused on user experience<span class="orange">...</span></div>
			<div class="right">because usability matters</div>
		</div>
	</div>

	<div class="row">
		<div class="wrap">
			<div class="left">
				<p id="vancouver-weather"></p>
			</div>
			<div class="right">
				<p id="sao-paulo-weather"></p>
			</div>
		</div>
	</div>
</div>

<article class="about-paragraph">
	<?php
	if (function_exists('get_field')) {
	?>
		<div class="about-para-first">
			<?php
			if (get_field('about_title_1')) {
				echo '<h2>' . get_field('about_title_1') . '</h2>';
			}
			if (get_field('about_text_1')) {
				the_field('about_text_1');
			}
			?>
		</div>
		<div class="about-para-second">
			<?php
			if (get_field('about_title_2')) {
				echo '<h2>' . get_field('about_title_2') . '</h2>';
			}
			if (get_field('about_text_2')) {
				the_field('about_text_2');
			}
			// if (get_field('about_title_3')) {
			// 	echo '<h2>' . get_field('about_title_3') . '</h2>';
			// }
			?>
		</div>
	<?php
	}
	?>
</article>
</section>
</section>