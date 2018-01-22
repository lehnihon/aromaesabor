<?php
get_header(); 
$upload_dir = wp_upload_dir();
?>
<div id="content">
	<section>
		<h1 class="title-full small animated bounceIn">Ceia de Natal</h1>
		<div class="container">
			<h2 class="redes text-left">Encomendas para Ceia de Natal</h2>
			<p class="redes text-left">Faça sua encomenda de ceia de Natal, do prato principal à sobremesa. Você encomenda sua Ceia de Natal sem complicações e sem sair de casa.<br>
			Faça o seu pedido através dos telefones 11 3106-4470 ou 11 3106-1544. Aceitaremos encomendas até o dia 21 de Dezembro.</p><br>
			<div class="row">
				<div class="col-md-12">
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/natal-banner.jpg"; ?>"/>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12">
					<h2 class="redes text-left">Ceia de Natal</h2>
				</div>
			</div>
			<?php 
			$args = array('category_name' => 'ceia-de-natal', 'orderby' => 'title');
			$query = new WP_Query( $args );
			$contador = 1;
			?>	

			<?php if ( $query->have_posts() ) : ?>
				<div class="row text-left">
				<?php while ( $query->have_posts() ) : $query->the_post(); 
					if($contador % 2 == 0):
				?>
					<div class="col-md-6">
						<article>
							<h4 class="cor-base"><?php the_title(); ?></h4>
							<p><?php the_content( ); ?></p>
						</article>
					</div>
					</div><div class="row text-left">
				<?php 
					else:
				?>
					<div class="col-md-6">
						<article>
							<h4 class="cor-base"><?php the_title(); ?></h4>
							<p><?php the_content( ); ?></p>
						</article>
					</div>									
				<?php 
					endif;
				$contador++;
				endwhile; ?>
				</div>	
			<?php endif; ?><br><br>
			<div class="row">
				<div class="col-md-12">
					<h2 class="redes text-left">Sobremesas</h2>
				</div>
			</div>
			<?php 
			$args = array('category_name' => 'ceia-de-natal-sobremesas', 'orderby' => 'title');
			$query = new WP_Query( $args );
			$contador = 1;
			?>	

			<?php if ( $query->have_posts() ) : ?>
				<div class="row text-left">
				<?php while ( $query->have_posts() ) : $query->the_post(); 
					if($contador % 2 == 0):
				?>
					<div class="col-md-6">
						<article>
							<h4 class="cor-base"><?php the_title(); ?></h4>
							<p><?php the_content( ); ?></p>
						</article>
					</div>
					</div><div class="row text-left">
				<?php 
					else:
				?>
					<div class="col-md-6">
						<article>
							<h4 class="cor-base"><?php the_title(); ?></h4>
							<p><?php the_content( ); ?></p>
						</article>
					</div>									
				<?php 
					endif;
				$contador++;
				endwhile; ?>
				</div>	
			<?php endif; ?>					
		</div>

	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
