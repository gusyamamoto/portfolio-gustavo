<?php

/**
 * Template part for displaying Projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_Gustavo
 */

?>

<section class="separator-project">
	<div class="marquee">
		<div class="marquee__group">
			<span>PROJECTS</span>
			<span class="orange">PROJECTS</span>
			<span>PROJECTS</span>
			<span class="orange">PROJECTS</span>
			<span>PROJECTS</span>
			<span class="orange">PROJECTS</span>

		</div>
		<div class="marquee__group" aria-hidden="true">
			<span>PROJECTS</span>
			<span class="orange">PROJECTS</span>
			<span>PROJECTS</span>
			<span class="orange">PROJECTS</span>
			<span>PROJECTS</span>
			<span class="orange">PROJECTS</span>

		</div>
	</div>
</section>

<section id="projects" class="projects">
	<?php
	$args = array(
		'post_type' => 'ghyport-projects',
		'posts_per_page' => -1,
	);

	$projects_query = new WP_Query($args);

	if ($projects_query->have_posts()) :
		while ($projects_query->have_posts()) :
			$projects_query->the_post();
	?>
			<article class="project-item">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<p><a class="arrow" href="<?php the_permalink(); ?>"><span>See project</span></a></p>
			</article>
	<?php
		endwhile;
		wp_reset_postdata();
	endif;
	?>
</section>