<?php
/**
 * Template part for displaying fileupload content in fileupload.php.
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
				//check if we have a file upload section to output
				if (have_rows('file_upload_sections')):
					while (have_rows('file_upload_sections')): the_row();?>
						<div class="faq-question panel panel-default">
							<div class="panel-heading faq-heading">
								<h4 class="panel-title faq-qtitle"><?php the_sub_field('file_upload_section_title')?>
									<i class="faq-chevron fa fa-chevron-circle-down" aria-hidden="true"></i>
								</h4>
							</div>
						<?php
						//check if we have any files
						if (have_rows('files')){?>
						<div class="panel-body faq-body">
							<ul class="fileList">
							<?php while(have_rows('files')): the_row();?>
								<?php $theFile = get_sub_field('file');?>
								<li>	<a href="<?php echo $theFile['url']; ?>"><?php echo $theFile['title']; ?></a>
								</li>
								<?php endwhile;?>
							</ul>

						</div>
						<?php
						}
						?>
</div>
<br>
				<?php
					endwhile;?>
<style>
								.fileList{
									list-style-type: none;
								}
								.fileList li:before{
									font-family: 'FontAwesome';
									content: '\f15b';
									margin:0 5px 0 -15px;
									color: #000;
								}

							</style>

				<?php endif;
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'purdue-student-government' ),
					'after'  => '</div>',
				) );
				?>
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
