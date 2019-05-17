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

// // Short title

// function short_title($n) {
// 	$title = get_the_title($post->ID);
// 	$title = substr($title,0,$n);
// 	echo $title;
// }
// add_filter( 'short_title' );


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



// Add new post type

function cadastrando_post_type_news(){
	
	$news='News';
	$newsDescription='Notícias relacionadas';


	$newsLabels=array(
		'name'=> $news,
		'name_singular'=>$news,
		'add_new_item'=> 'Adicionar '.$news,
		'edit_item'=>'Editar '.$news

	);

	$supports=array(
		'title',
		'editor',
		'author',
		'thumbnail',
		'comments',
		

	);
	
	$args=array(
		'labels'=>$newsLabels,	
		'public'=>true,
		'description'=>$newsDescription,	
		'menu_icon'=>'dashicons-admin-site',
		'supports'=>$supports,
		'taxonomies' => array('post_tag','category')
		
	);
	
	register_post_type('news', $args);
}

add_action('init','cadastrando_post_type_news');



//SEARCH FORM

function wpdocs_after_setup_theme() {
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


//LOAD MORE 

function misha_my_load_more_scripts() {
 
	global $wp_query; 
 
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
 
	// register our main script but do not enqueue it yet
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/myloadmore.js', array('jquery') );
 
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ) . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();

 
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
			get_template_part( 'assets/template-parts/post/content', get_post_format());
			

			// for the test purposes comment the line above and uncomment the below one
			// the_title();
			// the_post_thumbnail();
			// the_title();


	
						


						
 
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
