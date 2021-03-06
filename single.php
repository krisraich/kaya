<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package 
 * @version 0.7.11
 */

get_header(); ?>

	<?php if ('left_sidebar' == get_theme_mod( 'kaya_post_sidebar', 'right_sidebar' )) get_sidebar(); ?>
	<div id="primary" class="content-area <?php if( get_theme_mod( 'kaya_post_sidebar', 'right_sidebar' ) !== 'no_sidebar' ) echo 'has-sidebar'; ?>">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( (get_theme_mod( 'kaya_post_comments', 'off' ) ) && (comments_open() || get_comments_number() )) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php if ('right_sidebar' == get_theme_mod( 'kaya_post_sidebar', 'right_sidebar' )) get_sidebar(); ?>

<?php
get_footer();
