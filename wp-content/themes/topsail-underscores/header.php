<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Topsail Entertainment
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script type="text/javascript" src="http://use.typekit.net/ega0vng.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="header-widget">
			<?php dynamic_sidebar('extra-widget-area'); ?>
		</div>
		<div class="container clearfix">
            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>                    
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white-EDIT.svg" alt="Topsail Logo">
                </a>
            </h1>
            <div class="tagline">
					<p><?php bloginfo("description"); ?></p> 
			</div>
          </div> <!-- end container -->
	</header><!-- #masthead -->
     
	     <nav id="site-navigation" class="main-navigation fixed" role="navigation">
			<button class="menu-toggle"><?php _e( '☰ Menu', '_s' ); ?></button>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'topsail-entertaiment' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation --> 
	
	<div id="content" class="site-content">
