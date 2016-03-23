<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
    

</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class(); ?>>

	<?php do_action( 'body_top' ); ?>
	
	<!-- By Shanker -->
	<div id="outer-main-container" class="outer-main-container">
		<?php do_action( 'before_header' ); ?>
		<header class="site-header">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo('name')?></a></h1>
			<small><?php if ( get_bloginfo( 'description' ) ) {
						echo '<p class="tagline">' . get_bloginfo( 'description' ) .'</p>';
					} ?>
			</small>
			<div class="social-links">
				<!-- <ul class="social-media-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a><i class="fa fa-youtube"></i></a></li>
                    <li><a><i class="fa fa-linkedin"></i></a></li>
                </ul> -->

                <?php SimplyClean_SocialSites_Show('header'); ?>
			</div>
		</header>
		<?php do_action( 'after_header' ); ?>
		<nav class="main-menu"><?php wp_nav_menu(array('theme_location' => 'primary', 'container' => ''));?></nav>
	