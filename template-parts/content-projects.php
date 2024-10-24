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
        <h2>Projects</h2>
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
                <article class="project-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
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
