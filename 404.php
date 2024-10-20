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
			<h1 class="page-title"><?php esc_html_e('Page not found.', 'portfolio-gustavo'); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<a href="<?php echo home_url(); ?>" class="logo-404">G</a>
		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
