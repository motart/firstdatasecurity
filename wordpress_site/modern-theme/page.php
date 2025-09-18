<?php
/**
 * FDS Modern Theme - Page Template
 * Template for displaying pages
 */

get_header(); ?>

<main id="main" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <div class="page-content">
            <?php the_content(); ?>
        </div>
        <?php
    endwhile;
    ?>
</main>

<?php get_footer(); ?>