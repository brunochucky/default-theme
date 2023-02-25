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
 * @package ricardocamargo
 */

get_header();
get_template_part('custom/custom','header');
?>

	<main id="primary" class="site-main blogmain">
		<div class="container text-left pt-5 pb-5">
			<header class="entry-header text-center">
				<p class="headingSmall mb-1 mt-5">Fique por dentro do nosso</p>
				<h1 class="headingBig mb-5">Blog</h1>
			</header>

			<div class="row">
				<div class="col col-md-8">
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
				<div class="col">
					<?php get_sidebar(); ?>
				</div>
			</div>
			
		</div>

		<?php get_template_part('custom/news','home'); ?>
	</main><!-- #main -->

<?php
get_footer();
