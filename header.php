<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h5><a href="<?php echo home_url(); ?>" class="logo">Dylan Luke</a></h5>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false)); ?>
    </nav>
</header>
