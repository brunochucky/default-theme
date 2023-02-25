<?php
	$artista = get_post_meta(get_the_ID(), 'artista', true);
	$slug = sanitize_title($artista);
	$colecao = get_post_meta(get_the_ID(), 'colecao', true);
?>
<div class="infoobra p-4">
	<p class="headingSmall mb-1">detalhes da</p>
	<h2 class="headingBig mb-4 h2">Obra</h2>

	<p><strong>Artista:</strong> <u><?php echo $artista; ?></u></p>
	<p><strong>Ano:</strong> <u><?php echo get_post_meta(get_the_ID(), 'ano', true); ?></u></p>
	<p><strong>Material:</strong> <u><?php echo get_post_meta(get_the_ID(), 'material', true); ?></u></p>
	<p><strong>Dimensões:</strong> <u><?php echo get_post_meta(get_the_ID(), 'dimensoes', true); ?></u></p>
	<p><strong>Observações:</strong> <u><?php echo get_post_meta(get_the_ID(), 'observacoes', true); ?></u></p>


	<div class="boxartista">
		<p class="headingSmall mb-1 mt-5">um pouco sobre</p>
		<h2 class="headingBig mb-4 h2">O Artista</h2>


		<?php
			$args_artista = array(
			  'name'        => $slug,
			  'post_type'   => 'artistas',
			  'post_status' => 'publish',
			  'numberposts' => 1
			);
			$query_artista = get_posts($args_artista);
			if( $query_artista ) : 
				$id_artista = $query_artista[0]->ID; 
				$excerpt = wp_trim_words ( strip_shortcodes( $query_artista[0]->post_content ), 20 );
				$permalink = get_the_permalink($id_artista);
				$thumbnail = get_the_post_thumbnail($id_artista);
			?>
			
			<div class="thumbartista"><?php echo $thumbnail; ?></div>
			  <p><a href="<?php echo $permalink; ?>"><?php echo $artista; ?></a></p>
			  
			  <p><?php echo $excerpt; ?></p>


		<?php endif; ?>

	</div>

	<p class="headingSmall mb-1 mt-5">um pouco sobre</p>
	<h2 class="headingBig mb-4 h2">A Coleção</h2>

	<?php
		$args_colecao = array(
		  'name'        => $colecao,
		  'post_type'   => 'exposicoes',
		  'post_status' => 'publish',
		  'numberposts' => 1
		);
		$query_colecao = get_posts($args_colecao);
		if( $query_colecao ) : 
			$id_colecao = $query_colecao[0]->ID; 
			$excerpt2 = wp_trim_words ( strip_shortcodes( $query_colecao[0]->post_content ), 20 );
			$permalink2 = get_the_permalink($id_colecao);
		?>
		
		  
		  
		  <p><?php echo $excerpt2; ?> <a href="<?php echo $permalink2; ?>">Leia mais</a></p>


	<?php endif; ?>
</div>