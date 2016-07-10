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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78487033-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header-blog">
		<div class="container">
			<div class="row header-logo">
				<div class="col-md-2 col-md-offset-5 logo-center">
					<div class="menu-responsivo">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="<?php echo esc_url( home_url( '/' )."blog"); ?>">Início</a></li
							><li><a href="<?php echo esc_url( home_url( '/' )."categoria-blog/noticias" ); ?>">Notícias</a></li
							><li><a href="<?php echo esc_url( home_url( '/' )."categoria-blog/dicas" ); ?>">Dicas</a></li
							><li><a href="<?php echo esc_url( home_url( '/' )."categoria-blog/receitas" ); ?>">Receitas</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Site Aroma e Sabor</a></li>
						</ul>								
					</div>
					<a href="<?php echo esc_url( home_url( '/' )."blog"); ?>" rel="home"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>"/></a>
				</div>
				<div class="col-md-offset-1 col-md-4 redes">
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="#"></a></li>
						<li class="instagram"><a target="_blank" href="https://www.instagram.com/restaurantearomaesabor/"></a></li>
						<li class="twitter"><a target="_blank" href="#"></a></li>
						<li class="facebook"><a target="_blank" href="https://www.facebook.com/restaurantearomasabor/?fref=ts"></a></li>
					</ul>	
					<form role="search" method="get" class="col-md-12 search-form" action="<?php echo home_url( '/' ); ?>">
						<input type="hidden" name="post_type" value="blog" /><input type="search" class="pesquisar-input" placeholder="<?php echo esc_attr_x( 'Buscar Blog', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" /><input type="image" class="pesquisar-submit" alt="Search"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-buscar.jpg"; ?>" />
					</form>	
				</div>
			</div><!-- .row -->
			<div class="row header-menu">
				<div class="col-md-12">
					<nav>
						<ul class="menu-principal clearfix">
							<li><a href="<?php echo esc_url( home_url( '/' )."blog"); ?>">Início</a></li
							><li><a href="<?php echo esc_url( home_url( '/' )."categoria-blog/noticias" ); ?>">Notícias</a></li
							><li><a href="<?php echo esc_url( home_url( '/' )."categoria-blog/dicas" ); ?>">Dicas</a></li
							><li><a href="<?php echo esc_url( home_url( '/' )."categoria-blog/receitas" ); ?>">Receitas</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Site Aroma e Sabor</a></li>
						</ul>
					</nav><!-- #site-navigation -->						
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->