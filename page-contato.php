<?php
get_header(); ?>

<div id="content">
	<section id="contato">
		<h1 class="title-full small"><div class="animated bounceIn">Contato</div></h1>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?>
				</div>
				<div class="col-md-6 text-left ">
					<div class="videoWrapperb">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467814.9804093564!2d-47.041120950597595!3d-23.64717016917304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5855caa088ef%3A0xee3fef7424d63dfc!2sR.+S%C3%A3o+Bento%2C+545+-+Centro%2C+S%C3%A3o+Paulo+-+SP%2C+01011-100!5e0!3m2!1spt-BR!2sbr!4v1449080600451" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="quadro">
						<p>
							<strong>São Bento</strong>
							<br>Rua São Bento, 545 - 1º andar - São Paulo 
							<br>Telefones: 11 3106-4470  |  11 3106-1544							
						</p>
						<p>
							<strong>Libero Badaró</strong>
							<br>Rua Libero Badaró, 370 - São Paulo 
							<br>Telefones: 11 3101-9907  |  11 3241-0491							
						</p>

						<p>contato@aromasabor.com.br</p>							
					</div>
				</div>
			</div>	
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
