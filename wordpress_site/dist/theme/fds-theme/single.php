<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<div class="container">
    <div class="single-post-content py-16">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="post-header mb-8">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    
                    <div class="post-meta">
                        <time datetime="<?php echo get_the_date('c'); ?>" class="post-date">
                            <?php echo get_the_date(); ?>
                        </time>
                        <span class="post-author">by <?php the_author(); ?></span>
                        <?php if (has_category()) : ?>
                            <span class="post-categories">
                                in <?php the_category(', '); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <div class="post-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'fds-theme'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <footer class="post-footer">
                    <?php if (has_tag()) : ?>
                        <div class="post-tags">
                            <h3>Tags</h3>
                            <?php the_tags('<ul class="tag-list"><li>', '</li><li>', '</li></ul>'); ?>
                        </div>
                    <?php endif; ?>
                </footer>
            </article>

            <?php
            // Post navigation
            the_post_navigation(array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'fds-theme') . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'fds-theme') . '</span> <span class="nav-title">%title</span>',
            ));
            ?>

        <?php endwhile; ?>
    </div>
</div>

<style>
.post-meta {
    color: var(--fds-neutral-500);
    font-size: 0.875rem;
    margin-bottom: 2rem;
}

.post-meta > * {
    margin-right: 1rem;
}

.post-thumbnail {
    margin: 2rem 0;
}

.post-thumbnail img {
    width: 100%;
    height: auto;
    border-radius: var(--fds-border-radius);
}

.post-content {
    max-width: 800px;
    margin: 0 auto;
}

.post-content h2,
.post-content h3,
.post-content h4 {
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.post-content p {
    margin-bottom: 1.5rem;
    line-height: 1.7;
}

.post-footer {
    border-top: 1px solid var(--fds-neutral-200);
    padding-top: 2rem;
    margin-top: 3rem;
}

.tag-list {
    list-style: none;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.tag-list li {
    background-color: var(--fds-neutral-50);
    border: 1px solid var(--fds-neutral-200);
    border-radius: var(--fds-border-radius);
    padding: 0.25rem 0.75rem;
    font-size: 0.875rem;
}

.tag-list a {
    color: var(--fds-neutral-500);
    text-decoration: none;
}

.tag-list a:hover {
    color: var(--fds-primary);
}

.post-navigation {
    margin-top: 3rem;
    border-top: 1px solid var(--fds-neutral-200);
    padding-top: 2rem;
}

.post-navigation .nav-links {
    display: flex;
    justify-content: space-between;
}

.post-navigation .nav-previous,
.post-navigation .nav-next {
    flex: 1;
    max-width: 45%;
}

.post-navigation .nav-next {
    text-align: right;
}

.nav-subtitle {
    display: block;
    font-size: 0.875rem;
    color: var(--fds-neutral-500);
    margin-bottom: 0.25rem;
}

.nav-title {
    display: block;
    font-weight: 600;
    color: var(--fds-primary);
}
</style>

<?php get_footer(); ?>