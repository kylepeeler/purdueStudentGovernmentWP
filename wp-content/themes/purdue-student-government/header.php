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

<!--					<ul class="nav navbar-nav pull-xs-right">-->
<!--<!--						<li class="nav-item btn-group active">-->-->
<!--<!--						<a class="dropdown-toggle nav-link" id="dropdownExecutive" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->-->
<!--<!--						Executive-->-->
<!--<!--						</a>-->-->
<!--<!--						<div class="dropdown-menu" aria-labelledby="dropdownExecutive">-->-->
<!--<!--						<a class="dropdown-item" href="#">Action</a>-->-->
<!--<!--						<a class="dropdown-item" href="#">Another action</a>-->-->
<!--<!--						<a class="dropdown-item" href="#">Something else here</a>-->-->
<!--<!--						</div>-->-->
<!--<!--						</li>-->-->
<!--<!--						<li class="nav-item btn-group">-->-->
<!--<!--						<a class="dropdown-toggle nav-link" id="dropdownLegislative" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->-->
<!--<!--						Legislative-->-->
<!--<!--						</a>-->-->
<!--<!--						<div class="dropdown-menu" aria-labelledby="dropdownLegislative">-->-->
<!--<!--						<a class="dropdown-item" href="#">Action</a>-->-->
<!--<!--						<a class="dropdown-item" href="#">Another action</a>-->-->
<!--<!--						<a class="dropdown-item" href="#">Something else here</a>-->-->
<!--<!--						</div>-->-->
<!--<!--						</li>-->-->
<!--<!--						<li class="nav-item btn-group">-->-->
<!--<!--						<a class="dropdown-toggle nav-link" id="dropdownJudicial" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->-->
<!--<!--						Judicial-->-->
<!--<!--						</a>-->-->
<!--<!--						<div class="dropdown-menu" aria-labelledby="dropdownJudicial">-->-->
<!--<!--						<a class="dropdown-item" href="#">Action</a>-->-->
<!--<!--						<a class="dropdown-item" href="#">Another action</a>-->-->
<!--<!--						<a class="dropdown-item" href="#">Something else here</a>-->-->
<!--<!--						</div>-->-->
<!--<!--						</li>-->-->
<!--						<li class="active nav-item btn-group">-->
<!--							<a class="dropdown-toggle nav-link" id="dropdownBranches" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--								Branches-->
<!--							</a>-->
<!--							<div class="dropdown-menu" aria-labelledby="dropdownBranches">-->
<!--								<a class="dropdown-item" href="#">Executive</a>-->
<!--								<a class="dropdown-item" href="#">Legislative</a>-->
<!--								<a class="dropdown-item" href="#">Judicial</a>-->
<!--								<a class="dropdown-item" href="https://www.maxmegamenu.com">(This menu will be a mega menu)</a>-->
<!--							</div>-->
<!--						</li>-->
<!--						<li class="nav-item btn-group">-->
<!--							<a class="dropdown-toggle nav-link" id="dropdownAboutUs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--								About Us-->
<!--							</a>---->
<!--							<div class="dropdown-menu" aria-labelledby="dropdownAboutUs">-->
<!--								<a class="dropdown-item" href="#">Action</a>-->
<!--								<a class="dropdown-item" href="#">Another action</a>-->
<!--								<a class="dropdown-item" href="#">Something else here</a>-->
<!--							</div>-->
<!--						</li>-->
<!--						<li class="nav-item btn-group">-->
<!--							<a class="dropdown-toggle nav-link" id="dropdownFundingFinances" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--								Funding & Finances-->
<!--							</a>-->
<!--							<div class="dropdown-menu" aria-labelledby="dropdownFundingFinances">-->
<!--								<a class="dropdown-item" href="#">Action</a>-->
<!--								<a class="dropdown-item" href="#">Another action</a>-->
<!--								<a class="dropdown-item" href="#">Something else here</a>-->
<!--							</div>-->
<!--						</li>-->
<!--						<li class="nav-item btn-group">-->
<!--							<a class="dropdown-toggle nav-link" id="dropdownStudentResources" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--								Student Resources-->
<!--							</a>-->
<!--							<div class="dropdown-menu" aria-labelledby="dropdownStudentResources">-->
<!--								<a class="dropdown-item" href="#">Action</a>-->
<!--								<a class="dropdown-item" href="#">Another action</a>-->
<!--								<a class="dropdown-item" href="#">Something else here</a></div>-->
<!--						</li>-->
<!--						<li class="nav-item btn-group">-->
<!--							<a class="dropdown-toggle nav-link" id="dropdownNewsroom" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--								Newsroom-->
<!--							</a>-->
<!--							<div class="dropdown-menu" aria-labelledby="dropdownNewsroom">-->
<!--								<a class="dropdown-item" href="#">Action</a>-->
<!--								<a class="dropdown-item" href="#">Another action</a>-->
<!--								<a class="dropdown-item" href="#">Something else here</a>-->
<!--							</div>-->
<!--						</li>-->
<!--					</ul>-->
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