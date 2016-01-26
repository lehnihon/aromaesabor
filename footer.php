	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>
							<strong>Restaurante Aroma e Sabor</strong><br><br>
							Somos pioneiros no sistema de refeição a quilo na ciadde de São Paulo.
							<br>Atuamos há 26 anos, fornecendo comida caseira, num ambiente mais do que familiar.
							<br><br>
							<strong>Rua São Bento, 545 - 1º andar - São Paulo</strong>
							<br><strong>Telefones: 11 3106-4470  |  11 3106-1544</strong>
							<br><br>
							<strong>Rua Libero Badaró, 370  - São Paulo</strong>
							<br><strong>Telefones: 11 3101-9907  |  11 3241-0491</strong>
						</p>
					</div>
					<div class="col-md-2 col-md-offset-1">
						<strong>Institucional</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">O Restaurante</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."localizacao" ); ?>">Localização</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."blog" ); ?>">Blog</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">Contato</a></li>
						</ul>	
					</div>
					<div class="col-md-2">
						<strong>Serviços</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."atelie-culinario" ); ?>">Ateliê Culinário</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."eventos" ); ?>">Eventos</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."fotos" ); ?>">Fotos</a></li>
						</ul>	
					</div>
					<div class="col-md-3">
						<strong>Receba nossas novidades</strong><br><br>
						<?php
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }
						?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						&copy; Copyright <?php echo date('Y') ?> - Aroma e Sabor | <a target="_blank" href="http://agenciarino.com.br/">Site desenvolvido pela Agência Rino.</a>
					</div>
					<div class="col-md-2">
						<a target="_blank" href="http://agenciarino.com.br/"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-rino.png"?>" /></a>	
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
