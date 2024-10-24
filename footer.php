<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio_Gustavo
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p class="logo-footer">G</p>
			<div class="scroll-top">
			<a id="scrollToTop" href="#page" style="display: none;">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z"/></svg>	
			</a>
		</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
<script>
  AOS.init({
    once: true,
    duration: 1000,
  });
</script>
</body>
</html>
