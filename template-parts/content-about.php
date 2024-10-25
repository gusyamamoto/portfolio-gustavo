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

		</svg>
		<h2>About</h2>

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
		?><div class="paragraph-wrapper">
				<div class="about-para-first">
					<?php
					if (get_field('about_title_1')) {
						echo '<h2>' . get_field('about_title_1') . '</h2>';
					}
					if (get_field('about_text_1')) {
						echo '<p>' . get_field('about_text_1') . '</p>';
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
					?>
				</div>
			</div>
			<div class="about-para-third">
				<?php
				if (get_field('about_title_3')) {
					echo '<h2>' . get_field('about_title_3') . '</h2>';
				}
				?>
				<div class="lang-icons">
					<div class="icon" data-name="HTML"><?php echo get_svg_icon('html'); ?></div>
					<div class="icon" data-name="CSS"><?php echo get_svg_icon('css'); ?></div>
					<div class="icon" data-name="Sass"><?php echo get_svg_icon('sass'); ?></div>
					<div class="icon" data-name="PHP"><?php echo get_svg_icon('php'); ?></div>
					<div class="icon" data-name="JavaScript"><?php echo get_svg_icon('js'); ?></div>
					<div class="icon" data-name="React"><?php echo get_svg_icon('react'); ?></div>
					<div class="icon" data-name="WordPress"><?php echo get_svg_icon('wordpress'); ?></div>
					<div class="icon" data-name="WooCommerce"><?php echo get_svg_icon('woocommerce'); ?></div>
					<div class="icon" data-name="Shopify"><?php echo get_svg_icon('shopify'); ?></div>
					<div class="icon" data-name="Git"><?php echo get_svg_icon('git'); ?></div>
					<div class="icon" data-name="GitHub"><?php echo get_svg_icon('github'); ?></div>
					<div class="icon" data-name="Figma"><?php echo get_svg_icon('figma'); ?></div>
				</div>

			</div>
		<?php
		}
		?>
	</article>
</section>
</section>