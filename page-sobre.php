<?php
get_header(); ?>

<div id="content">
	<section id="sobre">
		<h1 class="title-full small"><div class="animated bounceIn">Aroma e Sabor</div></h1>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<h4>Restaurante Aroma e Sabor</h4>
					<p>Somos pioneiros no sistema de refeição a quilo na cidade de São Paulo.
						Atuamos há 26 anos, fornecendo comida caseira, num ambiente mais do que familiar.
						<br>Tudo começou com Mama Odete e agora, já na segunda geração, o restaurante 
						Aroma e Sabor procura manter o mesmo espírito e a mesma ideia: alimentar com 
						qualidade a todos que nos procuram.

					</p>
					<ul>
						<li>Visão Panorâmica para o Mosteiro São Bento e Viaduto Santa Ifigênia</li>
						<li>Cardápio variado com sobremesas especiais todos os dias</li>
						<li>Sistema buffet por quilo, comida brasileira, caseira</li>
						<li>Sexta-feira o cardápio é temático, com comida japonesa e árabe</li>
					</ul>
				</div>
				<div class="col-md-5 text-left">
					<h4>Fotos</h4>
					<div class="fotos-sobre row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Galeria Aroma e Sabor 01.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Galeria Aroma e Sabor 02.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Galeria Aroma e Sabor 03.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Galeria Aroma e Sabor 04.jpg"; ?>"/>
						</div>
					</div>
				</div>	
			</div>	
			<div class="row">
				<div class="col-md-12 text-left">
					<h4>Locação para eventos</h4>
					<p>Alugamos nosso espaço para eventos empresariais e particulares.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-left">
					<h4>Ateliê Culinário</h4>
					<p>Fornecemos bolos, salgados, tortas, lanches de metro, tudo para seus eventos e festas.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-left">
					<h4>Serviços de catering</h4>
					<p>Coffes break, churrascos, aniversários, feijoadas e coquetel.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-left">
					<h4>Serviços de garçom</h4>
					<p>Coperios, decoração, tudo para agilizar seus eventos.</p>
				</div>
			</div>	
		</div>
	</section>
	
	<?php get_template_part( 'template-parts/fotos-sobre'); ?>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
