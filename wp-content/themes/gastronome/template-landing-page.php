<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="hero">
    <div class="container">
        <h1 class="hero__title">
            <?php the_field('header_title') ?>
        </h1>

        <?php
        $header_link = get_field('header_link');
        if ($header_link): ?>
            <a href="<?= esc_url($header_link['url']) ?>" class="hero__scroller">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/down_arrow.svg"/>
                <?= esc_html($header_link['title']) ?>
            </a>
        <?php endif; ?>
    </div>

    <div id="about-us" class="about-us-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <h2 class="about-us-section__title">
                        <?php the_field('about_us_title') ?>
                    </h2>
                    <div class="about-us-section__text">
                        <?php the_field('about_us_text') ?>
                    </div>
                </div>
                <div class="about-us-section__img col-sm-12 col-md-6 col-lg-5 offset-lg-2">
                    <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/mosaique.png"/>
                </div>
            </div>
        </div>
    </div>

    <div class="text-button recipes-header">
        <div class="container">
            <p class="text-button__text">
                <?php the_field('recipes_header_text') ?>
            </p>

            <div class="text-button__btn-container">
                <a href="<?= esc_url(get_field('recette_header_button')['url']) ?>" class="text-button__btn">
                    <?= esc_html(get_field('recette_header_button')['title']) ?>
                </a>
            </div>
        </div>
    </div>

    <div class="recettes">
        <div class="container">
            <h3 class="recettes__title">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/heart.svg"/>
                Vos meilleurs créations
            </h3>
            <div class="recettes__grid recettes-slider-1 mb-5">
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Blanquette_De_Veau.jpg"
                         alt="Recette"
                    />
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Plat</span>
                            <span class="recette__tag">Classique</span>
                        </div>

                        <h4 class="recette__title">Blanquette de Veau</h4>
                        <p class="recette__desc">De la viande, de la sauce, des petits légumes et du riz. Que demande
                            le peuple ?
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Boeuf_Bourguignon.jpg"
                         alt="Recette"
                    />
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Plat</span>
                            <span class="recette__tag">Classique</span>
                        </div>

                        <h4 class="recette__title">Boeuf Bourguignon</h4>
                        <p class="recette__desc">De la viande mijotée au vin et des petits légumes. Probablement le
                            plat qui représente le mieux la cuisine française !
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Bouchee_A_La_Reine.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Plat</span>
                            <span class="recette__tag">Classique</span>
                        </div>

                        <h4 class="recette__title">Bouchée à la Reine</h4>
                        <p class="recette__desc">Un hors d’oeuvre chaud constitué d’un vol-au-vent et de sa garniture
                            forestière. Une recette classique de l’automne !
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Bouillabaisse.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Plat</span>
                            <span class="recette__tag">Classique</span>
                        </div>

                        <h4 class="recette__title">Bouillabaisse</h4>
                        <p class="recette__desc">Une soupe de poisson aux couleurs de la provence.
                            Parfait pour les amoureux des produits de la mer, et du vieux port !
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Cassoulet.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Plat</span>
                            <span class="recette__tag">Classique</span>
                        </div>

                        <h4 class="recette__title">Cassoulet</h4>
                        <p class="recette__desc">Icone de la gastronomie française originaire du Languedoc.
                            À base de haricots et de bonne chère, pour tous les amoureux du terroir.
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Crepes_Aux_Fraises.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Désert</span>
                            <span class="recette__tag">Facile</span>
                        </div>

                        <h4 class="recette__title">Crêpe aux fraises</h4>
                        <p class="recette__desc">Désert classique venue des plaines de la Bretagne armoriquaine,
                            ici sublimée par de belles fraises apportant toute leur fraîcheur.
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Omelette_Norvegienne.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Désert</span>
                        </div>

                        <h4 class="recette__title">Omelette Norvégienne</h4>
                        <p class="recette__desc">Malgré un nom trompeur, ce dessert composé de glace et de meringue sur
                            une génoise est né au Grand Hôtel de Paris lors de l’Exposition universelle de 1867.
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Opera.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Désert</span>
                            <span class="recette__tag">Classique</span>
                            <span class="recette__tag">Patisserie</span>
                        </div>

                        <h4 class="recette__title">Opéra</h4>
                        <p class="recette__desc">Nommé ainsi à cause de sa ressemblance avec la scène de l’Opéra
                            Garnier, cette suculante patisserie au chocolat et au café s’est exportée dans le monde
                            entier.
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Paris_Brest.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Désert</span>
                            <span class="recette__tag">Classique</span>
                            <span class="recette__tag">Patisserie</span>
                        </div>

                        <h4 class="recette__title">Paris-Brest</h4>
                        <p class="recette__desc">De la pâte à choux fourrée avec de la crème pralinée dans une
                            patisserie en forme de roue de vélo, en clin d’oeil à son invention !
                        </p>
                    </div>
                </div>
            </div>
            <div class="recettes__grid recettes-slider-2 mb-5">
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Croissant.jpg"
                         alt="Recette"
                    />
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Patisserie</span>
                            <span class="recette__tag">Classique</span>
                        </div>

                        <h4 class="recette__title">Croissant</h4>
                        <p class="recette__desc">La viennoiserie la plus connue du monde viens bien de l’hexagone !
                            Au réveil ou au gouté, tout le monde l’a validé !
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Croque_Monsieur.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Plat</span>
                            <span class="recette__tag">Classique</span>
                            <span class="recette__tag">Facile</span>
                        </div>

                        <h4 class="recette__title">Croque Monsieur</h4>
                        <p class="recette__desc">Du bon pain toasté avec du fromage et du jambon à manger sur le pouce.
                            C’est ça la cuisine qu’on aime !
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Feuilletes_Aux_Fromage.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Apéritif</span>
                            <span class="recette__tag">Entrée</span>
                            <span class="recette__tag">Facile</span>
                        </div>

                        <h4 class="recette__title">Feuilleté au fromage</h4>
                        <p class="recette__desc">Des fine torsades de pâte feuilletée et gruyère a grignoter en
                            attendant le repas ou en appéritif, c’est aussi de la cusine !
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Fondu.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Plat</span>
                            <span class="recette__tag">Facile</span>
                        </div>

                        <h4 class="recette__title">Fondue</h4>
                        <p class="recette__desc">Du fromage fondu sur du pain à manger entre ami lors des longues
                            soirées d’hiver. Un avant-goût du paradis !
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Kouign_Amann.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Désert</span>
                        </div>

                        <h4 class="recette__title">Kouign-amann</h4>
                        <p class="recette__desc">Pâtisserie emblématique de la Bretagne majoritairement composé de
                            beurre et de sucre. Le gateau parfait donc.
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Pate_En_Croute.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Apéritif</span>
                            <span class="recette__tag">Entrée</span>
                        </div>

                        <h4 class="recette__title">Paté en Croute</h4>
                        <p class="recette__desc">La divine fusion entre la charcuterie et la patisserie !
                            En appéritif ou en entrée froide, personne n’y resiste.
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Poele_De_Legumes.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Plat</span>
                            <span class="recette__tag">Facile</span>
                        </div>

                        <h4 class="recette__title">Poêlée de Légumes</h4>
                        <p class="recette__desc">Parce qu’un bon plat n’a pas besoin de viande ou de poisson,
                            voici une belle asiette de légume aux saveurs de la saison !
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Puree_A_L_Ancienne.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Plat</span>
                            <span class="recette__tag">Classique</span>
                            <span class="recette__tag">Facile</span>
                        </div>

                        <h4 class="recette__title">Hachis Parmentier</h4>
                        <p class="recette__desc">Simple et rapide. A base de purée de pommes de terre et de viande
                            de boeuf hachée. Un classique qui ravira toute la famille.
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img"
                         src="<?= get_template_directory_uri() ?>/assets/img/500x500/Tartare_De_Boeuf.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Plat</span>
                            <span class="recette__tag">Facile</span>
                        </div>

                        <h4 class="recette__title">Steak Tartare</h4>
                        <p class="recette__desc">Un plat de frais et facile pour les amoureux de viande rouge.
                            Accompagné de croutons ou de salade , saveurs garanties !
                        </p>
                    </div>
                </div>
            </div>

            <!-- <div class="slider-outer">
                <div class="slider-inner">
                    <div class="slide">
                        <div class="recette">
                            <img class="recette__img" src="<? /*= get_template_directory_uri() */ ?>/assets/img/500x500/cassoulet.jpg"
                                 alt="Recette"
                            />
                            <div class="recette__content">
                                <div class="recette__tags">
                                    <span class="recette__tag">Revisite</span>
                                    <span class="recette__tag">Classique</span>
                                </div>

                                <h4 class="recette__title">Tarte au citron meringuée</h4>
                                <p class="recette__desc">Découvrez une revisite fraiche et audacieuse de la fameuse
                                    tarte au citron meringuée par un amateur de bonnes choses.
                                </p>
                                <a href="#" class="recette__link">
                                    Découvrir la recette
                                    <img src="<? /*= get_template_directory_uri() */ ?>/assets/icons/arrow-right.svg"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="recette">
                            <img class="recette__img" src="<? /*= get_template_directory_uri() */ ?>/assets/img/recette-2.png"
                                 alt="Recette"/>
                            <div class="recette__content">
                                <div class="recette__tags">
                                    <span class="recette__tag">Revisite</span>
                                    <span class="recette__tag">Classique</span>
                                </div>

                                <h4 class="recette__title">Tarte au citron meringuée</h4>
                                <p class="recette__desc">Découvrez une revisite fraiche et audacieuse de la fameuse
                                    tarte au citron meringuée par un amateur de bonnes choses.
                                </p>
                                <a href="#" class="recette__link">
                                    Découvrir la recette
                                    <img src="<? /*= get_template_directory_uri() */ ?>/assets/icons/arrow-right.svg"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="recette">
                        <img class="recette__img" src="<? /*= get_template_directory_uri() */ ?>/assets/img/recette-3.png"
                             alt="Recette"/>
                        <div class="recette__content">
                            <div class="recette__tags">
                                <span class="recette__tag">Revisite</span>
                                <span class="recette__tag">Classique</span>
                            </div>

                            <h4 class="recette__title">Tarte au citron meringuée</h4>
                            <p class="recette__desc">Découvrez une revisite fraiche et audacieuse de la fameuse
                                tarte au citron meringuée par un amateur de bonnes choses.
                            </p>
                            <a href="#" class="recette__link">
                                Découvrir la recette
                                <img src="<? /*= get_template_directory_uri() */ ?>/assets/icons/arrow-right.svg"/>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>

            </div>-->
        </div>
    </div>

    <div class="text-button recipes-footer">
        <div class="container">
            <p class="text-button__text">
                <?php the_field('recipes_footer_text') ?>
            </p>

            <div class="text-button__btn-container">
                <a href="<?= esc_url(get_field('recipes_footer_button')['url']) ?>" class="text-button__btn">
                    <?= esc_html(get_field('recipes_footer_button')['title']) ?>
                </a>
            </div>
        </div>
    </div>

    <div class="half-text testimonials-header">
        <div class="container">
            <div class="half-text__content">
                <?php the_field('testimonials_header_text') ?>
            </div>
        </div>
    </div>

    <div class="contained-image">
        <div class="container">
            <div class="contained-image__img">
                <img class="img-fluid w-100" src="<?= get_field('testimonials_header_image')['url'] ?>"/>
            </div>
        </div>
    </div>

    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 offset-md-1 col-md-4">
                    <?php if (have_rows('testimonial_1')): ?>
                        <?php while (have_rows('testimonial_1')) : the_row(); ?>
                            <div class="testimonial">
                                <h3 class="testimonial__author"><?php the_sub_field('testimonial_author') ?></h3>
                                <p class="testimonial__text"><?php the_sub_field('testimonial_text') ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-6 offset-md-2 col-md-4">
                    <?php if (have_rows('testimonial_2')): ?>
                        <?php while (have_rows('testimonial_2')) : the_row(); ?>
                            <div class="testimonial">
                                <h3 class="testimonial__author"><?php the_sub_field('testimonial_author') ?></h3>
                                <p class="testimonial__text"><?php the_sub_field('testimonial_text') ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 offset-md-1 col-md-4">
                    <?php if (have_rows('testimonial_3')): ?>
                        <?php while (have_rows('testimonial_3')) : the_row(); ?>
                            <div class="testimonial">
                                <h3 class="testimonial__author"><?php the_sub_field('testimonial_author') ?></h3>
                                <p class="testimonial__text"><?php the_sub_field('testimonial_text') ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-6 offset-md-2 col-md-4">
                    <?php if (have_rows('testimonial_4')): ?>
                        <?php while (have_rows('testimonial_4')) : the_row(); ?>
                            <div class="testimonial">
                                <h3 class="testimonial__author"><?php the_sub_field('testimonial_author') ?></h3>
                                <p class="testimonial__text"><?php the_sub_field('testimonial_text') ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
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

                    <?php echo do_shortcode('[mc4wp_form id="13"]'); ?>
                </div>
            </div>
        </div>
    </div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>