<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<?php if(function_exists('social_ring_show')){ social_ring_show();} ?>

					<?php //comments_template( '', true ); ?>
					
					<nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'poutnicikolin' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav"><<</span> Předchozí', 'poutnicikolin' ) ); ?></span> | <span class="nav-next"><?php next_post_link( '%link', __( 'Další <span class="meta-nav">>></span>', 'poutnicikolin' ) ); ?></span>
					</nav><!-- #nav-single -->

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>