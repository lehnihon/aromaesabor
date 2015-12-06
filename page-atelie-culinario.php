<?php
get_header(); 
$upload_dir = wp_upload_dir();
?>

<div id="content">
	<section id="sobre">
		<h1 class="title-full small"><div class="animated bounceIn">Ateliê Culinário</div></h1>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<h4 class="cor-base">Ateliê Culinário</h4>
					<p>O restaurante Aroma e Sabor também tem um Ateliê Culinário. É reconhecido por sua qualidade e sofisticação, perfeito para quem aprecia a simplicidade de uma boa comida.
						<br>Fornecemos bolos, doces, salgados, tortas, pães e lanches de metro.
					</p>
				</div>		
			</div><br>
			<div class="row">
				<div class="col-md-12">
					<img class="img-responsive" src="<?php echo $upload_dir['baseurl']."/banner-home.jpg"; ?>">
					<div class="slider1">
						<div class="slide"><a data-lightbox="prod" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"></a></div>
						<div class="slide"><a data-lightbox="prod" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"></a></div>
						<div class="slide"><a data-lightbox="prod" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"></a></div>
						<div class="slide"><a data-lightbox="prod" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"></a></div>
						<div class="slide"><a data-lightbox="prod" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"></a></div>
						<div class="slide"><a data-lightbox="prod" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"></a></div>
						<div class="slide"><a data-lightbox="prod" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-home.jpg"; ?>"></a></div>
					</div>						
				</div>
			</div>
		</div>
	</section>

	<section id="atelie-menu">
		<div class="container">
			<h1 class="small title-restaurante"><span class="cor-base">Menu Encomendas</span> Ateliê Culinário</h1><br>
			<ul class="btn-atelie clearfix">
				<li><a href="#bebidas" data-toggle="tab">Bebidas/descart.</a></li>
				<li><a href="#paes-tortas" data-toggle="tab">Pães e Tortas</a></li>
				<li><a href="#sanduiches" data-toggle="tab">Sanduiches</a></li>
				<li><a href="#docinhos" data-toggle="tab">Docinhos</a></li>
				<li><a href="#bolos" data-toggle="tab">Bolos</a></li>
				<li><a href="#salgados" data-toggle="tab">Salgados</a></li>
				<li><a href="#ceia-natal" data-toggle="tab">Ceia de Natal</a></li>
			</ul><br>
			<div class="tab-content" >
				<?php 
				$args = array('category_name' => 'bebidas-descart', 'orderby' => 'title', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<div class="tab-pane fade in" id="bebidas">
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
				$args = array('category_name' => 'paes-e-tortas', 'orderby' => 'title', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<div class="tab-pane fade in" id="paes-tortas">
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
				$args = array('category_name' => 'sanduiches', 'orderby' => 'title', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<div class="tab-pane fade in" id="sanduiches">
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
				$args = array('category_name' => 'docinhos', 'orderby' => 'title', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<div class="tab-pane fade in" id="docinhos">
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
				$args = array('category_name' => 'bolos', 'orderby' => 'title', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<div class="tab-pane fade in" id="bolos">
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
				$args = array('category_name' => 'salgados', 'orderby' => 'title', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<div class="tab-pane fade in" id="salgados">
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
				$args = array('category_name' => 'ceia-de-natal', 'orderby' => 'title', 'order' => 'ASC');
				$query = new WP_Query( $args );
				$contador = 1;
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<div class="tab-pane fade in" id="ceia-natal">
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
