<?php
/**
 * Template Name: About us
 *
 * @package WordPress
 */
get_header();

$page = get_post();
?>

<article class="about-us min-height page">

    <?php if(!empty(get_the_post_thumbnail_url())) : ?>
        <section class="hero-block">
            <div class="hero-block__background"></div>
        </section>
    <?php endif ?>

    <section>
        <div class="container">
            <?=$page->post_content?>
        </div>
    </section>
</article>

<?php
get_footer();
?>