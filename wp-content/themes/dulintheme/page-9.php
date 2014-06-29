﻿<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main__head">
			<h1 class="site-title__head">
				<a class="site-title__head-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				</a>
			</h1>
			<div class="wrap-menu wrap-wine wrapper" style="display: block;">
				
				<a href="#" class="logo-link logo-link__wine"></a>

				<nav id="third-navigation" class="site-navigation primary-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'third', 'menu_class' => 'nav-menu__third' ) ); ?>
				</nav>

			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">


<div id="main-content" class="main-content main-content-custom-page">
	<div id="primary" class="content-area">
		<div id="content" class="site-content site-content-custom-page" role="main">
	
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
	
					// Include the page content template.
					get_template_part( 'content', 'page' );
				endwhile;
			?>
	
		</div>
	</div>
</div><!-- #main-content -->

<?php
get_footer();
