<?php
/**
 * The template for displaying The Home pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_Gustavo
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
			?>

				<section class="separator-project">
					<div class="marquee">
						<div class="marquee__group">
							<span>Your text here</span>
							<span>Your text here</span>
							<span>Your text here</span>
						</div>
						<div class="marquee__group" aria-hidden="true">
							<span>Your text here</span>
							<span>Your text here</span>
							<span>Your text here</span>
						</div>
					</div>
				</section>

			<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
