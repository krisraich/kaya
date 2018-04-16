<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @author  Anphira
 * @since   0.1
 * @package Kaya
 * @version 0.7
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo get_theme_mod( 'kaya_404_title', 'Sorry, that page could not be found' ) ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo htmlspecialchars_decode(get_theme_mod( 'kaya_404_content', 'You tried to reach a page which could not be found. Please <a href="/">click here to visit the home page</a> or use the main menu to navigate to your desired location.' )) ?></p>

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
