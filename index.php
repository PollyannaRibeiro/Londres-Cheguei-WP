<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>




			<div class="main-wrap">
				<main id="main" class="container-fluid" role="main">	
					
					<div class="row">
						<div class="parallax" id="front-page-parallax">
						<div>
					</div>

					<div class="secondary ">
						<ul class="card-columns" id="blog">	
							<?php 
								if( have_posts() ) { 
										while( have_posts() ) {
										the_post(); 
								?>		
							<li class="">
								<div  class="">
									<a class="a-post-blog" href="<?php the_permalink();?>">
										<div class="card blog-card">
											<div class="blog-thumb">	<?php the_post_thumbnail(); ?>	</div>
											<div class="card-body">
												<h1><?php the_title(); ?></h1>
												<p class="card-text"><?php the_excerpt();?></p>
											</div>
										</div>
									</a>
								</div>
							</li>	
							<?php 
									}
								}
							?>
						</ul>	
					</div>	
				</main><!-- #main -->
				<?php get_sidebar(); ?>
			</div><!-- .wrap -->
		</div><!-- #content -->
	</div><!-- .site-content-contain -->									
<?php get_footer();?>
