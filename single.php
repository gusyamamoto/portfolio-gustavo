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

                <?php if (function_exists('the_field')) : ?>

                    <article class="project-item project-images">
    <?php
    $project_image_1 = get_field('project_image_1');
    if ($project_image_1) :
        echo wp_get_attachment_image($project_image_1, 'full', false, array(
            'class' => 'project-img-1', 
            'data-aos' => 'fade-up', 
            'data-aos-duration' => '1000'
        ));
    endif;

    $project_image_2 = get_field('project_image_2');
    if ($project_image_2) :
        echo wp_get_attachment_image($project_image_2, 'full', false, array(
            'data-aos' => 'fade-up',
            'data-aos-duration' => '1000'
        ));
    endif;

    $project_image_3 = get_field('project_image_3');
    if ($project_image_3) :
        echo wp_get_attachment_image($project_image_3, 'full', false, array(
            'data-aos' => 'fade-up',
            'data-aos-duration' => '1000'
        ));
    endif;
    ?>

    <div class="project-mobile-img-wrapper">
        <?php
        $project_image_4 = get_field('project_image_4');
        if ($project_image_4) :
            echo wp_get_attachment_image($project_image_4, 'full', false, array(
                'class' => 'project-mobile-img', 
                'data-aos' => 'fade-up', 
                'data-aos-duration' => '1000'
            ));
        endif;

        $project_image_5 = get_field('project_image_5');
        if ($project_image_5) :
            echo wp_get_attachment_image($project_image_5, 'full', false, array(
                'class' => 'project-mobile-img', 
                'data-aos' => 'fade-up', 
                'data-aos-duration' => '1000'
            ));
        endif;
        ?>
    </div>
</article>



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
                <h2>Next Project</h2>
                <a href="<?php echo get_permalink($next_post->ID); ?>">
                    <?php echo get_the_post_thumbnail($next_post->ID, 'project-small-thumb'); ?>
                    <p><?php echo get_the_title($next_post->ID); ?></p>
                </a>
            </div>
        <?php endif; ?>
    <?php

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_footer();
