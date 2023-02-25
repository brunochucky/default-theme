<?php
/**
 * The custom header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ricardocamargo
 */

?>


<header id="cheader" class="bg-white p-4">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 text-left text-left">
				<?php if(is_front_page()): ?>
					<img src="<?php bloginfo('template_url'); ?>/assets/images/logo.jpg" width="210" />
				<?php else: ?>
					<a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.jpg" width="210" /></a>
				<?php endif; ?>
			</div>


			<div class="col-xs-12 col-sm middleflex">
				<?php wp_nav_menu('main-menu'); ?>
			</div>


			<div class="middleflex text-center">
				<a href="#" class="search m-auto"><i class="fa fa-magnifying-glass"></i></a>
			</div>
		</div>
	</div>
</header>