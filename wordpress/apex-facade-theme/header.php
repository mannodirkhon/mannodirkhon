<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header py-3 mb-4">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <div class="logo">
            <?php if (function_exists('the_custom_logo')) { the_custom_logo(); } else { ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">Apex Facade</a>
            <?php } ?>
        </div>
        <nav class="primary-menu">
            <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav']); ?>
        </nav>
        <div class="language-switcher">
            <?php pll_the_languages(['dropdown'=>1]); ?>
        </div>
    </div>
</header>
<div class="container">
