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