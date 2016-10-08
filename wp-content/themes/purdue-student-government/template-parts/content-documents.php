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
			<div class="<?php if ($showSidebar) { echo 'col-md-8'; } else { echo 'col-md-12'; } ;?>">
				<?php
				the_content();
				?>
				<?php
				// check if the repeater field has rows of data
				if( have_rows('documents') ):
					?>
					<div class="governing-documents">
					<?php
					// loop through the rows of data
				  while ( have_rows('documents') ) : the_row();
					?>
					<a href="<?php the_sub_field('file');?>"><div class="governing-document">
						<i class="fa fa-5x <?php the_sub_field('document_icon');?>" aria-hidden="true"></i><br>
						<?php // display the document name
				      the_sub_field('document_title');?>
					</div></a>
					<?php
				  endwhile;
				else :?>
					</div>
				<?php
			endif;
				?>
				<?php
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

</article><!-- #post-## -->
