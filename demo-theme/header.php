<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moments, Not Things</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class = "website-header">
    <div class = "container header-container">
    <?php
    wp_nav_menu(array(
    'theme_location' => 'left-menu',
    'container' => 'nav',
    'container_class' => 'menu-left'
    ));
    ?>
    <div class="header-logo"> 
    <a href="<?php echo home_url(); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logoo.svg" alt="Logo">
    </a>
    </div>
    <div class="header-actions">

    <form role="search" method="get" class="header-search" action="<?php echo home_url('/'); ?>">
    <input type="search" name="s" placeholder="Search..." />
    </form>

    <!-- <a href="#" class="header-icon" title="Favorites">
    <img src="<?php echo get_template_directory_uri(); ?>/images/favorite.svg" alt="Favorites">
    </a> -->

    <?php if ( class_exists( 'WooCommerce' ) ) : ?>

    <a href="<?php echo wc_get_cart_url(); ?>" class="header-icon">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cart.svg" alt="Cart">
    <span class="cart-count">
    <?php echo WC()->cart->get_cart_contents_count(); ?>
    </span>
    </a>

    <?php else : ?>

    <a href="#" class="header-icon">
    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-cart.svg" alt="Cart">
    </a>

    <?php endif; ?>



</div>
    </div>
    </header>