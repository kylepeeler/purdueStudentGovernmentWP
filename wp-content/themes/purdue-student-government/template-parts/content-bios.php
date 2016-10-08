<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Purdue_Student_Government
 */

?>

<?php $showSidebar = get_field('show_sidebar');?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid page-header-img entry-header">
		<div class="row">
			<div class="section-title col-xs-12">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<hr>
			</div>
		</div>
	</div>

	<div class="container content entry-content">
		<div class="row">
			<div class="<?if ($showSidebar) { echo 'col-md-8'; } else { echo 'col-md-12'; } ;?>">
				<style>
				a.social-link{
					color: #000;
					text-decoration: none;
					margin-right: 5px;
				}
				</style>
				<?php
				the_content();
				//check if we have a faq section to output
				if (have_rows('biography_section')):
					while(have_rows('biography_section')): the_row();?>
					<h3 style="text-align: center; font-weight: bold; font-size: 38px; text-decoration: underline; margin-bottom: 25px;"><?php the_sub_field('section_title');?></h3>
					<?php if (have_rows('biographies')):
					echo '<div class="row" style="margin-bottom: 10px;">';
						while (have_rows('biographies')): the_row();?>
								<div class="bio col-md-4"><img src="<?php the_sub_field('bio_picture');?>" class="img-circle" style="display: block; margin-left: auto; margin-right: auto;" width="230px">
									<h3 style="text-align: center; font-weight: bold"><?php the_sub_field('name');?> <span class="bio-expand-status">+</span></span></h3>
									<h5 style="text-align: center;"><?php the_sub_field('title');?></h5>
									<div class="bio-desc">
										<?php the_sub_field('description');?>
										<div class="contact-icons" style="text-align: center">
										<?php if(!empty(get_sub_field('facebook'))):?>
										<a href="<?php echo get_sub_field('facebook')?>" class="social-link">
											<i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i>
										</a>
									<?php endif;?>
									<?php if(!empty(get_sub_field('twitter'))):?>
										<a href="<?php echo get_sub_field('twitter')?>" class="social-link">
											<i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i>
										</a>
									<?php endif;?>
									<?php if(!empty(get_sub_field('linkedin'))):?>
										<a href="<?php echo get_sub_field('linkedin')?>" class="social-link">
											<i class="fa fa-2x fa-linkedin-square" aria-hidden="true"></i>
										</a>
									<?php endif;?>
									<?php if(!empty(get_sub_field('email'))):?>
										<a href="mailto:<?php echo get_sub_field('email')?>" class="social-link">
											<i class="fa fa-2x fa-envelope" aria-hidden="true" ></i>
										</a>
									<?php endif;?>
									</div>
									</div>
								</div>
					<?php
						endwhile;
					echo '</div>';
				endif;?>
				<hr>
			<?php endwhile; endif;?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'purdue-student-government' ),
					'after'  => '</div>',
				) );
				?>
				<script>
					$(".bio-desc").hide();
					$(".bio").click(function(){
						$(this).children(".bio-desc").slideToggle();
					});
				</script>
				<?php if ( get_edit_post_link() ) : ?>
					<div class="entry-footer">
						<?php
						edit_post_link(
							sprintf(
							/* translators: %s: Name of current post */
								esc_html__( 'Edit %s', 'purdue-student-government' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<span class="edit-link">',
							'</span>'
						);
						?>
					</div><!-- .entry-footer -->
				<?php endif; ?>
			</div>
			<?php if ($showSidebar):?>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			<?php endif;?>
		</div>
	</div>

</article><!-- #post-## -->
