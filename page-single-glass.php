<?php
/**
 * Template Name: Horticulture glass child
 *
 * @package WordPress
 */

get_header();

$page = get_post();
?>
<article class="page with-background">

    <?php if(!empty(get_the_post_thumbnail_url())) : ?>
        <section class="hero-block">
            <div class="hero-block__background"></div>
        </section>
    <?php endif ?>

    <?php if(!empty($page->post_title)) : ?>
        <section class="general">
            <div class="container">
                <?php if(!empty($page->post_content)) : ?>
                <div class="general__description">
                    <p><?=$page->post_content?></p>
                </div>
                <?php endif ?>
                
                <?php if(!empty(get_field('product_images'))) :
                    $images = get_field('product_images');
                ?>
                    <div class="general__images">
                        <div class="row justify-content-center">
                        <?php foreach($images as $image) :

                            ?>
                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                <a href="<?=$image['image']?>" data-lightbox="roadtrip" class="general__image"><img src="<?=$image['image']?>" alt="image" ></a>
                            </div>
                        <?php endforeach ?>
                        </div>

                    </div>
                <?php endif ?>
                
            </div>
        </section>
    <?php endif ?>

    <?php if(!empty(get_field('title_geometrical_tolerances'))) : ?>
        <section class="geometrical-tolerances">
            <div class="container">
                <div class="geometrical-tolerances__title title">
                    <h2><?=get_field('title_geometrical_tolerances')?></h2>
                    <div class="title__underline"></div>
                </div>

                <?php if(!empty(get_field('description_geometrical_tolerances'))) : ?>
                    <div class="geometrical-tolerances__description description">
                        <p><?=get_field('description_geometrical_tolerances')?></p>
                    </div>
                <?php endif ?>

                <?php if(!empty(get_field('list_geometrical_tolerances'))) : ?>
                    <?php $content = get_field('list_geometrical_tolerances') ?>
                    <div class="geometrical-tolerances__content content">
                        <ul class="geometrical-tolerances__list list">
                            <?php foreach($content as $list) : ?>
                                <li><?=$list['list_item']?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>

            </div>
        </section>
    <?php endif ?>

    <?php if(!empty(get_field('title_thermal_toughened_glass'))) : ?>
        <section class="thermal">
            <div class="container">
                <div class="thermal__title title">
                    <h2><?=get_field('title_thermal_toughened_glass')?></h2>
                    <div class="title__underline"></div>
                </div>

                <?php if(!empty(get_field('description_thermal_toughened_glass'))) : ?>
                    <div class="thermal__description description">
                        <p><?=get_field('description_thermal_toughened_glass')?></p>
                    </div>
                <?php endif ?>

                <?php if(!empty(get_field('flatness'))) : ?>
                    <?php $content = get_field('flatness') ?>
                    <div class="thermal__content">
                        <div class="thermal__sub-title sub-title">
                            <h3><?= $content['title']?></h3>
                        </div>

                        <?php if(!empty($content['description'])) : ?>
                            <div class="thermal__sub-desc sub-desc">
                                <p><?=$content['description']?></p>
                            </div>
                        <?php endif ?>

                        <?php if(!empty($content['list'])) : ?>
                            <div class="thermal__content content">
                                <ul class="thermal__list list">
                                    <?php foreach($content['list'] as $list) : ?>
                                        <li><?=$list['list_item']?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>

                    </div>
                <?php endif ?>

                <?php if(!empty(get_field('bending_strength'))) : ?>
                    <?php $content = get_field('bending_strength') ?>
                    <div class="thermal__content">
                        <div class="thermal__sub-title sub-title">
                            <h3><?= $content['title']?></h3>
                        </div>

                        <?php if(!empty($content['description'])) : ?>
                            <div class="thermal__sub-desc sub-desc">
                                <p><?=$content['description']?></p>
                            </div>
                        <?php endif ?>

                        <?php if(!empty($content['list'])) : ?>
                            <div class="thermal__content content">
                                <ul class="thermal__list list">
                                    <?php foreach($content['list'] as $list) : ?>
                                        <li><?=$list['list_item']?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>

                    </div>
                <?php endif ?>

                <?php if(!empty(get_field('fragmentation'))) : ?>
                    <?php $content = get_field('fragmentation') ?>
                    <div class="thermal__content">
                        <div class="thermal__sub-title sub-title">
                            <h3><?= $content['title']?></h3>
                        </div>

                        <?php if(!empty($content['description'])) : ?>
                            <div class="thermal__sub-desc sub-desc">
                                <p><?=$content['description']?></p>
                            </div>
                        <?php endif ?>

                        <?php if(!empty($content['table'])) : ?>
                            <div class="thermal__table custom-table">
                                <table class="flex-table">
                                    <thead>
                                    <tr>
                                        <th>Glass type</th>
                                        <th>Nominal thickness in mm</th>
                                        <th>Minimal number of fragments</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($content['table'] as $row) : ?>
                                        <tr>
                                            <td data-label="Glass type"><?=$row['glass_type']?></td>
                                            <td data-label="Nominal thickness in mm"><?=$row['nominal_thickness_in_mm']?></td>
                                            <td data-label="Minimal number of fragments"><?=$row['minimal_number_of_fragments']?></td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif ?>

                    </div>
                <?php endif ?>

            </div>
        </section>
    <?php endif ?>

    <?php if(!empty(get_field('title_edges_and_corners'))) : ?>
    <section class="edges">
        <div class="container">
            <div class="edges__title title">
                <h2><?=get_field('title_edges_and_corners')?></h2>
                <div class="title__underline"></div>
            </div>

            <?php if(!empty(get_field('description_edges_and_corners'))) : ?>
                <div class="edges__description description">
                    <p><?=get_field('description_edges_and_corners')?></p>
                </div>
            <?php endif ?>

            <?php if(!empty(get_field('table_edges_and_corners'))) : ?>
                <?php $content = get_field('table_edges_and_corners') ?>
                <div class="edges__content content">

                    <?php if(!empty($content)) : ?>
                        <div class="edges__table custom-table">
                            <table class="flex-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($content as $row) : ?>
                                    <tr>
                                        <td data-label="Name"><?=$row['name']?></td>
                                        <td data-label="Description"><?=$row['description']?></td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif ?>

                </div>
            <?php endif ?>

        </div>
    </section>
<?php endif ?>

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
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>
