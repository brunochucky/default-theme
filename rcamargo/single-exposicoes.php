<?php
/**
 * Index template.
 * @package ricardocamargo
 */

get_header();

get_template_part('custom/custom','header');
?>

	<main id="primary" class="site-main">


		

			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'rcamargo' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'rcamargo' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>


			<?php get_template_part('custom/numbers','home'); ?>
			<?php get_template_part('custom/outros','artistas'); ?>
			<?php get_template_part('custom/news','home'); ?>

		
		
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();