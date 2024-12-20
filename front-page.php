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
<div id="loading">
	<p id="loading-logo">G</p>
</div>
<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
	?>
		<header id="entry-header" class="entry-header-home fade-in">
			<h1 class="entry-title-home">front<span class="orange">_</span>end<br>web<br>developer</h1>
			<div class="scroll-down"></div>
		</header><!-- .entry-header -->

		<div class="entry-content">

			<?php
			the_content();
			get_template_part('template-parts/content', 'projects');
			get_template_part('template-parts/content', 'about');
			get_template_part('template-parts/content', 'contact');
			?>


		</div>
	<?php
	endwhile;
	?>

</main><!-- #main -->

<?php
get_footer();
