<?php
/**
 * Index template.
 * Template name: Galeria
 * @package ricardocamargo
 */

get_header();

get_template_part('custom/custom','header');

?>

	<main id="primary" class="site-main">

		<?php get_template_part('custom/rcamargo','content'); ?>


		<?php get_template_part('custom/historia','galeria'); ?>


		<?php get_template_part('custom/numbers','home'); ?>	
		<?php get_template_part('custom/colecao','galeria'); ?>	
		<?php get_template_part('custom/news','home'); ?>			
		
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();