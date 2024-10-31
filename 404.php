<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Portfolio_Gustavo
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('What are you doing here?', 'portfolio-gustavo'); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<!-- <a href="<?php echo home_url(); ?>" class="logo-404">G</a> -->
			 <img class="image-404" src="https://ghyamamoto.com/portfolio/wp-content/uploads/2024/10/file-1.png" alt="">
		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
