<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

<div class="single-recette">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="<?= get_the_post_thumbnail_url() ?>"/>
            </div>
            <div class="col-lg-6 d-flex align-content-between">
                <div class="row d-flex align-content-between">
                    <?php
                    $images = get_field('images');
                    foreach ($images as $image): $image = $image['recette_image'] ?>
                        <div class="col-6">
                            <img class="img-fluid" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"/>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="single-recette__header">
                    <div class="single-recette__tags">
                        <?php foreach (get_the_terms(get_the_ID(), 'post_tag') as $tag): ?>
                            <a href="<?= get_term_link($tag) ?>" class="tag">
                                <?= $tag->name ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <h1 class="single-recette__title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="single-recette__times d-flex">
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/couverts.png"/>
                            Préparation : <?= get_field('preparation_time') ?>
                        </div>
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/four.png"/>
                            Cuisson : <?= get_field('cooking_time') ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
