<?php
		if ( have_posts() ) : while ( have_posts() ) :
			the_post();

?>
<section id="rcamargoContent">
	<div class="container text-center pt-5 pb-0">
		<?php 
			$subtitle = get_post_meta(get_the_ID(),'subtitle',true); 
			if($subtitle): 
		?>
			<p class="headingSmall mb-1 mt-5"><?php echo $subtitle; ?></p>
		<?php endif; ?>
		<h1 class="headingBig mb-5"><?php the_title(); ?></h1>


		<div class="content text-left">
			<?php the_content(); ?>
		</div>
	</div>
</section>


<?php endwhile;endif; // End of the loop. ?>