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
                        <p><?php the_field('project_introduction'); ?></p>
                    </div>
                    <div class="intro-goals">
                        <p><?php the_field('project_goals'); ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <figure class="project-thumbnail">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('project-banner');
                }
                ?>
            </figure>

            <div class="project-content">
                <?php the_content(); ?>

                <!-- If you are using Advanced Custom Fields or similar for project details -->
                <?php
                $images = get_field('project_gallery'); // This will return an array of images.
                if ($images) {
                    foreach ($images as $image) {
                        echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                    }
                }
                ?>

                <?php if (function_exists('the_field')) : ?>
                    <div class="project-details">
                        <a href="<?php the_field('project_link') ?>">Live Site</a>
                        <a href="<?php the_field('project_github') ?>">Git repository</a>

                    </div>
                <?php endif; ?>
            </div><!-- .project-content -->

        </article><!-- #post-<?php the_ID(); ?> -->

        <div class="project-navigation">
            <?php
            // Get the next and previous project posts
            $next_post = get_next_post();
            $previous_post = get_previous_post();
            ?>

            <?php if ($previous_post) : ?>
                <div class="previous-project">
                    <h2>Previous Project</h2>
                    <a href="<?php echo get_permalink($previous_post->ID); ?>">
                        <?php echo get_the_title($previous_post->ID); ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php if ($next_post) : ?>
                <div class="next-project">
                    <h2>Next Project</h2>
                    <a href="<?php echo get_permalink($next_post->ID); ?>">
                        <?php echo get_the_title($next_post->ID); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    <?php

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_footer();
