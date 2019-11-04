<?php

define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyeleven_header_image_height', 200 ) );

add_action('after_setup_theme', 'poutnicikolin_setup', 20);

if ( ! function_exists( 'poutnicikolin_setup' ) ) :
  function poutnicikolin_setup() {
    register_default_headers(
      array(
        'paddling'      => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/paddling.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/paddling-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Paddling', 'poutnicikolin' ),
        ),
        'competing'      => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/competing.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/competing-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Competing', 'poutnicikolin' ),
        ),
        'running'    => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/running.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/running-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Running', 'poutnicikolin' ),
        ),
        'friendship'  => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/friendship.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/friendship-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Friendship', 'poutnicikolin' ),
        ),
        'scouting' => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/scouting.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/scouting-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Scouting', 'poutnicikolin' ),
        ),
        'cycling'   => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/cycling.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/cycling-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Cycling', 'poutnicikolin' ),
        ),
        'camping'     => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/camping.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/camping-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Camping', 'poutnicikolin' ),
        ),
        'climbing'      => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/climbing.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/climbing-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Climbing', 'poutnicikolin' ),
        ),
        'community'      => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/community.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/community-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Community', 'poutnicikolin' ),
        ),
        'outdoor'      => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/outdoor.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/outdoor-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Outdoor', 'poutnicikolin' ),
        ),
        'rafting'      => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/rafting.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/rafting-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Rafting', 'poutnicikolin' ),
        ),
        'swimming'      => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/swimming.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/swimming-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Swimming', 'poutnicikolin' ),
        ),
        'team'      => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/team.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/team-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Team', 'poutnicikolin' ),
        ),
        'trecking'      => array(
          'url'           => '%s/../poutnicikolin-wp-theme/images/headers/trecking.jpg',
          'thumbnail_url' => '%s/../poutnicikolin-wp-theme/images/headers/trecking-thumbnail.jpg',
          /* translators: header image description */
          'description'   => __( 'Trecking', 'poutnicikolin' ),
        ),
      )
    );
    unregister_default_headers(array(
      'wheel',
      'shore',
      'trolley',
      'pine-cone',
      'chessboard',
      'lanterns',
      'willow',
      'hanoi',
    ));
  }
endif; // poutnicikolin_setup


function poutnicikolin_enqueue_styles() {
    $parent_style = 'twentyeleven'; // This is 'twentyeleven-style' for the Twenty Eleven theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'poutnicikolin_enqueue_styles' );