<?php
/**
 * Template Name: Projects page
 *
 * @package WordPress
 */

get_header();

$projects = get_field('projects');
?>
    <article class="page">

        <?php if(!empty(get_the_post_thumbnail_url())) : ?>
            <section class="hero-block">
                <div class="hero-block__background"></div>
            </section>
        <?php endif ?>

        <section class="projects-title">
            <div class="container">
                <div class="title">
                    <h1>Our projects</h1>
                    <div class="title__underline"></div>
                </div>
            </div>
        </section>

        <?php if(!empty($projects)) : ?>
            <section class="projects-list">
                    <?php foreach($projects as $project) : ?>
                    <div class="projects-list__item">
                        <div class="container">
                            <div class="project-list__title title">
                                <h2><?=$project['title']?></h2>
                                <div class="title__underline"></div>
                            </div>
                            <div class="project-list__content">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="project-list__image">
                                            <img src="<?=$project['image']?>" alt="<?=$project['title']?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="projects-list__description">
                                            <p><?=$project['description']?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
            </section>
        <?php endif ?>

    </article>
<?php
get_footer();
?>
