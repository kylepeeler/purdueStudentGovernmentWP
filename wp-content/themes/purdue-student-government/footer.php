<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Purdue_Student_Government
 */

?>

<footer>
	<div class="container footer-1-3">
		<div class="pull-left col-md-4">
			<div class="footer-logo-wrapper">
				<img src="<?=get_template_directory_uri();?>/images/psgLogoYellowBG.png" class="brand-img img-fluid">
				<span>Purdue Student Government</span>
			</div>
			<ul class="social social-light">
				<li>
					<a href="<?php the_field('facebook_url', 5);?>" target="_blank"><i class="fa fa-2x fa-facebook"></i></a>
				</li>
				<li>
					<a href="<?php the_field('twitter_url', 5);?>" target="_blank"><i class="fa fa-2x fa-twitter"></i></a>
				</li>
				<li>
					<a href="<?php the_field('instagram_url', 5);?>" target="_blank"><i class="fa fa-2x fa-instagram"></i></a>
				</li>
				<li>
					<a href="<?php the_field('youtube_url', 5);?>" target="_blank"><i class="fa fa-2x fa-youtube"></i></a>
				</li>
<!--				<li>-->
<!--					<a href="#"><i class="fa fa-2x fa-pinterest"></i></a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#"><i class="fa fa-2x fa-behance"></i></a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#"><i class="fa fa-2x fa-dribbble"></i></a>-->
<!--				</li>-->
			</ul>
			<!-- /.social -->
		</div>
		<div class="col-md-3 pull-right">
			<?php the_field('footer_contact_information', 5);?>
		</div>
		<div class="col-xs-12 footer-text">
			<p>© 2016 Purdue Student Government<br></p>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
