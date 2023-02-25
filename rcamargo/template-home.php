<?php
/**
 * Index template.
 * Template name: Home
 * @package ricardocamargo
 */

get_header();

get_template_part('custom/custom','header');
get_template_part('custom/slider','home');
?>

	<main id="primary" class="site-main">
			<header class="header-home invisible">
				<h1 class="headingBig mb-5 text-center"><?php bloginfo('site_name'); ?></h1>
			</header><!-- .entry-header -->
			<?php get_template_part('custom/expo','home'); ?>
			<?php get_template_part('custom/crono','home'); ?>

			<?php get_template_part('custom/venda','home'); ?>

			<?php get_template_part('custom/numbers','home'); ?>

			<?php get_template_part('custom/news','home'); ?>
		
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();