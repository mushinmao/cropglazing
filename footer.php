<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cropglazing
 */

$contacts = get_field('contacts', 210);
?>
</main> <!-- Closing main content tag -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-5">
                <div class="footer__logo">
                    <a href="<?=home_url()?>" class="custom-logo-link" rel="home" aria-current="page">
                        <img src="<?=get_template_directory_uri() . '/img/footer-logo.svg'?>" class="custom-logo" alt="Cropglazing">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-5">
                <div class="footer__company company">
                    <div class="company__title footer__title">
                        <p>Company</p>
                    </div>
                    <div class="company__links">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'            => 'footer-menu',
                                'container'       => false,
                                'items_wrap'      => '%3$s',
                                'walker'          => new Simple_Nav_Walker(),
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-5">
                <div class="tooter__contacts contacts">
                    <div class="contacts__title footer__title">
                        <p>Contact Us</p>
                    </div>
                    <div class="contacts__links">
                        <a href="tel:<?=str_replace([' ', '(', ')', '-'], '', $contacts['phone'])?>" class="footer__link link"><i class="bi bi-phone"></i>  <?=$contacts['phone']?></a>
                        <a href="mailto:<?=$contacts['e-mail']?>" class="footer__link link"><i class="bi bi-envelope"></i> <?=$contacts['e-mail']?></a>
                        <p>24/7</p>
<!--                        <div class="footer__socials">-->
<!--                            <a href="#" class="footer__link link"><i class="bi bi-facebook"></i></a>-->
<!--                            <a href="#" class="footer__link link"><i class="bi bi-instagram"></i></a>-->
<!--                            <a href="#" class="footer__link link"><i class="bi bi-youtube"></i></a>-->
<!--                            <a href="#" class="footer__link link"><i class="bi bi-twitter"></i></a>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="allrights">
            © 1999 — <?= date('Y')?> Cropglazing.com. All Rights Reserved.
        </div>
    </div>
</footer>
<button class="scroll-button"><i class="bi bi-arrow-up-short"></i></button>
<?php wp_footer(); ?>

</body>
</html>
