<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-9 order-2 order-lg-1 footer-contact">
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
                    <div class="footer-bottom">
                        <div class="footer-contact">
                            <h3>
                                <img src="<?php the_field('contact_icon') ?>"/>
				                <?php the_field('contact_text') ?>
                            </h3>
                            <a href="mailto:<?php the_field('contact_mail') ?>"><?php the_field('contact_mail') ?></a>
                        </div>
                        <div class="footer-copyright">
                            © 2020 Gastrono'me | Tous droits réservés
                        </div>
                    </div>
                </div>

            </div>
			<?php if ( have_rows( 'footer_links' ) ): while ( have_rows( 'footer_links' ) ): the_row(); ?>
                <div class="col-xs-12 col-lg-3 order-1 order-lg-2">
                    <div class="footer-links">
                        <div class="footer-link">
                            <a href="<?= esc_url( get_sub_field( 'footer_link_1' )['url'] ) ?>">
								<?= esc_html( get_sub_field( 'footer_link_1' )['title'] ) ?>
                            </a>
                            <img src="<?php the_sub_field('footer_icon_1'); ?>" alt="Icone" class="footer-link-icon">
                        </div>
                        <div class="footer-link">
                            <a href="<?= esc_url( get_sub_field( 'footer_link_2' )['url'] ) ?>">
								<?= esc_html( get_sub_field( 'footer_link_2' )['title'] ) ?>
                            </a>
                            <img src="<?php the_sub_field('footer_icon_2'); ?>" alt="Icone" class="footer-link-icon">
                        </div>
                        <div class="footer-link">
                            <a href="<?= esc_url( get_sub_field( 'footer_link_3' )['url'] ) ?>">
								<?= esc_html( get_sub_field( 'footer_link_3' )['title'] ) ?>
                            </a>
                            <img src="<?php the_sub_field('footer_icon_3'); ?>" alt="Icone" class="footer-link-icon">
                        </div>
                    </div>

                </div>
			<?php endwhile; endif; ?>
        </div>

    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>