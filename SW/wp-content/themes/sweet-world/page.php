<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SWEET_WORLD
 */

get_header();

?>

		<div class="row">
			<div class="col-lg-3">
	          <h1 class="my-4"><?php bloginfo( 'name' ); ?></h1>
	          <div class="list-group">
	            <a href="<?php echo esc_url( home_url( '/' ) ).'/categoria-producto/postres/'; ?>" class="list-group-item ">Postres</a>
	            <a href="<?php echo esc_url( home_url( '/' ) ).'/categoria-producto/dulces/'; ?>" class="list-group-item">Dulces</a>
	            <a href="<?php echo esc_url( home_url( '/' ) ).'/categoria-producto/helados/'; ?>" class="list-group-item">Helados</a>
	          </div>
	        </div>
	        <!-- /.col-lg-3 -->
	        
			<div class="col-lg-9">
				
          			
	<!--<div id="primary" class="content-area">
		<main id="main" class="site-main">

<-->			
				
				<?php

				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
				

       		</div>
        	<!-- /.col-lg-9 -->

				



<?php
get_sidebar();
get_footer();
