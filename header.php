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
<meta name="google-site-verification" content="JRbUjmsCeL21Ij5oqZfB7r1llnyoCOTF_IFZcjZBDm0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header">
		<div class="container">
			<div class="row header-logo">
				<div class="col-md-2 col-md-offset-5 logo-center">
					<div class="menu-responsivo">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Aroma e Sabor</a></li
						><li><a href="<?php echo esc_url( home_url( '/' )."cardapio-semana" ); ?>">Cardápio da Semana</a></li
						><li><a href="<?php echo esc_url( home_url( '/' )."atelie-culinario" ); ?>">Ateliê Culinário</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."eventos"; ?>">Eventos</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>">Fotos</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."blog"; ?>">Blog</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."localizacao"; ?>">Localização</a></li
						><li><a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>">Contato</a></li>
						</ul>								
					</div>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>"/></a>
				</div>
				<div class="col-md-offset-3 col-md-2 redes">
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="#"></a></li>
						<li class="instagram"><a target="_blank" href="https://www.instagram.com/aromasabor/"></a></li>
						<li class="twitter"><a target="_blank" href="#"></a></li>
						<li class="facebook"><a target="_blank" href="https://www.facebook.com/restaurantearomasabor/?fref=ts"></a></li>
					</ul>					
				</div>
			</div><!-- .row -->
			<div class="row header-menu">
				<div class="col-md-12">
					<nav>

						<ul class="menu-principal clearfix">
							<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Aroma e Sabor</a></li
							><li><a href="<?php echo esc_url( home_url( '/' )."cardapio-semana" ); ?>">Cardápio da Semana</a></li
							><li><a href="<?php echo esc_url( home_url( '/' )."atelie-culinario" ); ?>">Ateliê Culinário</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."eventos"; ?>">Eventos</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>">Fotos</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."blog"; ?>">Blog</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."localizacao"; ?>">Localização</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>">Contato</a></li>
						</ul>
					</nav><!-- #site-navigation -->						
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->


