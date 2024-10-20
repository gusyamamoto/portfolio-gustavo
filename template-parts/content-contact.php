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

	<!-- <div class="scroll-top">
			<a href="#page">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z"/></svg>	
			</a>
		</div> -->

</section>