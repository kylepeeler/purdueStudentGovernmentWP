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

	<div class="container-fluid">
		<div class="container content entry-content">
			<div class="row">
				<div class="<?if ($showSidebar) { echo 'col-md-8'; } else { echo 'col-md-12'; } ;?>">
					<?php
					the_content();

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
	</div>

</article><!-- #post-## -->
