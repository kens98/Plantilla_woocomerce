<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :
			echo "<h1>loop</h1>";
			get_template_part( 'loop' );

		else :
			echo "<h1>content none</h1>";
			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
echo "<h1>-------------------------</h1>";
do_action( 'storefront_sidebar' );
echo "<h1>c*****************</h1>";
get_footer();
