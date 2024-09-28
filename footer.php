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
			<?php
			/* translators: 1: Theme author. */
			printf( esc_html__( 'Designed by %1$s', 'portfolio-gustavo' ), 'Gustavo Yamamoto' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
