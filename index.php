<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<?php putRevSlider( "banner-index" ) ?>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
