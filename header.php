<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cropglazing
 */
$page = get_post();
$contacts = get_field('contacts', 210);

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">	<?php wp_head(); ?>
</head>

<body>

<?php if(!empty(get_the_post_thumbnail_url())) : ?>
    <style>
        .hero-block__background {
            background-image: url("<?=get_the_post_thumbnail_url()?>");
        }
    </style>
<?php endif ?>
<?php wp_body_open(); ?>
<header class="header">
    <div class="header__top-line top-line">
        <div class="container">
            <div class="d-flex justify-content-end">
                <div class="top-line__contacts">
                    <a href="tel:<?=str_replace([' ', '(', ')', '-'], '', $contacts['phone'])?>" class="top-line__link link"><i class="bi bi-phone"></i>  <?=$contacts['phone']?></a>
                    <a href="mailto:<?=$contacts['e-mail']?>" class="top-line__link link"><i class="bi bi-envelope"></i> <?=$contacts['e-mail']?></a>
                </div>
<!--                <div class="top-line__socials">-->
<!--                    <a href="#" class="top-line__link link"><i class="bi bi-facebook"></i></a>-->
<!--                    <a href="#" class="top-line__link link"><i class="bi bi-instagram"></i></a>-->
<!--                    <a href="#" class="top-line__link link"><i class="bi bi-youtube"></i></a>-->
<!--                    <a href="#" class="top-line__link link"><i class="bi bi-twitter"></i></a>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <div class="header__main-line main-line position-relative">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="header__logo">
                   <?php the_custom_logo() ?>
                </div>
                <nav class="header__nav">
                        <?php
                        wp_nav_menu(
                            array(
                                'walker'         => new Header_Nav_Walker(),
                                'theme_location'            => 'header-menu',
                                'container'      => false,
                                'fallback_cb'    => false,
                                'items_wrap'     => '<ul class="navbar-nav flex-column flex-md-row">%3$s</ul>',
                                'depth'          => 2,
                            )
                        );
                        ?>
                </nav>
                <div class="header__mobile-button">
                    <label class="header__burger" for="burger">
                        <input class="hidden" id="burger" type="checkbox"/><span></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
if($page->post_status == 'draft' or is_category(1)) {
    global $wp_query;
    $wp_query->set_404();
    status_header( 404 );
    get_template_part( 404 ); exit();
}
?>
<main>