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
 * @package web-app
 */

get_header();
$sidebar = get_theme_mod('web_app_archive_setting_sidebar_option','sidebar-right');
// print_r($sidebar);
// die();
?>
<div class="container">
  <div class="row">
		<?php 
			$custom_class = 'custom-col-8';
			if( 'sidebar-no' == $sidebar ){
				$custom_class = 'custom-col-12';
			} elseif ( 'sidebar-both' == $sidebar ) {
				$custom_class = 'custom-col-4';
			}else{
				$custom_class = 'custom-col-8';
			}
			if($sidebar=='sidebar-both' || $sidebar=='sidebar-left'){
				get_sidebar('left');
			}
		?>   	
		<div id="primary" class="content-area  <?php echo esc_attr( $custom_class );?>">
			<main id="main" class="site-main">

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
						?>
				
				
				<h1 class=""><p>Written by: 
<?php the_author_posts_link(); ?></p></h1>
				<?php
						get_template_part('template-parts/content', get_post_type());
						
					endwhile;
					
					the_posts_navigation();
					
				else :

					get_template_part( 'template-parts/content', 'none' );
						
				endif;
				?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
</div>
<?php

get_footer();
