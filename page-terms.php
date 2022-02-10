<?php
/**
 * Template Name: Terms page
 *
 * @package WordPress
 */

get_header();

$page = get_post();
?>
    <article class="page">

        <?php if(!empty(get_the_post_thumbnail_url())) : ?>
            <section class="hero-block">
                <div class="hero-block__background"></div>
            </section>
        <?php endif ?>

        <section>
            <div class="container">
                <div class="title">
                    <h1><?=$page->post_title?></h1>
                </div>
                <div class="content">
                    <?= $page->post_content?>
                </div>
            </div>
        </section>
    </article>

<?php
get_footer();
?>
