<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>
    <div class="hero">
        <div class="container">
            <p class="hero__title">
                A tous les amoureux de la bonne bouffe, aux créatifs, aux traditionnels, à ceux qui reproduisent
                l'original et à ceux qui le sont, vous êtes la pièce maîtresse qui constitue la grande cuisine.
            </p>
            <a href="#" class="hero__scroller">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/down_arrow.svg"/>
                Découvrir
            </a>
            <p class="hero__text">
                Vous pensez que vous n’arriverez jamais à faire monter des blancs en neige ou que la gastronomie n’est
                pratiquée que par les chefs culinaires ?
            </p>
            <p class="hero__text">
                Détrompez-vous. La gastronomie est accessible à tous. Il ne vous manque qu’un coup de pouce.
            </p>
        </div>
    </div>

    <div class="section-image">
        <img class="img-fluid w-100" src="<?= get_template_directory_uri() ?>/assets/img/section-image-bg-1.png"/>
    </div>

    <div class="text-button">
        <div class="container">
            <p class="text-button__text">
                <span>Vous allez voyager !</span> Redécouvrez les succulantes recettes de grand-mère ou les
                petites
                innovations culinaire à vous en mettre plein les papilles.
            </p>

            <div class="text-button__btn-container">
                <a href="#" class="text-button__btn">Voir toutes les recettes</a>
            </div>
        </div>
    </div>

    <div class="half-text">
        <div class="container">
            <div class="half-text__content">
                <span>Recettes.</span>
                Conçues par de grands chefs mais aussi par des amateurs, ces recettes vont vous aider à faire bien et
                beau, simplement, avec des produits accessibles de qualité.
            </div>
        </div>
    </div>

    <div class="recettes">
        <div class="container">
            <h3 class="recettes__title">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/heart.svg"/>
                La sélection de la semaine
            </h3>
            <div class="recettes__grid">
                <div class="recette">
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/recette-1.png"
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
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/arrow-right.svg"/>
                        </a>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/recette-2.png"
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
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/arrow-right.svg"/>
                        </a>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/recette-3.png"
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
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/arrow-right.svg"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-image">
        <img class="img-fluid w-100" src="<?= get_template_directory_uri() ?>/assets/img/section-image-bg-2.png"/>
    </div>

    <div class="text-button">
        <div class="container">
            <p class="text-button__text">
                <span>Vous doutiez de votre talent ?</span> Nous avons tous déjà cuisiné de manière gastronomique. Ou,
                du moins, essayer. C’est le moment d’en prendre conscience.
            </p>

            <div class="voyage-btn-container">
                <a href="#" class="text-button__btn">Voir toutes les recettes</a>
            </div>
        </div>
    </div>

    <div class="half-text">
        <div class="container">
            <div class="half-text__content">
                <span>Témoignages.</span> Découvrez les fabuleuses histoires d’Hanaé, de Théophile, de Julien, de
                Constance et de bien d’autres qui ont trouvés leur passion dans la cuisine.
            </div>
        </div>
    </div>

    <div class="contained-image">
        <div class="container">
            <div class="contained-image__img">
                <img class="img-fluid w-100" src="<?= get_template_directory_uri() ?>/assets/img/temoignages-img.png"/>
            </div>
        </div>
    </div>

    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 offset-md-1 col-md-4">
                    <div class="testimonial">
                        <h3 class="testimonial__author">Hanaé</h3>
                        <p class="testimonial__text">J’ai toujours été passionné de cuisine mais je n’osais pas montrer
                            mes plats car je ne les trouvais pas à la hauteur. Gastrono’me est là pour nous prouver le
                            contraire.
                        </p>
                        <a href="#" class="testimonial__link">
                            Lire la suite
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/arrow-right.svg"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 offset-md-2 col-md-4">
                    <div class="testimonial">
                        <h3 class="testimonial__author">Théophile</h3>
                        <p class="testimonial__text">J’ai toujours eu un manque de motivation vis à vis de la cuisine
                            car je la trouvais compliquée. Mais grace à Gastrono’me je me suis rendu compte que c’est
                            finalement accessible. </p>
                        <a href="#" class="testimonial__link">
                            Lire la suite
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/arrow-right.svg"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 offset-md-1 col-md-4">
                    <div class="testimonial">
                        <h3 class="testimonial__author">Julien</h3>
                        <p class="testimonial__text">J’adore cuisiner pour mes amis, je suis le cuistot de la bande. Le
                            projet Gastrono’me est génial, j’apprends de nombreuses choses et me perfectionne. </p>
                        <a href="#" class="testimonial__link">
                            Lire la suite
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/arrow-right.svg"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 offset-md-2 col-md-4">
                    <div class="testimonial">
                        <h3 class="testimonial__author"> Constance</h3>
                        <p class="testimonial__text">La gastronomie me semblait assez fermée et peu accessible.
                            Maintenant, avec Gastrono'me, je peux enfin découvrir la cuisine et épater ma famille. </p>
                        <a href="#" class="testimonial__link">
                            Lire la suite
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/arrow-right.svg"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-image">
        <img class="img-fluid w-100" src="<?= get_template_directory_uri() ?>/assets/img/section-image-bg-3.png"/>
    </div>

    <div class="text-button">
        <div class="container">
            <p class="text-button__text">
                <span>Articles.</span> Des papiers qui parlent concretement de
                notre cuisine, son patrimoine et de cet art qu’est la gastronomie. Pour tous.
            </p>

            <div class="text-button__btn-container">
                <a href="#" class="text-button__btn">Voir toutes les recettes</a>
            </div>
        </div>
    </div>

    <div class="follow-us">
        <div class="container">
            <div class="socials">
                <div class="half-text">
                    <div class="half-text__content">
                        <span>On touche avec les yeux !</span>
                        Explorez le merveilleux monde de la gastronomie au travers de posts, stories sur nos médias
                        sociaux.
                        Retrouvez-nous sur Instagram, Facebook, Twitter et
                        Pinterest.
                    </div>
                </div>
            </div>
            <div class="container">
                <h3 class="socials__title">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/heart.svg"/>
                    Nous suivre
                </h3>
                <div class="socials__grid">
                    <div class="socials">
                        <a href="https://www.instagram.com/gastronome_fr/">
                            <img class="socials__img" src="<?= get_template_directory_uri() ?>/assets/img/insta.png"
                                 alt="socials"/>
                        </a>
                        <a href="https://www.facebook.com/GastronoMefr/">
                            <img class="socials__img" src="<?= get_template_directory_uri() ?>/assets/img/facebook.png"
                                 alt="socials"/>
                        </a>
                        <a href="https://twitter.com/GastronoMe_fr">
                            <img class="socials__img" src="<?= get_template_directory_uri() ?>/assets/img/twitter.png"
                                 alt="socials"/>
                        </a>
                        <a href="https://www.pinterest.fr/GastronoMe_fr/">
                            <img class="socials__img" src="<?= get_template_directory_uri() ?>/assets/img/pinterest.png"
                                 alt="socials"/>
                        </a>
                    </div>
                </div>
                <div class="presse">
                    <div class="presse__btn-container">
                        <h3>Espace presse</h3>
                        <a href="#">
                            <img class="presse-btn" src="<?= get_template_directory_uri() ?>/assets/img/fleche.png"
                                 alt="socials"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>