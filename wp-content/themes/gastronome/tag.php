<?php
/*
Template Name: Tag Archive
*/
if (!defined('ABSPATH')) die('Restricted Area'); ?>

<?php get_header(); ?>

    <div class="container">
        <div class="archive-recette">

            <h1><?php single_tag_title() ?></h1>

            <!-- Les recettes sont dans cette boucle -->
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="recette-preview col-12 col-sm-3 col-md-4 col-lg-3">
                        <a class="recette-preview__header" href="<?php echo get_permalink() ?>">
                            <img class="img-fluid recette-preview__thumbnail"
                                 src="<?= get_the_post_thumbnail_url() ?>"/>
                        </a>

                        <div class="recette-preview__body text-center">
                            <div class="recette-preview__tags">
                                <?php foreach (get_the_terms(get_the_ID(), 'post_tag') as $tag): ?>
                                    <a class="tag" href="<?= get_term_link($tag) ?>">
                                        <?= $tag->name ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <h3 class="recette-preview__title">
                                <?php echo get_the_title(); ?>
                            </h3>
                            <p class="recette-preview__excerpt">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>