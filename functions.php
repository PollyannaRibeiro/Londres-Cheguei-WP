<?php
/**
 * Twenty Seventeen functions and definitions
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */



// Add thumbnails to the site

if ( ! function_exists( 'blog_setup' ) );

function blog_setup() {
	add_theme_support( 'post-thumbnails' );
} 

add_action( 'after_setup_theme', 'blog_setup' );


// Read more and except length

function wpdocs_custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function wpdocs_excerpt_more( $more ) {
	return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( '...Read More', 'textdomain' )
	);
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// Add menu

function register_my_menus() {
  register_nav_menus(
    array(
      'menu-header' => __( 'Header Menu' ),
			'menu-categories' => __( 'Categories Menu' ),
			'menu-footer' => __( 'Footer Menu' ),
			'menu-social-media' => __( 'Social Media Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



// Register our sidebars and widgetized areas.

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


