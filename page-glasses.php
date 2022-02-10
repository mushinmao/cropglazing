<?php
/**
 * Template Name: Horticulture glass
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
$page = get_post();
$meta = get_post_meta($page->ID);
?>
<article class="page with-background">

    <?php if(!empty(get_the_post_thumbnail_url())) : ?>
        <section class="hero-block">
            <div class="hero-block__background"></div>
        </section>
    <?php endif ?>

    <? if(!empty($page->post_content)) : ?>
    <section class="general">
        <div class="container">
            <div class="general__title title">
                <h1>General description</h1>
                <div class="title__underline"></div>
            </div>
            <div class="general__description">
                <p><?=$page->post_content?></p>
            </div>
        </div>
    </section>
    <?php endif ?>

    <section class="products">
        <div class="container">
            <div class="products__title title">
                <h2>Products</h2>
                <div class="title__underline"></div>
            </div>
            <div class="row justify-content-center <?= (count($pages)) > 4 ? 'justify-content-sm-start' : '' ?> align-items-stretch">
                <?php foreach ($pages as $page) :?>
                    <div class="col-10 col-sm-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="products__item product">
                            <a class="link" href="<?=$page->guid?>">
                                <div class="product__image">
                                    <img class="img-fluid" src="<?= wp_get_attachment_url( get_post_thumbnail_id($page->ID));?>" alt="<?=$page->post_title?>">
                                </div>
                                <div class="product__title">
                                    <h3><?=$page->post_title?></h3>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <?php if(!empty(get_field('title_general'))) : ?>
    <section class="properties">
        <div class="container">
            <div class="properties__title title">
                <h2><?=get_field('title_general')?></h2>
                <div class="title__underline"></div>
            </div>

            <?php if(!empty(get_field('description_general'))) : ?>
            <div class="properties__description description">
                <p><?=get_field('description_general')?></p>
            </div>
            <?php endif ?>

            <?php if(!empty(get_field('composition'))) : ?>
                <?php $content = get_field('composition') ?>
                <div class="properties__content content">
                    <div class="properties__sub-title sub-title">
                        <h3><?= $content['title']?></h3>
                    </div>

                    <?php if(!empty($content['description'])) : ?>
                    <div class="properties__sub-desc sub-desc">
                        <p><?=$content['description']?></p>
                    </div>
                    <?php endif ?>

                    <?php if(!empty($content['table'])) : ?>
                    <div class="properties__table custom-table">
                        <table class="flex-table">
                            <thead>
                                <tr>
                                    <th>Element</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($content['table'] as $row) : ?>
                                <tr>
                                    <td data-label="Element"><?=$row['element']?></td>
                                    <td data-label="Value"><?=$row['value']?></td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <?php endif ?>

                </div>
            <?php endif ?>

            <?php if(!empty(get_field('characteristics'))) : ?>
                <?php $content = get_field('characteristics') ?>
                <div class="properties__content content">
                    <div class="properties__sub-title sub-title">
                        <h3><?= $content['title']?></h3>
                    </div>

                    <?php if(!empty($content['description'])) : ?>
                    <div class="properties__sub-desc sub-desc">
                        <p><?=$content['description']?></p>
                    </div>
                    <?php endif ?>

                    <?php if(!empty($content['table'])) : ?>
                    <div class="properties__table custom-table">
                        <table class="flex-table">
                            <thead>
                                <tr>
                                    <th>Characteristic</th>
                                    <th>Symbol</th>
                                    <th>Value and Unit</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($content['table'] as $row) : ?>
                                <tr>
                                    <td data-label="Characteristic"><?=$row['characterisitc']?></td>
                                    <td data-label="Symbol"><?=$row['symbol']?></td>
                                    <td data-label="Value and Unit"><?=$row['value_and_unit']?></td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                        <?php if(!empty($content['sub_description'])) : ?>
                            <span class="table-sub"><?=$content['sub_description']?></span>
                        <?php endif ?>
                    </div>
                    <?php endif ?>

                </div>
            <?php endif ?>

            <?php if(!empty(get_field('transmittance'))) : ?>
                <?php $content = get_field('transmittance') ?>
                <div class="properties__content content">
                    <div class="properties__sub-title sub-title">
                        <h3><?= $content['title']?></h3>
                    </div>

                    <?php if(!empty($content['description'])) : ?>
                        <div class="properties__sub-desc sub-desc">
                            <p><?=$content['description']?></p>
                        </div>
                    <?php endif ?>

                    <?php if(!empty($content['table'])) : ?>
                        <div class="properties__table custom-table">
                            <table class="flex-table">
                                <thead>
                                <tr>
                                    <th>Glass type</th>
                                    <th>TE value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($content['table'] as $row) : ?>
                                    <tr>
                                        <td data-label="Glass type"><?=$row['glass_type']?></td>
                                        <td data-label="TE value"><?=$row['te_value']?></td>
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

    <?php if(!empty(get_field('title_logo'))) : ?>
        <section class="marking-logo">
            <div class="container">
                <div class="properties__title title">
                    <h2><?=get_field('title_logo')?></h2>
                    <div class="title__underline"></div>
                </div>

                <?php if(!empty(get_field('description_logo'))) : ?>
                    <div class="properties__description description">
                        <p><?=get_field('description_logo')?></p>
                    </div>
                <?php endif ?>

            </div>
        </section>
    <?php endif ?>

    <?php if(!empty(get_field('title_glass_quality'))) : ?>
        <section class="quality">
            <div class="container">
                <div class="quality__title title">
                    <h2><?=get_field('title_glass_quality')?></h2>
                    <div class="title__underline"></div>
                </div>

                <?php if(!empty(get_field('description_glass_quality'))) : ?>
                    <div class="quality__description description">
                        <p><?=get_field('description_glass_quality')?></p>
                    </div>
                <?php endif ?>

                <?php if(!empty(get_field('table_glass_quality'))) : ?>
                    <?php $content = get_field('table_glass_quality') ?>
                    <div class="quality__content">

                        <?php if(!empty($content)) : ?>
                            <div class="quality__table custom-table">
                                <table class="flex-table">
                                    <thead>
                                    <tr>
                                        <th>Material</th>
                                        <th>Patterned glass</th>
                                        <th>Float glass</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($content as $row) : ?>
                                        <tr>
                                            <td data-label="Material"><?=$row['material']?></td>
                                            <?php if(!empty($row['patterned_glass'])) :?><td data-label="Patterned glass" <?= empty($row['float_glass']) ? 'colspan="2"' : '' ?>><?=$row['patterned_glass']?></td><?php endif ?>
                                            <?php if(!empty($row['float_glass'])) :?><td data-label="Float glass"  <?= empty($row['patterned_glass']) ? 'colspan="2"' : '' ?>><?=$row['float_glass']?></td><?php endif ?>
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
