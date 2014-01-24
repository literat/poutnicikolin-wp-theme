<?php
/**
 * The template for displaying posts in the Link Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package WordPress
 * @subpackage Poutnici_Kolin
 * @since Poutnici Kolin 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<hgroup>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'poutnicikolin' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<h3 class="entry-format"><?php _e( 'Link', 'poutnicikolin' ); ?></h3>
			</hgroup>

			<?php if ( comments_open() && ! post_password_required() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'poutnicikolin' ) . '</span>', _x( '1', 'comments number', 'poutnicikolin' ), _x( '%', 'comments number', 'poutnicikolin' ) ); ?>
			</div>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'poutnicikolin' ) ); ?>
			<?php //wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'poutnicikolin' ) . '</span>', 'after' => '</div>' ) ); ?>
			<?php wp_pagenavi( array( 'type' => 'multipart' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php poutnicikolin_posted_on(); ?>
			<?php if ( comments_open() ) : ?>
			<span class="sep"> | </span>
			<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'poutnicikolin' ) . '</span>', __( '<b>1</b> Reply', 'poutnicikolin' ), __( '<b>%</b> Replies', 'poutnicikolin' ) ); ?></span>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'poutnicikolin' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- #entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
