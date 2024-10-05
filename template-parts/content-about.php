<?php

/**
 * Template part for displaying About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_Gustavo
 */

?>

<section class="separator-project">
	<div class="marquee">
		<div class="marquee__group">
			<span>ABOUT</span>
			<span class="orange">ABOUT</span>
			<span>ABOUT</span>
			<span class="orange">ABOUT</span>
			<span>ABOUT</span>
			<span class="orange">ABOUT</span>
			<span>ABOUT</span>
			<span class="orange">ABOUT</span>
			<span>ABOUT</span>
			<span class="orange">ABOUT</span>

		</div>
		<div class="marquee__group" aria-hidden="true">
			<span>ABOUT</span>
			<span class="orange">ABOUT</span>
			<span>ABOUT</span>
			<span class="orange">ABOUT</span>
			<span>ABOUT</span>
			<span class="orange">ABOUT</span>
			<span>ABOUT</span>
			<span class="orange">ABOUT</span>
			<span>ABOUT</span>
			<span class="orange">ABOUT</span>

		</div>
	</div>
</section>

<section id="about" class="about">
	<div id="pillar">
		<div class="row">
			<div class="wrap">
				<div class="left">Based in Vancouver...</div>
				<div class="right">born in São Paulo</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				<div class="left">Creating with code...</div>
				<div class="right">and designing with heart</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				<div class="left">Developer by profession...</div>
				<div class="right">problem solver by nature</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				<div class="left">Bringing ideas to life...</div>
				<div class="right">one pixel at a time</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				<div class="left">Driven by clean code...</div>
				<div class="right">fueled by creativity</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				<div class="left">Focused on user experience...</div>
				<div class="right">because usability matters</div>
			</div>
		</div>
	</div>

	<article class="about-paragraph">
		<?php
		if (function_exists('get_field')) {
			?><div class="about-para-first"><?php
			if (get_field('about_title_1')) {
				echo '<h2>' . get_field('about_title_1') . '</h2>';
			}
			if (get_field('about_text_1')) {
				the_field('about_text_1');
			}
			?></div>
			<div class="about-para-second"><?php
			if (get_field('about_title_2')) {
				echo '<h2>' . get_field('about_title_2') . '</h2>';
			}
			if (get_field('about_text_2')) {
				the_field('about_text_2');
			}
			if (get_field('about_title_3')) {
				echo '<h2>' . get_field('about_title_3') . '</h2>';
			}
			?></div><?php
		}
		?>
	</article>
</section>