<?php
get_header(); 
$upload_dir = wp_upload_dir();
?>
<div id="content">
	<section id="atelie-menu" class="margin-delivery">
		<h1 class="title-full small"><div class="animated bounceIn">Delivery</div></h1>
		<div class="container">
			<br>
			<h2 class="redes text-left">Confira o cardápio da semana do nosso Delivery</h2>
			<h5 class="text-left">Faça o seu pedido através do telefone 11 3106-4470 ou 11 3106-1544 e receba aonde você estiver*.</h5><br>
			<br>
			<div class="row">		
				<?php putRevSlider( "banner-delivery" ) ?>
			</div><br><br>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="detalhes-delivery">
						<h4>Nosso Endereço:</h4>
						<p>
							Rua São Bento, 545 - 1º andar / São Bento - São Paulo - SP
						</p>
						<h4>Área de Atendimento:</h4>
						<p>Confira no mapa ao lado</p>
						<h4>Horário de Funcionamento:</h4>
						<p>De segunda à sexta das 11h às 15h.</p>
						<h4>Nossos Telefones:</h4>
						<p>11 3106-4470 / 11 3106-1544</p>
					</div>
				</div>
				<div class="col-md-6 videoWrapper">
					<iframe src="https://www.google.com/maps/d/embed?mid=1TW1IRAi2IO_O8Q6thAmPpniA82c" width="640" height="640"></iframe>
				</div>
			</div><br><br>
			<div class="tab-content text-left" >
				<?php 
				$args = array('category_name' => 'delivery', 'orderby' => 'title','orderby' => 'ID', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
					
					<?php /* Start the Loop */ ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); 
					?>
						<div class="row"><div class="col-md-12"><article><h4 class="cor-base"><?php the_title(); ?></h4><p><?php the_content( ); ?></p></article></div></div>

					<?php 

					endwhile; ?>
					
				<?php endif; ?>
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
