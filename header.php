<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Lexend:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <!-- Header starts -->
    <header class="header">
        <div class="header__logo">
            <?php the_custom_logo(); ?>
        </div>
        <button class="header__mobiletoggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <!-- Mega menu -->
        <?php get_template_part('tmpl/header-mega-menu'); ?>
    </header>
    <!-- Header ends -->