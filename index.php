<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container-fluid">
			<div class="row">		
				<?php putRevSlider( "banner-index" ) ?>		
			</div>
		</div>
	</section>
	<section id="atelie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small title-restaurante"><span class="cor-base">Restaurante</span> Aroma e Sabor</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 anima-a">
					<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/categoria1.jpg"; ?>"/>
				</div>
				<div class="col-md-4 anima-b">
					<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/categoria2.jpg"; ?>"/>
				</div>
				<div class="col-md-4 anima-c">
					<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/categoria3.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</section>
	<section id="detalhes">
		<div class="container">
			<div class="row atelie">
				<div class="col-md-3 anima-d">
					<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/atelie.jpg"; ?>"/>
				</div>
				<div class="col-md-3 text-left anima-e">
					<h4>Ateliê Culinário</h4>
					<p>Confira todo o cardápio do Ateliê Culinário do restaurante Aroma e Sabor.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."atelie-culinario"; ?>" class="btn-saiba-mais">Saiba mais</a>
				</div>
				<div class="col-md-3 anima-f">
					<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/eventos.jpg"; ?>"/>
				</div>
				<div class="col-md-3 text-left anima-g">
					<h4>Eventos</h4>
					<p>Confira todo o cardápio do Ateliê Culinário do restaurante Aroma e Sabor.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."eventos"; ?>" class="btn-saiba-mais">Saiba mais</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 text-left anima-h">
					<h4>Restaurante Aroma e Sabor</h4>
					<p class="">Somos pioneiros no sistema de refeição a quilo na cidade de São Paulo.
						Atuamos há 26 anos, fornecendo comida caseira, num ambiente mais do que familiar.
						<br>Tudo começou com Mama Odete e agora, já na segunda geração, o restaurante 
						Aroma e Sabor procura manter o mesmo espírito e a mesma ideia: alimentar com 
						qualidade a todos que nos procuram.

					</p>
					<ul>
						<li>Visão Panorâmica para o Mosteiro São Bento e Viadulto Santa Ifigênia</li>
						<li>Cardápio variado com sobremesas especiais todos os dias</li>
						<li>Sistema buffet por quilo, comida brasileira, caseira</li>
						<li>Sexta-feira o cardápio é temático, com comida japonesa e árabe</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>" class="btn-saiba-mais">Confira as fotos</a>
				</div>
				<div class="col-md-5 text-left anima-i">
					<h4>Fotos</h4>
					
					<div class="fotos-sobre">
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto-sobre.jpg"; ?>"/>
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto-sobre.jpg"; ?>"/>
						<div class="clearfix"></div>
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto-sobre.jpg"; ?>"/>
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto-sobre.jpg"; ?>"/>
					</div>
			
				</div>
			</div>
		</div>		
	</section>

	<section id="maps">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467814.9804093564!2d-47.041120950597595!3d-23.64717016917304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5855caa088ef%3A0xee3fef7424d63dfc!2sR.+S%C3%A3o+Bento%2C+545+-+Centro%2C+S%C3%A3o+Paulo+-+SP%2C+01011-100!5e0!3m2!1spt-BR!2sbr!4v1449080600451" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
