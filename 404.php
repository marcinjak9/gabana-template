<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gabana-template
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title text-white text-center" style="margin-top: 120px; margin-bottom: 120px;">
					<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gabana-template' ); ?>
			</h1>
			</header><!-- .page-header -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
