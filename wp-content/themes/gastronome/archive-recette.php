<?php if (!defined('ABSPATH')) die('Restricted Area'); ?>

<?php get_header(); ?>

<header class="page-header">
    <h1 class="container"><?php post_type_archive_title(); ?></h1>

    <!-- Les recettes sont dans cette boucle -->
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="recette-preview col-12 col-md-6 col-lg-4">
                <img class="img-fluid" src="<?= get_the_post_thumbnail_url() ?>"/>
                Etiquettes :
                <?php echo get_the_terms(get_the_ID(), 'post_tag')['name'] ?>
                <?php the_title(); ?>
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>

</header>
