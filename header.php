<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header">
		<div class="container">
			<div class="row header-logo">
				<div class="col-md-3">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-fraldas.jpg"; ?>"/></a>
				</div>
				<div class="col-md-offset-6 col-md-3 redes-tel">
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="https://www.youtube.com/user/academiaxtremegold"></a></li>
						<li class="instagram"><a target="_blank" href="https://instagram.com/xtremegoldteamct/"></a></li>
						<li class="twitter"><a target="_blank" href="https://twitter.com/xtremegoldteam"></a></li>
						<li class="facebook"><a target="_blank" href="https://www.facebook.com/xtremegoldteam"></a></li>
					</ul>
					<div class="header-tel">
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/telefone.jpg"; ?>"/> <span>11 <strong>2694-4771</strong></span>
					</div>					
				</div>
			</div><!-- .row -->
			<div class="row header-menu">
				<div class="col-md-12">
					<nav>
						<div class="menu-responsivo">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="<?php echo esc_url( home_url( '/' )."categoria/roupa-infantil" ); ?>">Roupa Infantil</a></li
								><li><a href="<?php echo esc_url( home_url( '/' )."categoria/acessorios-bebe" ); ?>">Acessórios Bebê</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/leite"; ?>">Leite</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/hora-do-banho"; ?>">Hora do Banho</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/categoria/absorvente"; ?>">Absorvente</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/higiene-pessoal"; ?>">Higiene Pessoal</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/bolsas"; ?>">Bolsas</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/fralda-adulto"; ?>">Fralda Adulto</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/fralda-infantil"; ?>">Fralda Infantil</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>">Contato</a></li>
							</ul>								
						</div>
						<ul class="menu-principal">
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/roupa-infantil" ); ?>">Roupa Infantil</a></li
							><li><a href="<?php echo esc_url( home_url( '/' )."categoria/acessorios-bebe" ); ?>">Acessórios Bebê</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/leite"; ?>">Leite</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/hora-do-banho"; ?>">Hora do Banho</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/categoria/absorvente"; ?>">Absorvente</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/higiene-pessoal"; ?>">Higiene Pessoal</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/bolsas"; ?>">Bolsas</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/fralda-adulto"; ?>">Fralda Adulto</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."categoria/fralda-infantil"; ?>">Fralda Infantil</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>">Contato</a></li>
						</ul>
					</nav><!-- #site-navigation -->						
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->


