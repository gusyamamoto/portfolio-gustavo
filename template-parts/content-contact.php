<?php

/**
 * Template part for displaying About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_Gustavo
 */

?>
<section id="contact" class="contact">

	<section class="separator-contact">
		<div class="marquee">
			<div class="marquee__group">
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>

			</div>
			<div class="marquee__group" aria-hidden="true">
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>
				<span>CONTACT</span>
				<span class="sep-color">CONTACT</span>

			</div>
		</div>
	</section>

	<?php
	if (function_exists('get_field')) {
	?>
		<div class="contact-title">
			<?php
			if (get_field('contact_title')) {
				echo '<h2>' . get_field('contact_title') . '</h2>';
			}
			?>
		</div>
	<?php
	}
	?>
	<div class="button-wrapper">
		<button id="copy-email-button">Copy E-mail</button>
		<!-- <p id="email-notification"></p> -->

		<?php
		if (function_exists('get_field')) {
			if (get_field('my_email')) {
				echo '<p>' . get_field('my_email') . '</p>';
			}
		}
		?>
	</div>
	<nav class="social-links">
		<ul>
			<li><a href="https://www.linkedin.com/in/gustavo-yamamoto-bb914872/" target="_blank">LinkedIn</a></li>
			<li><a href="https://github.com/gusyamamoto" target="_blank">GitHub</a></li>
		</ul>
	</nav>
</section>