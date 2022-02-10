<?php
/**
 * Template Name: Contact us
 *
 * @package WordPress
 */

get_header();

$page = get_post();
$contacts = get_field('contacts');
?>

<article class="contacts page with-background">

    <?php if(!empty(get_the_post_thumbnail_url())) : ?>
        <section class="hero-block">
            <div class="hero-block__background"></div>
        </section>
    <?php endif ?>

    <section class="contacts__block">
        <div class="container">
            <div class="contacts__title title">
                <h1><?=$page->post_title?></h1>
                <div class="title__underline"></div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="contacts__info">
                        <div class="contacts__item contacts__address">
                            <span><i class="bi bi-geo-alt"></i> Address: <?=$contacts['address']?></span>
                        </div>
                        <div class="contacts__item contacts__phone">
                            <span><i class="bi bi-phone"></i> Phone: <a class="link" href="tel:<?=str_replace([' ', '(', ')', '-'], '', $contacts['phone'])?>"><?=$contacts['phone']?></a></span>
                        </div>
                        <div class="contacts__item contacts__email">
                            <span><i class="bi bi-envelope"></i> E-mail: <a class="link" href="mailto:<?=$contacts['e-mail']?>"><?=$contacts['e-mail']?></a></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="contacts__location">
                        <?php if(!empty($contacts['location'])) : ?>
                            <a href="<?=$contacts['location']?>" target="_blank">
                                <img src="<?=$contacts['location_image']?>" alt="Location">
                            </a>
                        <?php else : ?>
                            <img src="<?=$contacts['location_image']?>" alt="Location">
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="contact-form__title title">
                        <h2>Have questions?</h2>
                        <div class="title__underline"></div>
                    </div>
                    <div class="d-flex h-100 justify-content-center justify-content-lg-start">
                        <span class="contact-form__text text-center text-lg-start mb-5">Send us a message and we will definitely contact you</span>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="form">
                        <?=do_shortcode('[contact-form-7 id="43" title="Contact form 1"]')?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>

<?php
get_footer();
?>
