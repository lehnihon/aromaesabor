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

			<div class="tab-content text-left" >
				<?php 
				$args = array('category_name' => 'delivery', 'orderby' => 'title','orderby' => 'ID', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
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
				<?php endif; ?>
			</div>
			<br><br>
			<h2 class="redes text-left">Acompanhamentos</h2>
			<br>
			<div class="tab-content text-left" >
				<?php 
				$args = array('category_name' => 'acompanhamentos', 'orderby' => 'title','orderby' => 'ID', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
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
