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
							<?php if(have_rows('executive_bubble_pages')):?>
								<?php while(have_rows('executive_bubble_pages')): the_row()?>
									<?php
									$menu_page_id = get_sub_field('executive_bubble_page', false, false);
									?>
									<?php if($menu_page_id):?>
										<li><a href="<?php echo get_the_permalink($menu_page_id);?>"><?php echo get_the_title($menu_page_id); ?></a></li>
									<?php endif;?>
								<?php endwhile;?>
							<?php endif;?>
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
								<?php if(have_rows('legislative_bubble_pages')):?>
									<?php while(have_rows('legislative_bubble_pages')): the_row()?>
										<?php
										$menu_page_id = get_sub_field('legislative_bubble_page', false, false);
										?>
										<?php if($menu_page_id):?>
											<li><a href="<?php echo get_the_permalink($menu_page_id);?>"><?php echo get_the_title($menu_page_id); ?></a></li>
										<?php endif;?>
									<?php endwhile;?>
								<?php endif;?>
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
								<?php if(have_rows('judicial_bubble_pages')):?>
									<?php while(have_rows('judicial_bubble_pages')): the_row()?>
										<?php
										$menu_page_id = get_sub_field('judicial_bubble_page', false, false);
										?>
										<?php if($menu_page_id):?>
											<li><a href="<?php echo get_the_permalink($menu_page_id);?>"><?php echo get_the_title($menu_page_id); ?></a></li>
										<?php endif;?>
									<?php endwhile;?>
								<?php endif;?>
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
								<?php if(have_rows('about_us_bubble_pages')):?>
									<?php while(have_rows('about_us_bubble_pages')): the_row()?>
										<?php
										$menu_page_id = get_sub_field('about_us_bubble_page', false, false);
										?>
										<?php if($menu_page_id):?>
											<li><a href="<?php echo get_the_permalink($menu_page_id);?>"><?php echo get_the_title($menu_page_id); ?></a></li>
										<?php endif;?>
									<?php endwhile;?>
								<?php endif;?>
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
								<?php if(have_rows('funding_finances_bubble_pages')):?>
									<?php while(have_rows('funding_finances_bubble_pages')): the_row()?>
										<?php
										$menu_page_id = get_sub_field('funding_finances_bubble_page', false, false);
										?>
										<?php if($menu_page_id):?>
											<li><a href="<?php echo get_the_permalink($menu_page_id);?>"><?php echo get_the_title($menu_page_id); ?></a></li>
										<?php endif;?>
									<?php endwhile;?>
								<?php endif;?>
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
						<div class="info">
							<ul>
								<?php if(have_rows('student_resources_bubble_pages')):?>
									<?php while(have_rows('student_resources_bubble_pages')): the_row()?>
										<?php
										$menu_page_id = get_sub_field('student_resources_bubble_page', false, false);
										?>
										<?php if($menu_page_id):?>
											<li><a href="<?php echo get_the_permalink($menu_page_id);?>"><?php echo get_the_title($menu_page_id); ?></a></li>
										<?php endif;?>
									<?php endwhile;?>
								<?php endif;?>
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
								<?php if(have_rows('newsroom_bubble_pages')):?>
									<?php while(have_rows('newsroom_bubble_pages')): the_row()?>
										<?php
										$menu_page_id = get_sub_field('newsroom_bubble_page', false, false);
										?>
										<?php if($menu_page_id):?>
											<li><a href="<?php echo get_the_permalink($menu_page_id);?>"><?php echo get_the_title($menu_page_id); ?></a></li>
										<?php endif;?>
									<?php endwhile;?>
								<?php endif;?>
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
                    <span class="fa <?php the_field('explore_left_icon');?>">
                    </span>
					</div>
					<div class="counter-text">
						<h3 class="counter">
							<?php the_field('explore_left_counter_value');?>
						</h3>
						<span><?php the_field('explore_left_counter_text');?></span>
					</div>
				</div>
				<div class="col-sm-6 text-center">
					<div class="counter-icon">
                        <span class="fa <?php the_field('explore_right_icon');?>">
                        </span>
					</div>
					<div class="counter-text">
						<h3 style="display: inline-block; font-size: 44px">$</h3><h3 style="display: inline-block;" class="counter">
							<?php the_field('explore_right_counter_value');?>
						</h3><br>
						<span><?php the_field('explore_right_counter_text');?></span>
					</div>
				</div>
			</div>
			<?php if(get_field('explore_show_button')):?>
			<div class="row">
				<div class="m-x-auto" style="width: 170px;">
					<a href="<?php the_field('explore_button_link');?>">
						<button type="button" class="btn btn-lg btn-outline-secondary"><?php the_field('explore_button_text')?></button>
					</a>
				</div>
			</div>
			<?php endif;?>
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
					<?php if(have_rows('engage_meetings')):?>
						<?php while(have_rows('engage_meetings')): the_row()?>
							<div class="event">
								<div class="event-date">
									<div class="event-month">
										<?php the_sub_field('meeting_month')?>
									</div>
									<div class="event-day">
										<?php the_sub_field('meeting_day');?>
									</div>
								</div>
								<div class="event-title">
									<?php the_sub_field('meeting_title');?>
								</div>
								<div class="event-desc">
									<?php the_sub_field('meeting_description');?>
								</div>
							</div>
						<?php endwhile;?>
					<?php endif;?>
				</div>
				<div class="col-md-6">
					<h3 class="text-center event-category"><span class="fa fa-group"></span> Events</h3>
					<?php if(have_rows('engage_events')):?>
						<?php while(have_rows('engage_events')): the_row()?>
							<div class="event">
								<div class="event-date">
									<div class="event-month">
										<?php the_sub_field('meeting_month')?>
									</div>
									<div class="event-day">
										<?php the_sub_field('meeting_day');?>
									</div>
								</div>
								<div class="event-title">
									<?php the_sub_field('meeting_title');?>
								</div>
								<div class="event-desc">
									<?php the_sub_field('meeting_description');?>
								</div>
							</div>
						<?php endwhile;?>
					<?php endif;?>
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
					<?php the_field('unite_letter');?>
				</div>
				<div class="signature col-xs-6 col-md-4 white">
					<img src="<?=get_template_directory_uri();?>/images/GDSigWhite.png" class="img-fluid">
					<br>
					Geri Denger, Student Body President
				</div>
			</div>
		</div>
	</section>
	<section class="connect">
		<div class="container">
			<div class="row section-title">
				<h2>Connect.</h2>
				<hr>
				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
					<form action="//purduesg.us14.list-manage.com/subscribe/post?u=b9b27806d6060e59d3cfaf6c2&amp;id=b733838c2f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
							<h2>Subscribe to our mailing list</h2>
							<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
							<div class="mc-field-group">
								<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
								</label>
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
							</div>
							<div class="mc-field-group">
								<label for="mce-FNAME">First Name </label>
								<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
							</div>
							<div class="mc-field-group">
								<label for="mce-LNAME">Last Name </label>
								<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
							</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b9b27806d6060e59d3cfaf6c2_b733838c2f" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						</div>
					</form>
				</div>
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
			</div>

		</div>
	</section>

<?php
get_footer();
