<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bootscores
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="header-wrapper clearfix">

        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding-wrapper"><!--blue wrapper that holds the logo -->
							<div class="container">
								<div class="row">
								<div class="col-xs-9">
									<div class="menu-button">
										 <div class="bar1"></div>
	 								   <div class="bar2"></div>
	 							     <div class="bar3"></div></div>
								 </div>
								 <div class="col-md-12 col-sm-9">
                <h1 class="site-title">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_bloginfo('template_url') ?>/build-images/logo.svg" /></a>&nbsp; <span class="eat-word">Eats.</span></h1>
							</div>
						</div>
						</div>
            </div><!-- .site-branding -->
            <div class="nav-wrapper"><!--blue wrapper that holds Navigation -->
            	<div class="nav-container container">
								<div class="row">
								<div class="col-md-12">
                    <?php   wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 0,
                        'container'         => false,
                        'menu_class'        => 'flexnav',
						'items_wrap'		=>'<ul id="%1$s" class="%2$s" data-breakpoint="800">%3$s</ul>'
                        ));
                    ?>
									</div>
										</div>
                 </div><!--nav-container -->
            </div><!-- nav-wrapper -->
        </header><!-- #masthead -->
	</div><!-- header-wrapper -->

	<div id="content" class="site-content container">
    	<div class="row">
