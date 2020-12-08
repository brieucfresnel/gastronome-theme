<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= get_template_directory_uri() ?>/assets/favicon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="main-navbar">
    <div class="container">
        <?php the_custom_logo() ?>
        <?php /*
            wp_nav_menu(array(
                'theme_location' => 'nav-main',
                'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container' => 'div',
                'container_class' => 'main-navbar',
                // 'container_id'    => '',
                'menu_class' => 'main-navbar-nav',
            ));
            */ ?>
        <div class="main-navbar-nav">
            <div class="main-navbar-nav__content">
                <div class="main-navbar-nav__menus">

                    <ul class="main-navbar-nav__socials">
                        <div class="main-navbar-nav__menu-title">Socials</div>
                        <li><a href="https://www.instagram.com/gastronome_fr/">Instagram</a></li>
                        <li><a href="https://www.facebook.com/GastronoMefr/">Facebook</a></li>
                        <li><a href="https://twitter.com/GastronoMe_fr">Twitter</a></li>
                        <li><a href="https://www.pinterest.fr/GastronoMe_fr/">Pinterest</a></li>
                    </ul>

                    <ul class="main-navbar-nav__main-menu">
                        <div class="main-navbar-nav__menu-title">Menu</div>
                        <div class="main-navbar-nav__big-links">
                            <li class="page_item page-item-7 current_page_item">
                                <a href="/" aria-current="page">Accueil</a>
                            </li>
                            <li class="page_item page-item-2">
                                <a href="/qui-sommes-nous">Qui sommes-nous ?</a>
                            </li>
                            <li class="page_item page-item-3">
                                <a href="/recettes">Recettes</a>
                            </li>
                        </div>
                        <div class="main-navbar-nav__small-links">
                            <li class="page_item page-item-3">
                                <a href="/">Petits plats</a>
                            </li>

                            <li class="page_item page-item-3">
                                <a href="/">Témoignages</a>
                            </li>
                            <li class="page_item page-item-3">
                                <a href="/">Recettes</a>
                            </li>
                        </div>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h3>
                        <img src="<?php echo get_field('contact_icon', 'option')['url'] ?>"/>
                        <?php the_field('contact_text', 'option') ?>
                    </h3>
                    <a href="mailto:<?php the_field('contact_mail', 'option') ?>">
                        <?php the_field('contact_mail', 'option') ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-navbar-btn">
            <span></span>
            <span></span>
        </div>
    </div>
</div>