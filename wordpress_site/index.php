<?php
/**
 * First Data Security WordPress Theme
 * A modern, professional theme for cybersecurity compliance services
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="fds-container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
?>