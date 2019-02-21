<?php
/**
 * Twenty Seventeen functions and definitions
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */



// Add thumbnails to the site

function blog_setup() {
	add_theme_support( 'post-thumbnails' );
} 

blog_setup();

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