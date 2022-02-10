<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Cropglazing
 */

get_header();
?>

	<article class="site-main page">

		<section class="error-404 not-found">
            <div class="container">
                <h1 class="page-title title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'cropglazing' ); ?></h1>
            </div>

		</section><!-- .error-404 -->

	</article><!-- #main -->

<?php
get_footer();
