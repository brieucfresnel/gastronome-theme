<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <div class="single-recette">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid w-100 h-100" src="<?= get_the_post_thumbnail_url() ?>"/>
                </div>
                <div class="d-none d-lg-flex col-lg-6 align-content-between">
                    <div class="row d-flex align-content-between">
                        <?php
                        $images = get_field('images');
                        foreach ($images as $image): $image = $image['recette_image'] ?>
                            <div class="col-6">
                                <img class="img-fluid w-100 h-100" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"/>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="row mt-5 align-items-start">
                <div class="col-lg-6">
                    <div class="single-recette__header">
                        <div class="single-recette__tag-btns">
                            <?php foreach (get_the_terms(get_the_ID(), 'post_tag') as $tag): ?>
                                <a class="tag-btn" href="<?= get_term_link($tag) ?>">
                                    <?= $tag->name ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <h1 class="single-recette__title">
                            <?php the_title(); ?>
                        </h1>
                        <div class="single-recette__times d-flex">
                            <div class="d-flex align-items-center mr-4">
                                <img class="mr-2" src="<?= get_template_directory_uri() ?>/assets/icons/couverts.png"/>
                                Préparation : <?= get_field('recette_data')['preparation_time'] ?>
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="mr-2" src="<?= get_template_directory_uri() ?>/assets/icons/four.png"/>
                                Cuisson : <?= get_field('recette_data')['cooking_time'] ?>
                            </div>
                        </div>
                        <a href="/recette" class="single-recette__go-back">
                            <img class="mr-2" src="<?= get_template_directory_uri() ?>/assets/icons/arrow-right.svg"/>
                            Revenir
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-8 offset-lg-1 col-lg-5 mt-lg-0 mt-3 d-flex justify-content-center">
                    <div class="single-recette__datas d-flex justify-content-between">
                        <div class="single-recette__data">
                            <span>Temps</span>
                            <span><?= get_field('recette_data')['total_time'] ?></span>
                        </div>
                        <div class="single-recette__data">
                            <span>Personnes</span>
                            <span><?= get_field('recette_data')['people'] ?></span>
                        </div>
                        <div class="single-recette__data">
                            <span>Facile</span>
                            <span><?= get_field('recette_data')['difficulty'] ?></span>
                        </div>
                        <div class="single-recette__data">
                            <span>Coût</span>
                            <span><?= get_field('recette_data')['price'] ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 col-lg-6 mt-5">
                    <span class="tag-btn tag-btn-big">Préparation</span>
                    <ul>
                        <?php for ($i = 0; $i < count(get_field('step')); $i++): ?>
                            <li class="step mt-3">
                                <div class="step__number"><?= $i + 1 ?></div>
                                <p class="step__text"><?= get_field('step')[$i]['step_text'] ?></p>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <div class="offset-lg-1 col-lg-5 ingredients">
                    <span class="tag-btn tag-btn-big">Ingrédients</span>
                    <ul>
                        <?php if (have_rows('ingredient')): ?>
                            <?php while (have_rows('ingredient')): the_row(); ?>
                                <li class="ingredient">
                                    <img src="<?php echo esc_url(get_sub_field('ingredient_image')['url']) ?>"
                                         class="ingredient__img"/>
                                    <div class="ingredient__text">
                                        <?php echo esc_html(get_sub_field('ingredient_text')) ?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <img class="ingredients__separator img-fluid"
                         src="<?= get_template_directory_uri() ?>/assets/img/SEPARATOR.png"/>
                    <span class="mt-3 tag-btn tag-btn-big">Ustenciles</span>
                    <ul>
                        <?php if (have_rows('utensil')): ?>
                            <?php while (have_rows('utensil')): the_row(); ?>
                                <li class="ingredient">
                                    <img src="<?php echo esc_url(get_sub_field('utensil_image')['url']) ?>"
                                         class="ingredient__img"/>
                                    <div class="ingredient__text">
                                        <?php echo esc_html(get_sub_field('utensil_text')) ?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>

            <!-- Ingrédients / ustenciles -->

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

                    <?php echo do_shortcode('[mc4wp_form id="13"]'); ?>
                </div>
            </div>

        </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
