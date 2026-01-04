<?php get_header(); ?>

<main class="shop-page container">
    <?php if ( have_posts() ) : ?>

        <h1 class="shop-title"><?php woocommerce_page_title(); ?></h1>

        <div class="products">
            <?php woocommerce_product_loop_start(); ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="product">
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('medium');
                        }
                    ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn">Learn More</a>
                </div>
            <?php endwhile; ?>

            <?php woocommerce_product_loop_end(); ?>
        </div>

        <?php
            do_action('woocommerce_after_shop_loop');
        ?>

    <?php else : ?>
        <p>No products found</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
