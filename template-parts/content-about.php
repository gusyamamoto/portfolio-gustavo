<?php

/**
 * Template part for displaying About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_Gustavo
 */

?>
<section id="about" class="about">

	<section class="separator-about">
		<div class="marquee">
			<div class="marquee__group">
				<span>ABOUT</span>
				<span class="sep-color">ABOUT</span>
				<span>ABOUT</span>
				<span class="sep-color">ABOUT</span>
				<span>ABOUT</span>
				<span class="sep-color">ABOUT</span>
			</div>
			<div class="marquee__group" aria-hidden="true">
				<span>ABOUT</span>
				<span class="sep-color">ABOUT</span>
				<span>ABOUT</span>
				<span class="sep-color">ABOUT</span>
				<span>ABOUT</span>
				<span class="sep-color">ABOUT</span>
			</div>
		</div>
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
				<div class="left"><p id="vancouver-weather"></p></div>
				<div class="right"><p id="sao-paulo-weather"></p></div>
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
				if (get_field('about_title_3')) {
					echo '<h2>' . get_field('about_title_3') . '</h2>';
				}
				?>
			</div>
		<?php
		}
		?>
	</article>
</section>