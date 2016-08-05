<?php
get_header(); 
$upload_dir = wp_upload_dir();
?>
<div id="content">
	<section id="atelie-menu">
		<h1 class="title-full small"><div class="animated bounceIn">Cardápio da Semana</div></h1>
		<div class="container">
			<h2 class="redes text-left">Confira o cardápio da semana do Aroma e Sabor</h2>
			<h5 class="text-left">Escolha entre o Aroma e Sabor da São Bento ou o Aroma e Sabor da Libero Badaró e confira o cardápio da semana.</h5><br>

			<ul class="btn-cardapio clearfix">
				<li><a href="#sao-bento" data-toggle="tab">São Bento</a></li>
				<li><a href="#libero-badaro" data-toggle="tab">Líbero Badaró</a></li>
			</ul><br>
			<div class="tab-content" >
				<?php 
				$args = array('category_name' => 'sao-bento', 'orderby' => 'title','orderby' => 'ID', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<div class="tab-pane fade in" id="sao-bento">
						<div class="row">
					<?php /* Start the Loop */ ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); 
						if($contador % 2 == 0):
					?>
						<div class="col-md-6"><article><h4 class="cor-base"><?php the_title(); ?></h4><p><?php the_content( ); ?></p></article></div>
						</div><div class="row">
					<?php 
						else:
					?>
						<div class="col-md-6"><article><h4 class="cor-base"><?php the_title(); ?></h4><p><?php the_content( ); ?></p></article></div>									
					<?php 
						endif;
					$contador++;
					endwhile; ?>
						</div>
					</div>	
				<?php endif; ?>


				<?php 
				$args = array('category_name' => 'libero-badaro', 'orderby' => 'ID', 'orderby', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<div class="tab-pane fade in" id="libero-badaro">
						<div class="row">
							<?php /* Start the Loop */ ?>
							<?php while ( $query->have_posts() ) : $query->the_post(); 
								if($contador % 2 == 0):
							?>
								<div class="col-md-6"><article><h4 class="cor-base"><?php the_title(); ?></h4><p><?php the_content( ); ?></p></article></div>
								</div><div class="row">
							<?php 
								else:
							?>
								<div class="col-md-6"><article><h4 class="cor-base"><?php the_title(); ?></h4><p><?php the_content( ); ?></p></article></div>									
							<?php 
								endif;
							$contador++;
							endwhile; ?>
						</div>
					</div>	
				<?php endif; ?>
			</div>				
		</div>

	</section>

	<section id="form-contato">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php 
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 8 ); }
					?>
				</div>
				<div class="col-md-6">
					<div class="form-desc">
						<p>
							<strong>Solicite sua encomenda</strong>
							<br>Preencha o formulário ao lado que entraremos em contato com você!						
						</p>
						<div style="border-top:1px solid white; margin-bottom:20px; margin-top:20px;"></div>
						<p>
							<strong>São Bento</strong>
							<br>Rua São Bento, 545 - 1º andar
							<br>São Paulo - SP
							<br>11 3106-4470  |  11 3106-1544
							<br><br>
							<strong>Libero Badaró</strong>
							<br>Rua Libero Badaró, 370
							<br>São Paulo - SP
							<br>11 3101-9907  |  11 3241-0491
						</p>
					</div>
				</div>
			</div><!-- .row -->
		</div>	
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>

<script>
$('.slider1').bxSlider({
    slideWidth: 2000,
    minSlides: 4,
    maxSlides: 4,
    infiniteLoop: false,
    slideMargin: 10,
    controls:false,
	onSliderLoad: function(){
	    $(".bx-clone").children().removeAttr("data-lightbox");
	}
});

</script>
