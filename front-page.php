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
			?>
			<section class="separator-project">
				<div class="marquee">
					<div class="marquee__group">
						<span>projects</span>
						<span>portfolio</span>
						<span>projects</span>
						<span>projects</span>
						<span>projects</span>
						<span>projects</span>
						<span>projects</span>
						<span>projects</span>
					</div>
					<div class="marquee__group" aria-hidden="true">
						<span>portfolio</span>
						<span>projects</span>
						<span>portfolio</span>
						<span>portfolio</span>
						<span>portfolio</span>
						<span>portfolio</span>
						<span>portfolio</span>
						<span>portfolio</span>
					</div>
				</div>
			</section>

		<section class="projects">
			<?php
			$args = array (
				'post_type' => 'ghyport-projects',
				'posts_per_page' => -1,
			);

			$projects_query = new WP_Query($args);

			if ( $projects_query -> have_posts () ) {
				while ( $projects_query -> have_posts () ) {
					$projects_query -> the_post();

					the_title();
					the_post_thumbnail();
				}
				wp_reset_postdata();
			}
			?>
		</section>
		</div><!-- .entry-content -->
	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
