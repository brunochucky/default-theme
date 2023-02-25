<section id="avendaContent">
	<div class="container text-center pt-5 pb-5">
		<?php 
			$subtitle = get_post_meta(get_the_ID(),'subtitle',true); 
			if($subtitle): 
		?>
			<p class="headingSmall mb-1 mt-5"><?php echo $subtitle; ?></p>
		<?php endif; ?>
		<h1 class="headingBig mb-5"><?php the_title(); ?></h1>

		

		

		<div id="avenda" class="pt-4 grid">
			
			<div class="work grid-item">
				<a href="#" class="details">Detalhes</a>
				<div class="workdetails">
					<p class="worktitle mb-1">Nome da Obra com um limite de caracteres</p>
					<p class="workartist mb-0">NOME DO ARTISTA, ANO</p>
				</div>
				<img src="https://via.placeholder.com/380X265.png" />
			</div>

			<div class="work grid-item">
				<a href="#" class="details">Detalhes</a>
				<div class="workdetails">
					<p class="worktitle mb-1">Nome da Obra com um limite de caracteres</p>
					<p class="workartist mb-0">NOME DO ARTISTA, ANO</p>
				</div>
				<img src="https://via.placeholder.com/380X660.png" />
			</div>

			<div class="work grid-item">
				<a href="#" class="details">Detalhes</a>
				<div class="workdetails">
					<p class="worktitle mb-1">Nome da Obra com um limite de caracteres</p>
					<p class="workartist mb-0">NOME DO ARTISTA, ANO</p>
				</div>
				<img src="https://via.placeholder.com/380X455.png" />
			</div>

			<div class="work grid-item">
				<a href="#" class="details">Detalhes</a>
				<div class="workdetails">
					<p class="worktitle mb-1">Nome da Obra com um limite de caracteres</p>
					<p class="workartist mb-0">NOME DO ARTISTA, ANO</p>
				</div>
				<img src="https://via.placeholder.com/380X265.png" />
			</div>

			<div class="work grid-item">
				<a href="#" class="details">Detalhes</a>
				<div class="workdetails">
					<p class="worktitle mb-1">Nome da Obra com um limite de caracteres</p>
					<p class="workartist mb-0">NOME DO ARTISTA, ANO</p>
				</div>
				<img src="https://via.placeholder.com/380X660.png" />
			</div>

			<div class="work grid-item">
				<a href="#" class="details">Detalhes</a>
				<div class="workdetails">
					<p class="worktitle mb-1">Nome da Obra com um limite de caracteres</p>
					<p class="workartist mb-0">NOME DO ARTISTA, ANO</p>
				</div>
				<img src="https://via.placeholder.com/380X455.png" />
			</div>

			<div class="work grid-item">
				<a href="#" class="details">Detalhes</a>
				<div class="workdetails">
					<p class="worktitle mb-1">Nome da Obra com um limite de caracteres</p>
					<p class="workartist mb-0">NOME DO ARTISTA, ANO</p>
				</div>
				<img src="https://via.placeholder.com/380X265.png" />
			</div>


		</div>

		<p><a href="#" class="seeall">Veja todas as coleções e obras à venda &#8811;</a></p>

	</div>
</section>