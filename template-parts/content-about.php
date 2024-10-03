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

		</div>
		<div class="marquee__group" aria-hidden="true">
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
				<div class="right">born in São Paulo.</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				<div class="left">I develop websites with the visual experience in mind...</div>
				<div class="right">but they also work seamlessly behind the scenes.</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				<div class="left">Coding might seem technical and rigid...</div>
				<div class="right">but I find joy in merging design with development.</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				<div class="left">I build sites with HTML, CSS, and JavaScript...</div>
				<div class="right">but the heart of my work lies in crafting engaging digital experiences.</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				<div class="left">Moving from Brazil to Canada might seem like a leap...</div>
				<div class="right">but it is where I found my love for web development and snowboarding.</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				<div class="left">I graduated from BCIT in Front-End Web Development…</div>
				<div class="right">but my journey started earlier with a passion for creativity and problem-solving.</div>
			</div>
		</div>
	</div>

	<article class="about-paragraph">
		<?php
		if (function_exists('get_field')) {

			if (get_field('about_title_1')) {
				echo '<h2>' . get_field('about_title_1') . '</h2>';
			}
			if (get_field('about_text_1')) {
				the_field('about_text_1');
			}
			if (get_field('about_title_2')) {
				echo '<h2>' . get_field('about_title_2') . '</h2>';
			}
			if (get_field('about_text_2')) {
				the_field('about_text_2');
			}
			if (get_field('about_title_3')) {
				echo '<h2>' . get_field('about_title_3') . '</h2>';
			}
		}
		?>
	</article>
</section>