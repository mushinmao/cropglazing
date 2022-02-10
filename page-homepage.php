<?php
/**
 * Template Name: Home page
 *
 * @package WordPress
 */

get_header();

$args  = array(
	'meta_key'   => 'page_as_product',
	'meta_value' => 'true',
	'post_status' => 'publish',
	'post_type'  => 'page',
	'sort_column' => 'menu_order',
	'sort_order' => 'ASC',
    'hierarchical' => false
);
$pages = get_pages( $args );
?>
<article class="page with-background">

    <?php if(!empty(get_the_post_thumbnail_url())) : ?>
        <section class="hero-block">
            <div class="hero-block__background"></div>
        </section>
    <?php endif ?>

    <section class="products">
        <div class="container">
            <div class="products__title title">
                <h1>Horticulture Glass Production</h1>
                <div class="title__underline"></div>
            </div>
            <div class="row justify-content-center <?= (count($pages)) > 4 ? 'justify-content-sm-start' : '' ?> align-items-stretch">
                <?php foreach ($pages as $page) :?>
                <div class="col-10 col-sm-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="products__item product">
                        <a class="link" href="<?=get_permalink($page->ID)?>">
                        <div class="product__image">
                            <img class="img-fluid" src="<?= wp_get_attachment_url( get_post_thumbnail_id($page->ID));?>" alt="<?=$page->post_title?>">
                        </div>
                        <div class="product__title">
                            <p><?=$page->post_title?></p>
                        </div>
                        </a>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <?php if(!empty(get_field('benefits_table'))) : ?>
        <section class="benefits">
            <div class="container">
                <div class="benefits__title title">
                    <h2>Benefits</h2>
                    <div class="title__underline"></div>
                </div>
                <div class="row">
                    <?php
                    $benefits = get_field('benefits_table');
                    ?>
                    <?php foreach ($benefits as $benefit) : ?>
                        <div class="col-12 col-sm-6">
                            <div class="benefits__item benefit">

                                <div class="benefit__title">
                                    <h3 class="d-flex">

                                        <?php if(!empty($benefit['icon'])) : ?>
                                            <span class="benefit__icon">
                                    <i class="bi <?=$benefit['icon']?>"></i>
                                </span>
                                        <?php endif ?>

                                        <?=$benefit['title']?>
                                    </h3>
                                </div>
                                <div class="benefit__description">
                                    <p> <?=$benefit['description']?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    <?php endif ?>
    
    <?php if(!empty(get_field('about_us'))) : ?>
    <section class="about-us">
        <div class="container">
            <div class="about-us__title title">
                <h2>About us</h2>
                <div class="title__underline"></div>
            </div>
            <div class="about-us__description">
                <p><?=get_field('about_us')?></p>
            </div>
        </div>
    </section>
    <?php endif ?>

    <?php
    $projects_page = get_page_by_path( 'projects' );

    if(!empty(get_field('projects')) and $projects_page->post_status != 'draft') :
        $projects = get_field('projects');
    ?>
        <section class="projects">
        <div class="container">
            <div class="projects__title title">
                <h2>Our projects</h2>
                <div class="title__underline"></div>
            </div>
            <div class="d-flex flex-wrap align-items-center">

                <?php foreach($projects as $project) : ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="projects__item project">
                        <div class="project__background">
                            <div class="project__image">
                                <img src="<?=$project['image']?>" alt="<?=$project['title']?>">
                            </div>
                            <div class="project__name">
                                <h3><a class="link" href="<?=$project['link']?>"><?=$project['title']?></a></h3>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach ?>

            </div>
        </div>
    </section>
    <?php endif ?>

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
get_footer()
?>