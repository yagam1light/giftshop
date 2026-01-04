<?php get_header(); ?>

<main class = "page-content">
    <?php
    if(have_posts()) :
        while (have_posts()) : the_post(); ?>
        <div class = "content"><?php the_content(); ?></div>
        <?php endwhile;
        else : ?>
        <p>Content not found</p>
        <?php endif; ?>
</main>

<?php get_footer(); ?>
