<?php if (!defined('ABSPATH')) die('Restricted Area'); ?>

<?php get_header(); ?>

    <div class="container">
        <div class="archive-recette">

            <h1><?php post_type_archive_title(); ?></h1>

            <!-- Les recettes sont dans cette boucle -->
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="recette-preview col-12 col-sm-6 col-md-4 col-lg-3">
                        <a class="recette-preview__header" href="<?php echo get_permalink() ?>">
                            <img class="img-fluid recette-preview__thumbnail"
                                 src="<?= get_the_post_thumbnail_url() ?>"/>
                        </a>

                        <div class="recette-preview__body text-center">
                            <div class="recette-preview__tags">
                                <?php foreach (get_the_terms(get_the_ID(), 'post_tag') as $tag): ?>
                                    <a class="tag-btn" href="<?= get_term_link($tag) ?>">
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
        <div class="row">
            <div class="col-xs-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                <div class="newsletter-form">
                    <div class="newsletter-form__header">
                        <img class="newsletter-form__icon"
                             src="<?= get_template_directory_uri() ?>/assets/icons/icon-gift.svg"/>
                        <h3 class="newsletter-form__title"><?php the_field('newsletter_title') ?></h3>
                        <p class="newsletter-form__text">
                            <?php the_field('newsletter_text') ?>
                        </p>
                    </div>

                    <?php echo do_shortcode('[mc4wp_form id="18"]'); ?>
                </div>
            </div>
        </div>

    </div>

<?php get_footer(); ?>