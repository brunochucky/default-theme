<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ricardocamargo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container text-center pt-5 pb-5">
	<?php 
			$subtitle = get_post_meta(get_the_ID(),'subtitle',true); 
			if($subtitle): 
		?>
			<p class="headingSmall mb-1 mt-5"><?php echo $subtitle; ?></p>
		<?php endif; ?>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="headingBig mb-4 h2">', '</h2>' );
		else :
			the_title( '<h1 class="headingBig mb-4 h2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;


			?>
	</header><!-- .entry-header -->


	<div class="infobox row pt-4 pb-4">


		<div class="col-sm-12 col-md-7 text-left imgobra"><?php rcamargo_post_thumbnail(); ?></div>
		<div class="col-sm-12 col-md text-left">
			<?php get_template_part('custom/obras','detalhes'); ?>
		</div>
		

	</div>

	

	<div class="entry-content">

		<div class="text-left pt-4">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'rcamargo' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rcamargo' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
	</div><!-- .entry-content -->


	<div class="obras pt-4 pb-4">
		<p class="headingSmall mb-1">veja outras obras da</p>
		<h2 class="headingBig mb-4">Coleção</h2>

		      


		<div id="carouselExpo" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <div class="row">
			      <div class="col-sm">
			      	<img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Tony_Robbin_artwork.JPG" class="d-block w-100" alt="..." />
			      </div>
			      <div class="col-sm">
			      	<img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Tony_Robbin_artwork.JPG" class="d-block w-100" alt="..." />
			      </div>
			      <div class="col-sm">
			      	<img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Tony_Robbin_artwork.JPG" class="d-block w-100" alt="..." />
			      </div>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <div class="row">
			      <div class="col-sm">
			      	<img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Tony_Robbin_artwork.JPG" class="d-block w-100" alt="..." />
			      </div>
			      <div class="col-sm">
			      	<img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Tony_Robbin_artwork.JPG" class="d-block w-100" alt="..." />
			      </div>
			      <div class="col-sm">
			      	<img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Tony_Robbin_artwork.JPG" class="d-block w-100" alt="..." />
			      </div>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <div class="row">
			      <div class="col-sm">
			      	<img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Tony_Robbin_artwork.JPG" class="d-block w-100" alt="..." />
			      </div>
			      <div class="col-sm">
			      	<img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Tony_Robbin_artwork.JPG" class="d-block w-100" alt="..." />
			      </div>
			      <div class="col-sm">
			      	<img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Tony_Robbin_artwork.JPG" class="d-block w-100" alt="..." />
			      </div>
		      </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExpo" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExpo" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		   
	</div>

	<footer class="entry-footer">
		<?php rcamargo_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
