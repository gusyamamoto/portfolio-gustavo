<?php

/**
 * The template for displaying single Project posts
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

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header><!-- .entry-header -->

            <?php if (function_exists('the_field')) : ?>
                <div class="project-intro">
                    <div class="intro-para">
                        <h3>Introduction</h3>
                        <p><?php the_field('project_introduction'); ?></p>
                    </div>
                    <div class="intro-goals">
                        <h3>Goals</h3>
                        <p><?php the_field('project_goals'); ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- <figure class="project-thumbnail">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('project-banner');
                }
                ?>
            </figure> -->

            <div class="project-content">
                <?php the_content(); ?>
                <div class="project-gallery">
                    <?php
                    $images = get_field('project_gallery');
                    if ($images) {
                        foreach ($images as $image) {
                            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                        }
                    }
                    ?>
                </div>

                <?php if (function_exists('the_field')) : ?>

                    <div class="project-images">
                        <?php
                        $project_image_1 = get_field('project_image_1');
                        if ($project_image_1) : ?>
                            <img src="<?php echo esc_url($project_image_1['url']); ?>" alt="<?php echo esc_attr($project_image_1['alt']); ?>">
                        <?php endif;

                        $project_image_2 = get_field('project_image_2');
                        if ($project_image_2) : ?>
                            <img src="<?php echo esc_url($project_image_2['url']); ?>" alt="<?php echo esc_attr($project_image_2['alt']); ?>">
                        <?php endif;

                        $project_image_3 = get_field('project_image_3');
                        if ($project_image_3) : ?>
                            <img src="<?php echo esc_url($project_image_3['url']); ?>" alt="<?php echo esc_attr($project_image_3['alt']); ?>">
                        <?php endif; ?>

                        <div class="project-mobile-img-wrapper">
                            <?php
                            $project_image_4 = get_field('project_image_4');
                            if ($project_image_4) : ?>
                                <img class="project-mobile-img" src="<?php echo esc_url($project_image_4['url']); ?>" alt="<?php echo esc_attr($project_image_4['alt']); ?>">
                            <?php endif;

                            $project_image_5 = get_field('project_image_5');
                            if ($project_image_5) : ?>
                                <img class="project-mobile-img" src="<?php echo esc_url($project_image_5['url']); ?>" alt="<?php echo esc_attr($project_image_5['alt']); ?>">
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="project-links">
                        <a href="<?php the_field('project_link') ?>">Live Site</a>
                        <a href="<?php the_field('project_github') ?>">Git Repository</a>
                    </div>

                <?php endif; ?>
            </div><!-- .project-content -->

        </article><!-- #post-<?php the_ID(); ?> -->

            <?php
            $next_post = get_next_post();
            $first_project = get_posts(array(
                'post_type' => 'ghyport-projects',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'ASC'
            ));

            if (!$next_post && !empty($first_project)) {
                $next_post = $first_project[0];
            }
            if ($next_post) : ?>
                <div class="next-project">
                    <h2>Next <span class="font-comp">Project</span></h2>
                    <a href="<?php echo get_permalink($next_post->ID); ?>">
                    <?php echo get_the_post_thumbnail($next_post->ID, 'project-small-thumb'); ?>
                        <?php echo get_the_title($next_post->ID); ?>
                    </a>
                </div>
            <?php endif; ?>
    <?php

    endwhile; // End of the loop.
    ?>
    <div class="scroll-top scroll-top-project">
        <a href="#page">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z" />
            </svg>
            <style></style>
        </a>
    </div>

</main><!-- #main -->

<?php
get_footer();
