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
	<div class="contact-header">
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
	</div>
		<p class="logo-contact">G</p>
	<div class="button-wrapper">
		<button id="copy-email-button">Copy E-mail</button>
	</div>
	<nav class="social-links">
		<ul>
			<li><a href="https://www.linkedin.com/in/gustavo-yamamoto-bb914872/" target="_blank">LinkedIn</a></li>
			<li><a href="https://github.com/gusyamamoto" target="_blank">GitHub</a></li>
		</ul>
	</nav>

</section>