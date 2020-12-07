<?php /* Template Name: Qui sommes nous */ ?>

<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <div class="text-button">
        <div class="container">
            <p class="text-button__text">
                <span>Qui sommes-nous ?</span> Gastrono’me est un dispositif, conçu et développé par Creative Agency,
                visant à promouvoir et valoriser la gastronomie fransaise.
            </p>
        </div>
    </div>
    <div class="footer-contact">
        <div class="about-us__img col-sm-12 col-md-6 col-lg-12 offset-lg-9">
            <h3>
                <img src="http://gastronome.infinityfreeapp.com/wp-content/uploads/2020/12/SEND.png">
                Restons en contact </h3>
            <div class="about-us__img col-sm-12 col-md-6 col-lg-12 offset-lg-0">
                <a href="mailto:creativeagency-studio@gmail.com">creativeagency-studio@gmail.com</a>
            </div>
        </div>
    </div>

    <div class="about-us__img col-sm-12 col-md-6 col-lg-12 offset-lg-1">
        <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/SEPARATOR.png"/>
    </div>

    <div class="half-text testimonials-header">
        <div class="container">
            <div class="half-text__content">
                <span>“Tout le monde peut cuisiner.”</span> Cette phrase culte d’un film d'animation
                n'en est pas moins vraie. Alors que la cuisine française est reconnue mondialement,
                beaucoup pensent encore que la cuisine gastronomique n’est exécutable que par de grands chefs. Mais la
                vérité est toute autre !
            </div>
            <div class="about-us__img col-sm-12 col-md-6 col-lg-12 offset-lg-9">
                <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/mosaique1.png"/>
            </div>
            <div class="half-text__content">
                <div class="about-us__img col-sm-12 col-md-6 col-lg-12 offset-lg-9">
                    À tous les amoureux de la bonne bouffe, aux créatifs,
                    aux traditionnels, à ceux qui reproduisent l’original et à ceux qui le sont, vous êtes la pièce
                    maîtresse qui constitue la grande gastronomie.
                </div>
            </div>
            <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/mosaique2.png"/>
            <div class="half-text__content">
                <span>Chaque petit plat définit la grande cuisine.</span>
                Parce que chaque petit plat définit la grande cuisine, tout le monde à le potentiel de créer quelque
                chose de bon et de beau qui régale et fait honneur à cet art.
                C’est dans ce sens que nous avons créé Gastrono’Me, le dispositif de valorisation de la gastronomie
                française vu au travers de la mosaïque composée de la cuisine de chacun.
            </div>
            <div class="about-us__img col-sm-12 col-md-6 col-lg-12 offset-lg-9">
                <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/mosaique3.png"/>
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

                    <?php echo do_shortcode('[mc4wp_form id="18"]'); ?>
                </div>
            </div>
        </div>
    </div>


<?php endwhile; endif; ?>


<?php get_footer(); ?>