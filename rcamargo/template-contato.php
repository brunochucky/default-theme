<?php
/**
 * Index template.
 * Template name: Contato
 * @package ricardocamargo
 */

get_header();

get_template_part('custom/custom','header');

?>

	<main id="primary" class="site-main">

		<?php get_template_part('custom/content','contato'); ?>
		<?php get_template_part('custom/mapa','contato'); ?>	
		
		<?php get_template_part('custom/news','home'); ?>			
		
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();