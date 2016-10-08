<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Purdue_Student_Government
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php
	if ( is_single() ) :?>
		<div class="container-fluid page-header-img entry-header">
			<div class="row">
				<div class="section-title col-xs-12">
					<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
				</div>
			</div>
		</div>
	<?php endif;?>



	<div class="container content entry-content">
		<div class="row">
			<div class="col-md-12">
				<?php if (!is_single()):?>
					<?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
				<?php endif;?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php purdue_student_government_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
				<?php
				the_content( sprintf(
				/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'purdue-student-government' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

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
						?>					</div><!-- .entry-footer -->
				<?php endif; ?>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
