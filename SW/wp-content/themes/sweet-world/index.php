<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
				
				
          		
					<?php

						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif;
					
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_type() );


							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					

       		</div>
        	<!-- /.col-lg-9 -->


<?php
get_sidebar();
get_footer();
