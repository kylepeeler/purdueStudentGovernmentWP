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
				?>
				<h1 style="display: inline-block; font-weight: bold;">N</h1>
<h2 style="display: inline-block;">ew methods of engagement</h2>
<?php the_field('n_paragraph');?><a href="#" onclick='$(".n-more").slideToggle(); return false;'>Read More</a><br>
<div class="n-more"><?php the_field('n_read_more');?></div>
&nbsp;
<h1 style="display: inline-block; font-weight: bold;">O</h1>
<h2 style="display: inline-block;">pportunity for growth</h2>
<?php the_field('o_paragraph');?><a href="#" onclick='$(".o-more").slideToggle(); return false;'>Read More</a><br>
<div class="o-more"><?php the_field('o_read_more');?></div>
&nbsp;
<h1 style="display: inline-block; font-weight: bold;">W</h1>
<h2 style="display: inline-block;">orking towards awareness</h2>
<?php the_field('w_paragraph');?><a href="#" onclick='$(".w-more").slideToggle(); return false;'>Read More</a><br>
<div class="w-more"><?php the_field('w_read_more');?></div>
				<?php
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
