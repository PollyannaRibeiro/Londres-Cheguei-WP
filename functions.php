<?php
/**
 * Functions and definitions
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
			'menu-footer-1' => __( 'Footer Menu 1' ),
			'menu-footer-2' => __( 'Footer Menu 2' ),
			'menu-social-media' => __( 'Social Media Menu')
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Register our sidebars and widgetized areas.

/**
 * Sidebars & Widgetized Areas
 */
function londres_register_sidebars() {

	register_sidebar( array(
		'id' => 'homepage-sidebar',
		'name' => esc_html__( 'Homepage Sidebar', 'Londres' ),
		'description' => esc_html__( 'Homepage Sidebar', 'Londres' ),
		'before_widget' => '<div class="col-md-12 col-sm-12 col-xs-12 pull-down-55 pull-down-55-xs widget-holder"><aside id="%1$s" class=" widget %2$s">',
		'after_widget'  => '</aside></div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
		));

	register_sidebar( array(
		'id' => 'londres-post-sidebar',
		'name' => esc_html__( 'Post Sidebar', 'londres' ),
		'description' => esc_html__( 'Sidebar on single post', 'londres' ),
		'before_widget' => '<div class="col-md-12 col-sm-12 col-xs-12 pull-down-55 pull-down-30-xs pull-down-20-xs widget-holder"><aside id="%1$s" class=" widget %2$s">',
		'after_widget'  => '</aside></div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	));

	register_sidebar( array(
		'id' => 'londres-page-sidebar',
		'name' => esc_html__( 'Page Sidebar', 'londres' ),
		'description' => esc_html__( 'Sidebar on single page', 'londres' ),
		'before_widget' => '<div class="col-md-12 col-sm-12 col-xs-12 pull-down-55 pull-down-30-xs pull-down-20-xs widget-holder"><aside id="%1$s" class=" widget %2$s">',
		'after_widget'  => '</aside></div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	));

	register_sidebar( array(
		'id' => 'londres-above-author-content-sidebar',
		'name' => esc_html__( 'Above "About the Author" Sidebar', 'londres' ),
		'description' => esc_html__( 'Above "About the Author" Sidebar Widget Area', 'londres' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	));

	register_sidebar( array(
		'id' => 'londres-below-content-sidebar',
		'name' => esc_html__( 'Below Content Sidebar', 'londres' ),
		'description' => esc_html__( 'Below content Widget Area', 'londres' ),
		'before_widget' => '<div class="col-md-12 "><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside></div><div class="clearfix"></div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	));

	register_sidebar( array(
		'id' => 'londres-footer-1-row',
		'name' => esc_html__( 'Footer Sidebar 1 Row', 'londres' ),
		'description' => esc_html__( 'Footer Widget Area', 'londres' ),
		'before_widget' => '<div class="col-md-12"><aside id="%1$s" class="widget  %2$s">',
		'after_widget'  => '</aside></div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	));

	register_sidebar( array(
		'id' => 'londres-footer-2-row',
		'name' => esc_html__( 'Footer Sidebar 2 Row', 'londres' ),
		'description' => esc_html__( 'Footer Widget Area', 'londres' ),
		'before_widget' => '<aside id="%1$s" class="widget  %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	));


}

add_action( 'widgets_init', 'londres_register_sidebars' );


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
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}


// RESPONSIVE YOUTUBE EMBEDS
// FROM: https://www.joomlacandy.com/wordpress/youtube-videos-responsive

add_filter('embed_oembed_html', 'wrap_embed_with_div', 10, 3);

function wrap_embed_with_div($html, $url, $attr) {
        return "<div class=\"video-container\">".$html."</div>";
}