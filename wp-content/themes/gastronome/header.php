<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
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
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Pinterest</a></li>
                    </ul>

                    <ul class="main-navbar-nav__main-menu">
                        <div class="main-navbar-nav__menu-title">Menu</div>
                        <li class="page_item page-item-7 current_page_item">
                            <a href="http://localhost:8000/" aria-current="page">Accueil</a>
                        </li>
                        <li class="page_item page-item-2">
                            <a href="#">À propos</a>
                        </li>
                        <li class="page_item page-item-3">
                            <a href="#">Témoignages</a>
                        </li>
                        <li class="page_item page-item-4">
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                </div>

                <div class="main-navbar-nav__footer">
                    <p>
                        Restons en contact sur<br/>
                        <a href="mailto:creativeagency-studio@gmail.com">creativeagency-studio@gmail.com</a>
                    </p>
                    <a href="#">Presse</a>
                </div>
            </div>
        </div>
        <div class="main-navbar-btn">
            <span></span>
            <span></span>
        </div>
    </div>
</div>