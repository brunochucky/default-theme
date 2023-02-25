<?php
/**
 * Index template.
 * Template name: Exposições
 * @package ricardocamargo
 */

get_header();

get_template_part('custom/custom','header');

?>

	<main id="primary" class="site-main">

		<?php get_template_part('custom/expo','content'); ?>

		<?php get_template_part('custom/expo','anteriores'); ?>

		<?php get_template_part('custom/numbers','home'); ?>	
		<?php get_template_part('custom/outros','artistas'); ?>	
		<?php get_template_part('custom/news','home'); ?>			
		
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();