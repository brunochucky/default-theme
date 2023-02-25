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
	<p class="headingSmall mb-1">Em cartaz</p>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="headingBig mb-4 h2">', '</h1>' );
		else :
			the_title( '<h1 class="headingBig mb-4 h2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;


			?>
	</header><!-- .entry-header -->


	<div class="infobox row pt-4 pb-4">


		<div class="col-sm-12 col-md-8"><?php rcamargo_post_thumbnail(); ?></div>
		<div class="col-sm-12 col-md text-left">
			<div class="infoexpo p-4">
				<p class="text-uppercase infotitle mb-2">Data</p>
				<p class="info m-0">De: 21/03/2022</p>
				<p class="info m-0">Até: 21/03/2022</p>
				<hr />
				<p class="text-uppercase infotitle mb-2">Horario</p>
				<p class="info m-0">De: 21/03/2022</p>
				<p class="info m-0">Até: 21/03/2022</p>
				<hr />
				<p class="text-uppercase infotitle mb-2">Resumo</p>
				<p class="info m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae turpis tellus. Donec tempor erat justo, non dictum ex ultricies rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
			</div>
		</div>
		

	</div>

	

	<div class="entry-content">
		<p class="headingSmall mb-1">Saiba mais sobre a</p>
		<h2 class="headingBig mb-4">Exposição</h2>
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
		<p class="headingSmall mb-1">Peças e Obras</p>
		<h2 class="headingBig mb-4">Exibidas</h2>

		      


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
