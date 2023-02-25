<section id="colecaoContent">
	



	<div class="container">

	  <div class="row">
	    <div class="col-xs-12 col-sm coltext">
	      <div class="boxtext pt-5 pb-5">
		      <p class="headingSmall mb-1">CONHEÇA O ACERVO</p>
				<h2 class="headingBig mb-5">Coleções e<br> Obras à Venda</h2>

				<p>
					Texto que explica um pouco sobre o processo de compra e aquisição de artes na galeria. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do se eiusmod temps esmu incididun in ut labs en ore et sa dolore si magna aliqua. Ut enim ad minima veniam, inant quis nostrud e exerci de tation ullam co laboris nisi ut sen aliquip ex ea commodo insade consequat. Duis aute irure do se dolor in reprehenderit inest.Ut enim ad minima veniam, inant quis nostrud e exerci de tation ullam co laboris nisi ut sen aliquip ex ea commodo insade consequat. Duis aute irure do se dolor in reprehenderit inest.
				</p>

				<a href="#" class="seeall">CONFIRA AS COLEÇÕES E OBRAS DÍSPONÍVEIS &#8811;</a>
			</div>
	    </div>
	    <div class="col-xs-12 col-md c-col-bg--blue" id="colimg">
	      <div id="imgbleed"></div>
	    </div>
	  </div>
	</div>
</section>

<style type="text/css">
	@media (min-width: 992px) {
	#colecaoContent .boxtext br {
		display: inline-block;
	}
	.boxtext {
		padding-right: 120px;
	}
    div[class*="c-col-bg"] {
        position: relative;
        min-height: 645px;
    }

    #colimg #imgbleed {

        position: absolute;
        top: 0;
        bottom: 0;
        z-index: -1;
        width: 50vw;
        left: 0;
        background: url('<?php bloginfo('template_url'); ?>/assets/images/galeria/colecao.jpg') no-repeat 0 0;
        background-size: cover;
    }
}
</style>
<script type="text/javascript">
	function handleFullWidthSizing() {
	    const scrollbarWidth = window.innerWidth-$(document).width()+1;
	    

  		document.querySelector('#imgbleed').style.width = 'calc(50vw - '+scrollbarWidth+'px)';
	}

	handleFullWidthSizing();
</script>