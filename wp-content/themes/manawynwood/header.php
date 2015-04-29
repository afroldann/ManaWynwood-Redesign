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
		<header id="masthead" class="header large-12 columns" role="banner">
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

		<div id="main" class="large-12 columns site-main">
