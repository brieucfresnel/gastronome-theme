<?php /* Template Name: Presse */ ?>

<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="page-presse">
        <div class="container">
            <div class="container__mosaique">
                <img src="<?= get_template_directory_uri() ?>/assets/img/mosaique_presse.jpg"/>
            </div>
            <div class="container__txt">
                <h1><span>Gastrono’Me</span>
                    La mosaïque composée de la
                    cuisine de chacun !
                </h1>
                - Une campagne réalisé à l’attention des particuliers,
                <br>
                - En parlant de la gastronomie française,
                <br>
                - A partir du 30 novembre 2020,
                <br>
                - En faisant une campagne sur les réseaux sociaux, sur un site web et à
                l’aide de vidéos,
                <br>
                - Et tout cela afin de valoriser la gastronomie française sur le territoire
                français.
                <br>
                <br>
                <br>
                Nous avons fièrement réalisé une campagne pour valoriser la gastronomie
                française, principalement à l’aide des réseaux sociaux ainsi que trois
                teasers de 15 secondes et d’une vidéo d’une minute.
                Cette campagne nous a permis d’en apprendre plus sur les goûts et
                connaissances de chacun, que nous soyons petit ou grand, professionnel
                ou amateur.
                En effet, nous avons dû analyser les habitudes culturelles d’une cible,
                comprendre comment elle se comporte durant plusieurs semaines et à
                différentes échelles.
                Notre campagne a pu être déployée et toucher un grand nombre
                à différentes échelles, ce qui nous a permis de remplir au mieux nos
                objectifs.
                La réussite de cette campagne a marqué notre équipe et a conduit notre
                agence à grandir et à se développer davantage.
            </div>
        </div>
    </div>
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



