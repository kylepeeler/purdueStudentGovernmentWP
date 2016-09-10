<?php
/**
 * The front page of the website
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
<div id="front-page" class="site">
	<header>
		<section class="hero parallax-window" data-parallax="scroll" data-image-src="<?=get_template_directory_uri();?>/images/loeb copy.jpg">
			<div class="container-fluid">
				<div class="psgLogo">
					<a href="#">
						<img src="<?=get_template_directory_uri();?>/images/psgLogoYellowBG.png" class="img-fluid">
					</a>
				</div>
				<br>
				<h1 class="text-xs-center">Purdue Student Government</h1>
			</div>
		</section>
	</header>
	<section class="delve" >
		<div class="container">
			<div class="row section-title">
				<h2>Delve.</h2>
				<hr>
			</div>
			<div class="row icon-row">

				<div class="col-lg-4">
					<!-- colored -->
					<div class="ih-item circle colored effect3 bottom_to_top">
						<div class="img"><span class="fa fa-institution"></span><br><h4>Executive</h4>
						</div>
						<div class="info">
							<ul>
								<li><a href="executive/executive-members/">Executive Members</a></li>
								<li><a href="executive/board-of-directors/">Board of Directors</a></li>
								<li><a href="executive/administration-initiatives/">Administration Initiatives</a></li>
								<li><a href="executive/external-student-representation/">External Student Representation</a></li>
							</ul>
						</div>
					</div>
					<!-- end colored -->
				</div>


				<div class="col-lg-4">
					<!-- colored -->
					<div class="ih-item circle colored effect3 bottom_to_top">
						<div class="img"><span class="fa fa-pencil"></span><br><h4>Legislative</h4>
						</div>
						<div class="info">
							<ul>
								<li><a href="legislative/student-senate/">Student Senate</a></li>
								<li><a href="legislative/committees/">Committees</a></li>
								<li><a href="legislative/upcoming-meetings/">Upcoming Meetings</a></li>
								<li><a href="legislative/minutes-and-voting-records/">Minutes and Voting Records</a></li>
								<li><a href="legislative/enacted-legislation/">Enacted Legislation</a></li>
							</ul>
						</div>
					</div>
					<!-- end colored -->
				</div>


				<div class="col-lg-4">
					<!-- colored -->
					<div class="ih-item circle colored effect3 bottom_to_top">
						<div class="img"><span class="fa fa-legal"></span><br><h4>Judicial</h4>
						</div>
						<div class="info">
							<ul>
								<li><a href="judicial/court-cases/">Court Cases</a></li>
								<li><a href="judicial/file-a-case-or-motion/">File a Case or Motion</a></li>
								<li><a href="judicial/purdue-student-supreme-court/">Purdue Student Supreme Court</a></li>
								<li><a href="judicial/university-rules-and-regulations/">University Rules and Regulations</a></li>
							</ul>
						</div>
					</div>
					<!-- end colored -->
				</div>
			</div>


			<div class="row icon-row">
				<div class="col-lg-3">
					<!-- colored -->
					<div class="ih-item circle colored effect3 bottom_to_top">
						<div class="img"><span class="fa fa-user"></span><br><h4>About Us</h4>
						</div>
						<div class="info">
							<ul>
								<li><a href="about-us/who-we-are/">Who We Are</a></li>
								<li><a href="about-us/history/">History</a></li>
								<li><a href="about-us/governing-documents/">Governing Documents</a></li>
								<li><a href="about-us/faq/">FAQ</a></li>
							</ul>
						</div>
					</div>
					<!-- end colored -->
				</div>
				<div class="col-lg-3">
					<!-- colored -->
					<div class="ih-item circle colored effect3 bottom_to_top">
						<div class="img"><span class="fa fa-dollar"></span><br><h4>Funding &<br> Finances</h4>
						</div>
						<div class="info">
							<ul>
								<li><a href="funding-and-finances/organization-budget/">Organization Budget</a></li>
								<li><a href="funding-and-finances/apply-for-funding/">Apply for Funding</a></li>
								<li><a href="funding-and-finances/psg-scholarships/">PSG Scholarships</a></li>
								<li><a href="funding-and-finances/funding-faq/">Funding FAQ</a></li>
							</ul>
						</div>
					</div>
					<!-- end colored -->

				</div>
				<div class="col-lg-3">
					<!-- colored -->
					<div class="ih-item circle colored effect3 bottom_to_top">
						<div class="img"><span class="fa fa-book"></span><br><h4>Student <br>Resources</h4>
						</div>
						<div class="info info-small">
							<ul>
								<li><a href="student-resources/campus-safety-task-force/">Campus Safety Task Force</a></li>
								<li><a href="student-resources/presidents-roundtable/">Presidents’ Roundtable</a></li>
								<li><a href="student-resources/psg-applications-and-elections/">PSG Applications and Elections</a></li>
								<li><a href="student-resources/purdue-university-student-health-push/">PUSH</a></li>
								<li><a href="student-resources/caps/">CAPS</a></li>
								<li><a href="student-resources/student-legal-services-sls/">Student Legal Services</a></li>
								<li><a href="student-resources/purdue-university-financial-aid/">Purdue University Financial Aid</a></li>
								<li><a href="student-resources/boilerlink/">Boilerlink</a></li>
							</ul>
						</div>
					</div>
					<!-- end colored -->
				</div>
				<div class="col-lg-3">
					<!-- colored -->
					<div class="ih-item circle colored effect3 bottom_to_top">
						<div class="img"><span class="fa fa-newspaper-o"></span><br><h4>Newsroom</h4>
						</div>
						<div class="info">
							<ul>
								<li><a href="./hello-world">Hello World</a></li>
								<li><a href="#">Link 2</a></li>
								<li><a href="#">Link 3</a></li>
							</ul>
						</div>
					</div>
					<!-- end colored -->
				</div>
			</div>
		</div>
	</section>
	<section class="explore">
		<div class="container">
			<div class="row">

				<div class="section-title col-xs-12">
					<h2 class="white">Explore.</h2>
					<hr>
				</div>
				<div class="col-sm-6 text-center">
					<div class="counter-icon">
                    <span class="fa fa-magic">
                    </span>
					</div>
					<div class="counter-text">
						<h3 class="counter">
							63
						</h3>
						<span>Monsters Created</span>
					</div>
				</div>
				<div class="col-sm-6 text-center">
					<div class="counter-icon">
                        <span class="fa fa-money">
                        </span>
					</div>
					<div class="counter-text">
						<h3 class="counter">
							100,000
						</h3>
						<span>Grants Awarded</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="m-x-auto" style="width: 170px;">
					<button type="button" class="btn btn-lg btn-outline-secondary">Apply Now!</button>
				</div>
			</div>
		</div>
	</section>
	<section class="engage">
		<div class="container">
			<div class="row section-title">
				<h2>Engage.</h2>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3 class="text-center event-category"><span class="fa fa-calendar"></span> Meetings</h3>
					<div class="event">
						<div class="event-date">
							<div class="event-month">
								May
							</div>
							<div class="event-day">29</div>
						</div>
						<div class="event-title">
							Meeting 1
						</div>
						<div class="event-desc">
							Event description. Lorem ipsum dolar set amet.
						</div>
					</div>
					<div class="event">
						<div class="event-date">
							<div class="event-month">
								July
							</div>
							<div class="event-day">4</div>
						</div>
						<div class="event-title">
							Meeting 2
						</div>
						<div class="event-desc">
							Event description. Lorem ipsum dolar set amet.
						</div>
					</div>
					<div class="event">
						<div class="event-date">
							<div class="event-month">
								August
							</div>
							<div class="event-day">31</div>
						</div>
						<div class="event-title">
							Meeting 3
						</div>
						<div class="event-desc">
							Event description. Lorem ipsum dolar set amet.
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h3 class="text-center event-category"><span class="fa fa-group"></span> Events</h3>
					<div class="event">
						<div class="event-date">
							<div class="event-month">
								May
							</div>
							<div class="event-day">29</div>
						</div>
						<div class="event-title">
							Event 1
						</div>
						<div class="event-desc">
							Event description. Lorem ipsum dolar set amet.
						</div>
					</div>
					<div class="event">
						<div class="event-date">
							<div class="event-month">
								July
							</div>
							<div class="event-day">4</div>
						</div>
						<div class="event-title">
							Event 2
						</div>
						<div class="event-desc">
							Event description. Lorem ipsum dolar set amet.
						</div>
					</div>
					<div class="event">
						<div class="event-date">
							<div class="event-month">
								August
							</div>
							<div class="event-day">31</div>
						</div>
						<div class="event-title">
							Event 3
						</div>
						<div class="event-desc">
							Event description. Lorem ipsum dolar set amet.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="unite">
		<div class="container">
			<div class="row section-title">
				<h2 class="white">Unite.</h2>
				<hr>
			</div>
			<div class="row text-center">
				<div class="col-md-12">
					<p class="white">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In neque sem, condimentum sed posuere vel, condimentum eu nisi. Suspendisse vitae ullamcorper ligula. Curabitur ut ullamcorper augue, a malesuada nibh. Aenean fermentum nisi mollis, bibendum eros et, tristique neque. Aliquam posuere vehicula nibh vel lobortis. In nec vulputate lorem, sed pharetra dui. Proin elit arcu, gravida ornare ligula sit amet, blandit semper dui. Nulla sollicitudin justo eu nisl ultricies fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					<p class="white">
						Aliquam blandit arcu non magna vestibulum, at rhoncus elit ultrices. Donec convallis luctus bibendum. Vestibulum placerat vehicula arcu ac condimentum. Duis volutpat mauris sed eros congue, nec porta arcu dapibus. Proin fermentum porta fringilla. Suspendisse molestie laoreet purus, sed lacinia tellus pellentesque in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</div>
				<div class="signature col-xs-6 col-md-4 white">
					<img src="<?=get_template_directory_uri();?>/images/GDSigWhite.png" class="img-fluid">
					<br>
					Geri Denger, Student Body President
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();