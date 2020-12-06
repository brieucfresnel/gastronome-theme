<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <div class="hero">
        <div class="container">
            <h1 class="hero__title">
                Chaque petit plat définit la grande cuisine.
            </h1>
            <a href="#about-us" class="hero__scroller">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/down_arrow.svg"/>
                Découvrir
            </a>
        </div>
    </div>

    <div id="about-us" class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6 col-lg-5">
                    <h2 class="about-us__title">
                        La gastronomie française est une mosaïque composée de la cuisine de chacun
                    </h2>
                    <div class="about-us__text">
                        À tous les amoureux de la bonne bouffe, aux créatifs, aux traditionnels, à ceux qui reproduisent
                        l'original et à ceux qui le sont, vous êtes la pièce maîtresse qui constitue la grande cuisine
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-5 offset-lg-2">
                    <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/mosaique.png"/>
                </div>
            </div>
        </div>
    </div>

    <div class="text-button">
        <div class="container">
            <p class="text-button__text">
                <span>Des petits plats.</span> Redécouvrez les succulantes recettes de grand-mère
                ou les petites innovations culinaire à vous en mettre plein les papilles.
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
                Vos meilleurs créations
            </h3>
            <div class="recettes__grid recettes-slider-1 mb-5">
                <div class="recette">
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Blanquette_De_Veau.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Boeuf_Bourguignon.jpg"
                         alt="Recette"/>
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Bouchee_A_La_Reine.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Bouillabaisse.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Cassoulet.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Crepes_Aux_Fraises.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Omelette_Norvegienne.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Opera.jpg"
                         alt="Recette"/>
                    <div class="recette__content">
                        <div class="recette__tags">
                            <span class="recette__tag">Désert</span>
                            <span class="recette__tag">Classique</span>
                            <span class="recette__tag">Patisserie</span>
                        </div>

                        <h4 class="recette__title">Opéra</h4>
                        <p class="recette__desc">Nommé ainsi à cause de sa ressemblance avec la scène de l’Opéra
                            Garnier, cette suculante patisserie au chocolat et au café s’est exportée dans le monde entier.
                        </p>
                    </div>
                </div>
                <div class="recette">
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Paris_Brest.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Croissant.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Croque_Monsieur.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Feuilletes_Aux_Fromage.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Fondu.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Kouign_Amann.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Pate_En_Croute.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Poele_De_Legumes.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Puree_A_L_Ancienne.jpg"
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
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/500x500/Tartare_De_Boeuf.jpg"
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

    <div class="text-button">
        <div class="container">
            <p class="text-button__text">
                <span>Vous doutiez de votre talent ?</span> Nous avons tous déjà cuisiner de façon
                gastronomique. Ou du moins essayer. C’est le moment d’en prendre conscience.
            </p>

            <div class="text-button__btn-container">
                <a href="#" class="text-button__btn">S'inscrire à la newsletter</a>
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

    <!-- Unused for now.
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
	-->

    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="newsletter-form">
                    <div class="newsletter-form__header">
                        <img class="newsletter-form__icon"
                             src="<?= get_template_directory_uri() ?>/assets/icons/icon-gift.svg"/>
                        <h3 class="newsletter-form__title">Nous vous avons confectionné un cadeau.</h3>
                        <p class="newsletter-form__text">
                            Recevez régulièrement par mail des recettes, article et autres trucs et astuces. Parce que
                            vous
                            en avez le potentiel, nous souhaitons vous aider dans ce voyage culinaire palpitant.
                        </p>
                    </div>

					<?php echo do_shortcode( '[mc4wp_form id="18"]' ); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="follow-us">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <div class="socials">
                        <div class="half-text">
                            <div class="half-text__content">
                                <span>On touche avec les yeux !</span>
                                Explorez le merveilleux monde de la gastronomie au travers de posts, stories sur nos
                                médias
                                sociaux.
                                Retrouvez-nous sur Instagram, Facebook, Twitter et
                                Pinterest.
                            </div>
                        </div>

                        <h3 class="socials__title">
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/heart.svg"/>
                            Nous suivre
                        </h3>

                        <div class="socials__grid">
                            <a href="https://www.instagram.com/gastronome_fr/">
                                <img class="socials__img-insta"
                                     src="<?= get_template_directory_uri() ?>/assets/icons/insta.png"
                                     alt="socials"/>
                            </a>
                            <a href="https://www.facebook.com/GastronoMefr/">
                                <img class="socials__img-facebook"
                                     src="<?= get_template_directory_uri() ?>/assets/icons/facebook.png"
                                     alt="socials"/>
                            </a>
                            <a href="https://twitter.com/GastronoMe_fr">
                                <img class="socials__img-twitter"
                                     src="<?= get_template_directory_uri() ?>/assets/icons/twitter.png"
                                     alt="socials"/>
                            </a>
                            <a href="https://www.pinterest.fr/GastronoMe_fr/">
                                <img class="socials__img-pinterest"
                                     src="<?= get_template_directory_uri() ?>/assets/icons/pinterest.png"
                                     alt="socials"/>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 offset-md-2">
                    <div class="presse">
                        <div class="presse__btn-container">
                            <h3>Espace presse</h3>
                            <a href="#">
                                <img class="presse-btn"
                                     src="<?= get_template_directory_uri() ?>/assets/icons/fleche.png"
                                     alt="socials"/>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <h3 class="socials__title">
                <img src="<?= get_template_directory_uri() ?>/assets/img/send.png"/>
                Nous contacter
            </h3>
            <a href="mailto:creativeagency@gmail.com">Creativeagency@gmail.com </a>
            <br>
            <br>
        </div>
    </div>
<?php endwhile; endif; ?>


<?php get_footer(); ?>