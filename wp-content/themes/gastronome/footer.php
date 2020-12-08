<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-9 order-2 order-lg-1 footer-contact">
                <div class="socials">
                    <div class="half-text">
                        <div class="half-text__content">
                            <?php the_field('footer_text', 'option') ?>
                        </div>
                    </div>

                    <div class="socials__grid">
                        <?php if (have_rows('social_icons', 'option')): ?>
                            <?php while (have_rows('social_icons', 'option')): the_row(); ?>
                                <a class="socials__link" href="<?php the_sub_field('footer_social_link') ?>">
                                    <img src="<?php echo get_sub_field('footer_social_icon')['url'] ?>" alt="socials"
                                    />
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer-contact">
                            <h3>
                                <img src="<?php echo get_field('contact_icon', 'option')['url'] ?>"/>
                                <?php the_field('contact_text', 'option') ?>
                            </h3>
                            <a href="mailto:<?php the_field('contact_mail', 'option') ?>"><?php the_field('contact_mail', 'option') ?></a>
                        </div>
                        <div class="footer-copyright">
                            © 2020 Gastrono'me | Tous droits réservés
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-lg-3 order-1 order-lg-2">
                <div class="footer-links">
                    <?php if (have_rows('footer_links', 'option')): while (have_rows('footer_links', 'option')): the_row(); ?>
                        <div class="footer-link">
                            <a href="<?= esc_url(get_sub_field('footer_link')) ?>">
                                <?= esc_html(get_sub_field('footer_link')['title']) ?>
                            </a>
                            <img src="<?php echo get_sub_field('footer_link_icon')['url']; ?>" alt="icone" class="footer-link-icon">
                        </div>

                    <?php endwhile; endif; ?>
                </div>
            </div>

        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>