<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ricardocamargo
 */

?>

	<footer id="colophon" class="site-footer pt-5">

		<div id="footerinfo" class="pt-3 pb-5">
			<div class="container pb-3">
				<div class="row">
					<div class="col-sm-12 col-md-2">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/escudo2.jpg" />
					</div>


					<div class="col-sm-12 col-md">
						<p>
							Rua Frei Galvão, 121 <br />
							Jd. Paulistano<br /> 
							São Paulo - SP - 01454 060
						</p>

						<p>
							Seg-Sex: 10h-19h<br />
							Sab: 10h-14h
						</p>

						<p>
							+55 (11) 3031 3879<br /> 
							+55 (11) 3819 0277
						</p>

						<p>
							<a href="mailto:rcamargoarte@terra.com.br">rcamargoarte@terra.com.br</a>
						</p>
					</div>

					<div class="col-sm-12 col-md" id="footerLinks">
						<div class="row">
							<div class="col-sm">
								<p><a href="#">Saiba mais sobre a Galeria</a></p>
								<p><a href="#">A Trajetória de Ricardo Camargo</a></p>
								<p><a href="#">Exposições em cartaz</a></p>

								<p>
									<span class="mr-2"><a href="#"><i class="fa-2x fa-brands fa-instagram"></i></a></span>
									<span><a href="#"><i class="fa-2x fa-brands fa-facebook-f"></i></a></span>
								</p>
							</div>

							<div class="col-sm">
								<p><a href="#">Cronograma: Exposições e Eventos</a></p>
								<p><a href="#">Coleções e Obras à Venda</a></p>
								<p><a href="#">Visite a Galeria: Entre em Contato</a></p>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4">
						<p><a href="#" class="btnfooter">Política de Privacidade</a></p>
						<p><a href="#" class="btnfooter">Política de Cookies</a></p>
						<p><a href="#" class="btnfooter">Gerenciamento de Cookies</a></p>
					</div>


				</div>
			</div>
		</div>
		<div class="site-info text-center pt-3 pb-3">
			<div class="container">
				&copy; Ricardo Camargo Galeria Copyright <?php echo date('Y'); ?>. Todos os direitos reservados.
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
