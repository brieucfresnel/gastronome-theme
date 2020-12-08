<?php

/**
 * Chargement de feuilles de styles et/ou fichiers javascript
 **/
function gst_enqueue()
{
    /**
     * Enqueue stylesheets
     */
	wp_enqueue_style('slick','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('gst_fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('gst_styles', get_template_directory_uri() . '/assets/css/main.css');

    /**
     * Enqueue JS
     */
    wp_deregister_script('jquery'); // Remove default and enqueue theme-specific jquery
    wp_register_script('jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), null, true);

    wp_register_script('popperjs', get_template_directory_uri() . '/node_modules/@popperjs/core/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery', 'popperjs'));
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.13.0/js/all.js');
    wp_enqueue_script('gst_js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
}

add_action('wp_enqueue_scripts', 'gst_enqueue');

/**
 * Déclaration de menus administrables
 * La clef (nav_main par exemple) correspond à l'identifiant du menu
 * On utilisera cet identifiant pour afficher le menu à l'aide de la méthode wp_nav_menu()
 * Vous trouverez un exemple pour le menu principal dans le fichier header.php
 */
register_nav_menus(array(
    'nav_main' => __('Menu principal'),
));

/**
 * Essential theme supports
 * */
function gst_theme_setup()
{
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats
     * $post_formats = array('aside', 'image', 'gallery', 'link', 'quote', 'status');
     * add_theme_support('post-formats', $post_formats);
     */
    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgets **/
    add_theme_support('customize-selective-refresh-widgets');

    /** custom background *
     * $bg_defaults = array(
     * 'default-image' => '',
     * 'default-preset' => 'default',
     * 'default-size' => 'cover',
     * 'default-repeat' => 'no-repeat',
     * 'default-attachment' => 'scroll',
     * );
     * add_theme_support('custom-background', $bg_defaults);
     */
    /** custom header **/
    $header_defaults = array(
        'default-image' => '',
        'width' => 300,
        'height' => 60,
        'flex-height' => true,
        'flex-width' => true,
        'default-text-color' => '',
        'header-text' => true,
        'uploads' => true,
    );
    add_theme_support('custom-header', $header_defaults);

    /** custom log **/
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}

add_action('after_setup_theme', 'gst_theme_setup');

/* Autoriser les fichiers SVG */
function gst_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'gst_mime_types');

function gst_custom_post_types() {

    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Recettes', 'gastronome'),
        // Le nom au singulier
        'singular_name'       => _x( 'Recette', 'gastronome'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Recettes'),
        // Les différents libellés de l'administration
        'all_items'           => __( 'Toutes les recettes'),
        'view_item'           => __( 'Voir les recettes'),
        'add_new_item'        => __( 'Ajouter une nouvelle recette'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer la recette'),
        'update_item'         => __( 'Modifier la recette'),
        'search_items'        => __( 'Rechercher une recette'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );

    $args = array(
        'label'               => __( 'Recettes'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-food',
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        /*
        * Différentes options supplémentaires
        */
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => 'recettes',
        'taxonomies' => array('post_tag'),
        'rewrite' => true
    );


    register_post_type( 'recette', $args );

}

add_action( 'init', 'gst_custom_post_types', 0 );


/**
 * Bootstrap Nav Walker
 * Ce Walker permet de donner les classes Bootstrap 4 au menu principal
 * On vérifie que le fichier existe, puis on l'importe. Ensuite,
 * on enregistre le Nav Walker
 *
 *
 * function gst_register_navwalker() {
 * if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
 * // Le fichier n'existe pas: on lance une erreur
 * return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
 * } else {
 * // Le fichier existe: on l'importe
 * require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
 * }
 * }
 * add_action( 'after_setup_theme', 'gst_register_navwalker' );
 */
