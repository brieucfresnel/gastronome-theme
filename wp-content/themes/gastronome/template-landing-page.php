<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <div class="hero">
    <div class="container">
        <h1 class="hero__title">
			<?php the_field( 'header_title' ) ?>
        </h1>

		<?php
		$header_link = get_field( 'header_link' );
		if ( $header_link ): ?>
            <a href="<?= esc_url( $header_link['url'] ) ?>" class="hero__scroller">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/down_arrow.svg"/>
				<?= esc_html( $header_link['title'] ) ?>
            </a>
		<?php endif; ?>
    </div>

    <div id="about-us" class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6 col-lg-5">
                    <h2 class="about-us__title">
						<?php the_field( 'about_us_title' ) ?>
                    </h2>
                    <div class="about-us__text">
						<?php the_field( 'about_us_text' ) ?>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-5 offset-lg-2">
                    <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/img/mosaique.png"/>
                </div>
            </div>
        </div>
    </div>

    <div class="text-button recipes-header">
        <div class="container">
            <p class="text-button__text">
				<?php the_field( 'recipes_header_text' ) ?>
            </p>

            <div class="text-button__btn-container">
                <a href="<?= esc_url( get_field( 'recette_header_button' )['url'] ) ?>" class="text-button__btn">
					<?= esc_html( get_field( 'recette_header_button' )['title'] ) ?>
                </a>
            </div>
        </div>
    </div>

    <!--    <div class="half-text">
			<div class="container">
				<div class="half-text__content">
					<span>Recettes.</span>
					Conçues par de grands chefs mais aussi par des amateurs, ces recettes vont vous aider à faire bien et
					beau, simplement, avec des produits accessibles de qualité.
				</div>
			</div>
		</div>-->

    <div class="recettes">
        <div class="container">
            <h3 class="recettes__title">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/heart.svg"/>
                Vos meilleurs créations
            </h3>
            <div class="recettes__grid recettes-slider-1 mb-5">
                <div class="recette">
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/recette-4.jpg"
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
                    </div>
                </div>
            </div>
            <div class="recettes__grid recettes-slider-2 mb-5">
                <div class="recette">
                    <img class="recette__img" src="<?= get_template_directory_uri() ?>/assets/img/recette-4.jpg"
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
                    </div>
                </div>
            </div>

            <!-- <div class="slider-outer">
                <div class="slider-inner">
                    <div class="slide">
                        <div class="recette">
                            <img class="recette__img" src="<? /*= get_template_directory_uri() */ ?>/assets/img/recette-4.jpg"
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

    <div class="text-button recipes-footer">
        <div class="container">
            <p class="text-button__text">
				<?php the_field( 'recipes_footer_text' ) ?>
            </p>

            <div class="text-button__btn-container">
                <a href="<?= esc_url( get_field( 'recipes_footer_button' )['url'] ) ?>" class="text-button__btn">
					<?= esc_html( get_field( 'recipes_footer_button' )['title'] ) ?>
                </a>
            </div>
        </div>
    </div>

    <div class="half-text">
        <div class="container">
            <div class="half-text__content">
				<?php the_field( 'testimonials_header_text' ) ?>
            </div>
        </div>
    </div>

    <div class="contained-image">
        <div class="container">
            <div class="contained-image__img">
                <img class="img-fluid w-100" src="<?= get_field( 'testimonials_header_image' )['url'] ?>"/>
            </div>
        </div>
    </div>

    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 offset-md-1 col-md-4">
					<?php if ( have_rows( 'testimonial_1' ) ): ?>
						<?php while ( have_rows( 'testimonial_1' ) ) : the_row(); ?>
                            <div class="testimonial">
                                <h3 class="testimonial__author"><?php the_sub_field( 'testimonial_author' ) ?></h3>
                                <p class="testimonial__text"><?php the_sub_field( 'testimonial_text' ) ?></p>
                            </div>
						<?php endwhile; ?>
					<?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-6 offset-md-2 col-md-4">
					<?php if ( have_rows( 'testimonial_2' ) ): ?>
						<?php while ( have_rows( 'testimonial_2' ) ) : the_row(); ?>
                            <div class="testimonial">
                                <h3 class="testimonial__author"><?php the_sub_field( 'testimonial_author' ) ?></h3>
                                <p class="testimonial__text"><?php the_sub_field( 'testimonial_text' ) ?></p>
                            </div>
						<?php endwhile; ?>
					<?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 offset-md-1 col-md-4">
					<?php if ( have_rows( 'testimonial_3' ) ): ?>
						<?php while ( have_rows( 'testimonial_3' ) ) : the_row(); ?>
                            <div class="testimonial">
                                <h3 class="testimonial__author"><?php the_sub_field( 'testimonial_author' ) ?></h3>
                                <p class="testimonial__text"><?php the_sub_field( 'testimonial_text' ) ?></p>
                            </div>
						<?php endwhile; ?>
					<?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-6 offset-md-2 col-md-4">
					<?php if ( have_rows( 'testimonial_4' ) ): ?>
						<?php while ( have_rows( 'testimonial_4' ) ) : the_row(); ?>
                            <div class="testimonial">
                                <h3 class="testimonial__author"><?php the_sub_field( 'testimonial_author' ) ?></h3>
                                <p class="testimonial__text"><?php the_sub_field( 'testimonial_text' ) ?></p>
                            </div>
						<?php endwhile; ?>
					<?php endif; ?>
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
                        <h3 class="newsletter-form__title"><?php the_field( 'newsletter_title' ) ?></h3>
                        <p class="newsletter-form__text">
							<?php the_field( 'newsletter_text' ) ?>
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
								<?php the_field( 'footer_text' ) ?>
                            </div>
                        </div>

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
				<?php if ( have_rows( 'footer_links' ) ): while ( have_rows( 'footer_links' ) ): the_row(); ?>
                    <div class="col-xs-12 col-sm-4 offset-md-2">
                        <div class="footer-links">
                            <div class="footer-link-container">
                                <a class="footer-link" href="<?= esc_url( get_sub_field( 'footer_link_1' )['url'] ) ?>"
                                   class="footer-link">
									<?= esc_html( get_sub_field( 'footer_link_1' )['title'] ) ?>
                                </a>
                            </div>
                            <div class="footer-link-container">
                                <a class="footer-link" href="<?= esc_url( get_sub_field( 'footer_link_2' )['url'] ) ?>"
                                   class="footer-link">
									<?= esc_html( get_sub_field( 'footer_link_2' )['title'] ) ?>
                                </a>
                            </div>
                            <div class="footer-link-container">
                                <a class="footer-link" href="<?= esc_url( get_sub_field( 'footer_link_3' )['url'] ) ?>"
                                   class="footer-link">
									<?= esc_html( get_sub_field( 'footer_link_3' )['title'] ) ?>
                                </a>
                            </div>
                        </div>

                    </div>
				<?php endwhile; endif; ?>
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