<!--INÍCIO DO CAROSEL-->
<center>

<div class="conteiner">
	<div id="lojaCarousel" class="carousel slid" data-ride="carousel">
	<!--INDICADORES-->
	<ol class="carousel-indicators">
		<li data-target="#lojaCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#lojaCarousel" data-slide-to="1"></li>
		<li data-target="#lojaCarousel" data-slide-to="2"></li>
	</ol>
	<!--FIM DOS INDICADORES-->
	
	<!--SLIDES-->
	<div class="carousel-inner">
		<div class="item active">	
			<a href="http://localhost/loja/produtos/1/Categoria-camisas" target="_blank">
				<img src="{$BANNER}" alt="" class="img img-responsive img-rounded">
			</a>
		</div>
		
		<div class="item">	
			<a href="http://localhost/loja/produtos/1/Categoria-camisas" target="_blank">
				<img src="{$BANNER01}" alt="" class="img img-responsive img-rounded">
			</a>
		</div>

		<div class="item">	
			<a href="http://localhost/loja/produtos/1/Categoria-camisas" target="_blank">
				<img src="{$BANNER02}" alt="" class="img img-responsive img-rounded">
			</a>
		</div>
	</div>
	<!--FIM DOS SLIDES-->
	
	<!--CONTROLADORES-->
	<a href="#lojaCarousel" class="left carousel-control" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Anterior</span>
	</a>

	<a href="#lojaCarousel" class="right carousel-control" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Próximo</span>
	</a>
	<!--FIM CONTROLADORES-->



	</div>
</div>
<!--FIM DO CAROSEL-->
</center>