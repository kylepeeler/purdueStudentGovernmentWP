<?php
/**
 * The header for our theme. NOTE: THIS IS NOT DISPLAYED ON THE FRONT PAGE ONLY CONTENT SECTIONS
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Purdue_Student_Government
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
<div id="page" class="site">
	<header class="site-header">
		<div class="nav-container container-fluid" style="background-color: #141414;">
			<div class="container">
			<nav class="navbar navbar-dark bg-inverse">
					<a class="navbar-brand" href="<?=get_site_url();?>"><img src="<?=get_template_directory_uri();?>/images/psgLogoYellowBG.png" class="logo"> Purdue Student Government</a>
					<div class="nav navbar-nav pull-xs-right">
						<?php wp_nav_menu( array( 'theme_location' => 'content') ); ?>
					</div>
			</nav>
			</div>
		</div>
		<?php
		if ( !has_post_thumbnail() ):
		?>
			<div class="parallax-window" data-parallax="scroll" data-image-src="<?=get_template_directory_uri();?>/images/campus-scene1.jpg"></div>
		<?php else: ?>
			<div class="parallax-window" data-parallax="scroll" data-image-src="<?=the_post_thumbnail_url();?>"></div>
		<?php endif;?>
	</header><!-- #masthead -->