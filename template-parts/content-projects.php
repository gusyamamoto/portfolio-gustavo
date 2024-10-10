<?php

/**
 * Template part for displaying Projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_Gustavo
 */

?>
<section id="projects" class="projects">

	<section class="separator separator-project">
	<svg class="spinning-svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.557.472c.859-.628 2.026-.628 2.886 0 2.059 1.506 1.616 1.362 4.166 1.354 1.065-.003 2.009.683 2.334 1.696.78 2.427.507 2.052 2.575 3.544.863.623 1.224 1.733.892 2.745-.794 2.417-.798 1.953 0 4.38.333 1.011-.028 2.122-.892 2.745-2.068 1.491-1.794 1.116-2.575 3.544-.325 1.014-1.27 1.7-2.334 1.696-2.551-.008-2.108-.152-4.166 1.354-.859.628-2.026.628-2.886 0-2.059-1.505-1.616-1.363-4.166-1.354-1.065.003-2.009-.683-2.334-1.696-.78-2.43-.511-2.055-2.575-3.544-.863-.623-1.224-1.733-.892-2.745.795-2.417.798-1.953 0-4.38-.333-1.013.028-2.123.891-2.746 2.062-1.489 1.795-1.111 2.575-3.544.325-1.014 1.27-1.7 2.334-1.696 2.545.008 2.096.161 4.167-1.353z"/></svg>
		<h2>PROJECTS</h2>
	<svg class="spinning-svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.557.472c.859-.628 2.026-.628 2.886 0 2.059 1.506 1.616 1.362 4.166 1.354 1.065-.003 2.009.683 2.334 1.696.78 2.427.507 2.052 2.575 3.544.863.623 1.224 1.733.892 2.745-.794 2.417-.798 1.953 0 4.38.333 1.011-.028 2.122-.892 2.745-2.068 1.491-1.794 1.116-2.575 3.544-.325 1.014-1.27 1.7-2.334 1.696-2.551-.008-2.108-.152-4.166 1.354-.859.628-2.026.628-2.886 0-2.059-1.505-1.616-1.363-4.166-1.354-1.065.003-2.009-.683-2.334-1.696-.78-2.43-.511-2.055-2.575-3.544-.863-.623-1.224-1.733-.892-2.745.795-2.417.798-1.953 0-4.38-.333-1.013.028-2.123.891-2.746 2.062-1.489 1.795-1.111 2.575-3.544.325-1.014 1.27-1.7 2.334-1.696 2.545.008 2.096.161 4.167-1.353z"/></svg>
	</section>

	<section class="project-wrapper">
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
					<figure class="project-home-img-wrapper">
						<?php the_post_thumbnail('project-banner'); ?>
					</figure>
				</a>
				<p><a class="arrow" href="<?php the_permalink(); ?>"><span>See project</span></a></p>
			</article>
	<?php
		endwhile;
		wp_reset_postdata();
	endif;
	?>
	</section>
</section>