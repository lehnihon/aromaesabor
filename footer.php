	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>
							<strong>Sobre o Atacado das Fraldas Indaiatuba.</strong><br><br>
							No Atacado das Fraldas Indaiatuba você encontra uma linha completa de fraldas para crianças e adultos com preços que cabem no seu bolso.
							<br>Além de bolsas, absorventes, leite, acessórios e roupas para bebês.
							<br><br>
							<strong>Endereço</strong>
							<br><br>Avenida Ário Barnabé, XXXX - Jardim Morada do Sol 
							<br>Indaiatuba - São Paulo
						</p>
					</div>
					<div class="col-md-2 col-md-offset-1">
						<strong>Produtos</strong><br><br>
						<ul>
							<?php
							$args = array(
								'posts_per_page' => 10,
							    'orderby' => 'rand');
							$query = new WP_Query( $args );

							while ( $query->have_posts() ) : $query->the_post(); 
							?>
								<?php if($query->current_post == 5): ?>
									<?php echo '</div><div class="col-md-2"><br><br><ul>'; ?>
								<?php endif; ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title( );?></a></li>
							<?php endwhile; ?>
						</ul>	
					</div>
					<div class="col-md-3">
						<strong>Receba nossas novidades</strong>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						&copy; <?php echo date('Y') ?> Atacado das Fraldas Indaiatuba | <a target="_blank" href="http://agenciarino.com.br/">Site desenvolvido pela Agência Rino.</a>
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
