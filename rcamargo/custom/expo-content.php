<section id="expoContent">
	<div class="container text-center pt-5 pb-5">
		<?php 
			$subtitle = get_post_meta(get_the_ID(),'subtitle',true); 
			if($subtitle): 
		?>
			<p class="headingSmall mb-1 mt-5"><?php echo $subtitle; ?></p>
		<?php endif; ?>
		<h1 class="headingBig mb-5"><?php the_title(); ?></h1>

		<div id="emcartaz" class="pt-4 text-left pb-5">
			
			<div class="gridexpo">

				<div class="expo-item">
					<div class="expo expo1">
						<a href="#" class="details">Detalhes</a>
						<div class="workdate">
							<p class="m-0"><u>de</u> 27/06/2022</p>
							<p class="m-0"><u>até</u> 04/07/2022</p>
						</div>
						<div class="workdetails">
							<p class="worktitle mb-1">Nome da Obra com um limite de caracteres</p>
							<p class="workartist mb-0">NOME DO ARTISTA, ANO</p>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/assets/images/exposicoes/expo.jpg" />
					</div>
				</div>

				<div class="expo-item">
					<div class="expo mb-3">
						<a href="#" class="details">Detalhes</a>
						<div class="workdate">
							<p class="m-0"><u>de</u> 27/06/2022</p>
							<p class="m-0"><u>até</u> 04/07/2022</p>
						</div>
						<div class="workdetails">
							<p class="worktitle mb-1">Nome da Obra com um limite de caracteres</p>
							<p class="workartist mb-0">NOME DO ARTISTA, ANO</p>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/assets/images/exposicoes/expo2.jpg" />
					</div>

					<div class="expo">
						<a href="#" class="details">Detalhes</a>
						<div class="workdate">
							<p class="m-0"><u>de</u> 27/06/2022</p>
							<p class="m-0"><u>até</u> 04/07/2022</p>
						</div>
						<div class="workdetails">
							<p class="worktitle mb-1">Nome da Obra com um limite de caracteres</p>
							<p class="workartist mb-0">NOME DO ARTISTA, ANO</p>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/assets/images/exposicoes/expo2.jpg" />
					</div>
				</div>

			</div>

			

		</div>


	</div>
</section>