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
				<?php
				the_content();
				//check if we have a faq section to output
				if (have_rows('committee_section')):
					while (have_rows('committee_section')): the_row();?>
					<span class="faq-category"><?php the_sub_field('committee_name')?></span>
						<?php
						//check if we have any descriptions
						if (have_rows('descriptions')){
							while(have_rows('descriptions')): the_row();?>
								<div class="faq-question panel panel-default">
									<div class="panel-heading faq-heading">
										<h4 class="panel-title faq-qtitle"><?php the_sub_field('description')?>
										</h4>
									</div>
									<div class="panel-body committee-body">
										<?php
										// check if the repeater field has rows of data
										if( have_rows('members') ):
											echo'<p>Commmittee Members:</p><div class="row">';
										 	// loop through the rows of data
										    while ( have_rows('members') ) : the_row();
												echo '<div class="col-md-4" style="padding-bottom: 10px;">';
										        // display a sub field value
										        echo'<strong>' . get_sub_field('member_name') . '</strong><br>';
														echo get_sub_field('member_position') . '<br>';
														echo '<a href="mailto:' . get_sub_field('member_email') . '">' . get_sub_field('member_email') . "</a>";
												echo '</div>';
										    endwhile;
												echo '</div>';
										else :
										    // no rows found
										endif;
										?>
									</div>
								</div>
							<?php endwhile;
						}
						?>
				<?php
					endwhile;
				endif;
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'purdue-student-government' ),
					'after'  => '</div>',
				) );
				?>

			</div>
			<?php if ($showSidebar):?>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			<?php endif;?>
		</div>
	</div>
</div>

</article><!-- #post-## -->
