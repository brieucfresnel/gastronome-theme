<?php

/**
 * Chargement de feuilles de styles et/ou fichiers javascript
 **/
function gst_enqueue() {
    /**
     * Enqueue stylesheets
     */
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/assets/css/main.css', 1.0);
    wp_enqueue_style('my-fonts', get_template_directory_uri() . 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:ital,wght@0,300;0,400;0,700;1,400&display=swap');

    /**
     * Enqueue JS
     */
    wp_deregister_script('jquery'); // Remove default and enqueue theme-specific jquery
    wp_register_script('jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), null, true);

    wp_register_script('popperjs', get_template_directory_uri() . '/node_modules/@popperjs/core/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery', 'popperjs'));
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.13.0/js/all.js');
    wp_enqueue_script('my-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'gst_enqueue');


/**
 * Déclaration de menus administrables
 * La clef (nav_main par exemple) correspond à l'identifiant du menu
 * On utilisera cet identifiant pour afficher le menu à l'aide de la méthode wp_nav_menu()
 * Vous trouverez un exemple pour le menu principal dans le fichier header.php
 */
register_nav_menus( array(
    'nav_main' => __('Menu principal'),
) );

/**
 * Bootstrap Nav Walker
 * Ce Walker permet de donner les classes Bootstrap 4 au menu principal
 * On vérifie que le fichier existe, puis on l'importe. Ensuite,
 * on enregistre le Nav Walker
 */

function gst_register_navwalker() {
    if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
        // Le fichier n'existe pas: on lance une erreur
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        // Le fichier existe: on l'importe
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
}
add_action( 'after_setup_theme', 'gst_register_navwalker' );

/* Uncomment in case of ACF use */

/**
 * Ajout des pages de réglages du thème

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'     => 'Réglages Généraux Redtheme',
        'menu_title'    => 'Réglages RedTheme',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Options d\'en-tête',
        'menu_title'    => 'En-tête',
        'parent_slug'    => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Options du pied de page',
        'menu_title'    => 'Pied de page',
        'parent_slug'    => 'theme-general-settings',
    ));

}
 */
/**
 * ACF Admin Styles

function my_acf_admin_head() {
    ?>
    <style type="text/css"></style>
    <?php
} */
// add_action('acf/input/admin_head', 'my_acf_admin_head');