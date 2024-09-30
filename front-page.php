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
	while (have_posts()) :
		the_post();
	?>
		<header class="entry-header">
			<h1 class="entry-title">Front-End<br>Web<br>Developer</h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content();
			get_template_part('template-parts/content', 'projects');
			get_template_part('template-parts/content', 'about');
			?>			


		</div><!-- .entry-content -->
	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
