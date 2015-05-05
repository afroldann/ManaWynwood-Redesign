<?php
/**
 * @package MANAWYNWOOD&WORDPRESS
 * @subpackage MANAWYNWOOD
 * @since MANAWYNWOOD 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="row hfeed">
		<header id="masthead" class="header large-12 columns" role="banner" style="top: 30px; opacity: 0">
			<div class="row onScrolled">
				<div class="large-12 columns">
					<a class="logo home-link large-5 columns" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					
					<div id="navbar" class="large-7 columns nav-bar">
						<nav id="site-navigation" class="navigation main-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
						</nav>
					</div>
					<div class="social-menu large-12 columns">
						<?php wp_nav_menu( array('menu' => 'social-menu' )); ?>
						<?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?>
					</div>
				</div>
			</div>
		</header>
		<section id="jSplash">
			<section class="selected animated fadeIn">
				<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="123px" height="123px" viewBox="0 0 123 123" enable-background="new 0 0 123 123" xml:space="preserve">
					<rect width="123" height="123"/>
					<polygon fill="#FFFFFF" points="24,17 24,100 24,106 30,106 30,31 55.752,105 82,30.259 82,106 88,106 88,17 81,17 56.5,88.668 
							31.515,17 		"/>
					<polygon fill="#FFFFFF" points="35,17 35,100 35,106 41,106 41,31 66.752,105 93,30.259 93,106 99,106 99,17 92,17 67.5,88.668 
							42.515,17 		"/>
				</svg>
			</section>
		</section>
		<div id="main" style="opacity: 0; top: 30px" class="large-12 columns site-main">
