<?php
/**
 * FDS Modern Theme - Main Template
 * Clean, modern cybersecurity theme
 */

get_header(); ?>

<main id="main" class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <div class="fds-container">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                </article>
            </div>
            <?php
        endwhile;
    else :
        ?>
        <div class="fds-container">
            <div class="fds-section">
                <h1>Nothing Found</h1>
                <p>Sorry, but nothing matched your search terms. Please try again with different keywords.</p>
            </div>
        </div>
        <?php
    endif;
    ?>
</main>

<?php get_footer(); ?>