<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header" style="padding: 20px; border-bottom: 1px solid var(--color-mist);">
        <div class="header-container" style="display: flex; justify-content: space-between; align-items: center;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" style="font-family: var(--font-display); font-size: 24px; font-weight: bold; text-decoration: none; color: var(--color-ink);">Meridian</a>
            <nav class="main-navigation">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary-menu',
        'container'      => false,
        'menu_class'     => 'main-menu-list',
    ) );
    ?>
</nav>
            <a href="<?php echo site_url('/contact'); ?>" class="btn-cta" style="background-color: var(--color-ink); color: #FFF; padding: 10px 20px; text-decoration: none; font-family: var(--font-mono); font-size: 13px; text-transform: uppercase;">Start a project</a>
        </div>
    </header>