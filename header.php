<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--lebeda.skauting.cz-->
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="expires" content="<?php echo date("D, d M Y H:i:s", strtotime("+1 week"))." GMT"; ?>">
<meta http-equiv="cache-control" content="max-age=86400, must-revalidate" />
 
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'poutnicikolin' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/poutnicikolin/images/favicon.ico" />
<link rel="icon" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/poutnicikolin/images/favicon.ico" />
</head>

<body <?php body_class(); ?>>

<div class="social">
	<a class="link-facebook" target="_blank" href="http://www.facebook.com/groups/147641411160/" title="Jsme na Facebooku"></a>
	<a class="link-twitter" target="_blank" href="http://www.twitter.com/poutnicikolin" title="YouTube"></a>
	<a class="link-youtube" target="_blank" href="http://www.youtube.com/user/poutnicikolincz" title="YouTube"></a>
	<!--google" target="_blank" href="http://www.youtube.com/user/poutnicikolincz" title="YouTube"></a>
	<a class="link-linkedin" target="_blank" href="http://www.youtube.com/user/poutnicikolincz" title="YouTube"></a>-->
	<a class="link-rss" target="_blank" href="<?php bloginfo('rss2_url'); ?>" title="RSS"></a>
</div>

<div id="page" class="hfeed">

	<header id="branding" role="banner">
			<hgroup>
				<h1 id="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
						<span>&nbsp;</span>
						</a>
				</h1>
				<div style="float:right; font-size:50%; padding-bottom:18px;">
					<h2 style="font-size: 4em; letter-spacing: 1px; height:45px; float:left" id="site-description">
						<a class="link-krizovatka" href="http://krizovatka.skaut.cz/" title="Junák ČR"></a>
						<a class="link-vodni" href="http://vodni.skauting.cz/" title="HKVS"></a>
						<a class="link-poutnici" href="http://www.poutnicikolin.cz/" title="Poutníci Kolín"></a>
						<span><?php bloginfo( 'description' ); ?></span> | 
					</h2>
				</div>
			</hgroup>

			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'poutnicikolin' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'poutnicikolin' ); ?>"><?php _e( 'Skip to primary content', 'poutnicikolin' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'poutnicikolin' ); ?>"><?php _e( 'Skip to secondary content', 'poutnicikolin' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                <div class="menunavigation-logout"><ul><li><?php wp_loginout(); ?></li></ul></div>
			</nav><!-- #access -->

			<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( ! empty( $header_image ) ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
					// The header image
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else : ?>
					<img class="header-image" src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
				<?php endif; // end check for featured image or standard header ?>
			</a>
			<?php endif; // end check for removed header image ?>

			<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="only-search<?php if ( ! empty( $header_image ) ) : ?> with-image<?php endif; ?>">
				<?php //get_search_form(); ?>
				</div>
			<?php
				else :
			?>
				<?php //get_search_form(); ?>
			<?php endif; ?>

			<div style="background: #222; /* Show a solid color for older browsers */
	background: -moz-linear-gradient(#252525, #0a0a0a);
	background: -o-linear-gradient(#252525, #0a0a0a);
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#252525), to(#0a0a0a)); /* older webkit syntax */
	background: -webkit-linear-gradient(#252525, #0a0a0a);
	-webkit-box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 0px;
	-moz-box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 0px;
    box-shadow: 0 0 0 rgba(0, 0, 0, 0.4);
    clear: both;
    display: block;
    float: left;
    margin-bottom: 0px;
    width: 100%; height: 4px;">&nbsp;
			</div>
	</header><!-- #branding -->


	<div id="main">