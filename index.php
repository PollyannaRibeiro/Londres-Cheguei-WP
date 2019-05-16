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
					
					<div class="primary">
						<!-- Main Post -->
						<div class="row main-post">				
							<?php 
								$args_1 = array(
									'cat' 			=> '1',
									'posts_per_page'=> '1',
									'page'          => '1'
								);
								$query_1 = new WP_Query($args_1);
								while ($query_1->have_posts()){
									$query_1->the_post();
							?>
							<div class="col-12 main-post-card">
									<a class="main-post-link" href="<?php the_permalink();?>">
										<div class="card main-post-card-content">
											<div class="main-thumb">	<?php the_post_thumbnail(); ?>	</div>
											<div class="card-img-overlay main-text">
												<h1 class="card-title"><?php the_title(); ?></h1>
											</div>							
										</div>
									</a>
								</div>	
							<?php 
							}
							?>	
						</div>


						<!-- Highlight Post -->
						<div class="container-fluid highlight-post" id="highlight-tablet-computer">	
							<ul class="row">			
								<?php 
									$args_2 = array(
										'cat' 			=> 'test',
										'posts_per_page'=> '3',
										'page'          => '1'
									);
									$query_2 = new WP_Query($args_2);
									while ($query_2->have_posts()){
										$query_2->the_post()
								?>
								<li class="col-sm-4 highlight-post-card">
										<a class="highlight-post-link" href="<?php the_permalink();?>">
											<div class="card highlight-post-card-content">
												<div class="highlight-thumb ">	<?php the_post_thumbnail(); ?>	</div>
												<div class="card-img-overlay highlight-text">
													<h1 class="card-title"><?php the_title(); ?></h1>
												</div>							
											</div>
										</a>
									</li>	
								<?php 
								}
								?>	
							</ul>
						</div>



						<!-- Highlight Post Phone Version -->

						<div class="container-fluid highlight-post" id="highlight-phone">	
							<ul class="row">			
								<?php 
									$args_2 = array(
										'cat' 			=> 'test',
										'posts_per_page'=> '2',
										'page'          => '1'
									);
									$query_2 = new WP_Query($args_2);
									while ($query_2->have_posts()){
										$query_2->the_post()
								?>
								<li class="col-6 col-sm-6 highlight-post-card">
										<a class="highlight-post-link" href="<?php the_permalink();?>">
											<div class="card highlight-post-card-content">
												<div class="highlight-thumb ">	<?php the_post_thumbnail(); ?>	</div>
												<div class="card-img-overlay highlight-text">
													<h1 class="card-title"><?php the_title(); ?></h1>
												</div>							
											</div>
										</a>
									</li>	
								<?php 
								}
								?>	
							</ul>
						</div>



					</div>

					<!-- Parallax -->

					<div class="row">
						<div class="parallax" id="front-page-parallax">
						<div>
					</div>
					<!-- Blog  -->
					<div class="secondary ">
						<div class="row">
							<div class="col-lg-10 col-sm-12" id="blog-col">


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
								<div class="previous-next container">
									<div class="row justify-content-center">
										<?php 
											$previous = 
												'<div class="float-left" id="previous">' .
												'<i class="far fa-arrow-alt-circle-left "></i>' .
														'</div>';
											$next = 
												'<div class="float-right" id="next">' . 
												'<i class="far fa-arrow-alt-circle-right"></i>' .
												'</div>';
											posts_nav_link('<div class="" id="line"></div>',$previous,$next);  
										?>
									</div>
								</div>

							</div>
							<div class="col-lg-2" id="side-col">

							</div>
						</div>
						
					</div>
					
					<!-- Parallax -->

					<div class="row">
						<div class="parallax" >
						<div>
					</div>

				</main><!-- #main -->
				<?php get_sidebar(); ?>
			</div><!-- .wrap -->
		</div><!-- #content -->
	</div><!-- .site-content-contain -->									
<?php get_footer();?>
