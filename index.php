<?php
/**
 * The main template file
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
									'tag_id' 			=> '70',
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
												<section><h1 class="card-title"><?php the_title(); ?></h1><section>
												<section>
													<?php 
														foreach((get_the_category()) as $category) { 
															echo '<a class="categories" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>';
														} 
													?>
												</section>
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
										'tag_id' 			=> '47',
										'posts_per_page'=> '3',
										'page'          => '1'
									);
									$query_2 = new WP_Query($args_2);
									while ($query_2->have_posts()){
										$query_2->the_post()
								?>
								<li class="col-sm-4 highlight-post-card first-highlight-post-cards border-light">
										<a class="highlight-post-link" href="<?php the_permalink();?>">
											<div class="card-img-top highlight-post-card-content">
												<div class="highlight-thumb ">	<?php the_post_thumbnail(); ?>	</div>
												<div class="card-body highlight-text">
													<h1 class="card-title"><?php the_title(); ?></h1>
													<p class="card-text"><?php the_excerpt();?></p>
													<section>
													<?php 
														foreach((get_the_category()) as $category) { 
															echo '<a class="categories" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>';
														} 
													?>
												</section>
												</div>							
											</div>
										</a>
									</li>	
								<?php 
								}
								?>	
							</ul>

							<ul class="row">			
								<?php 
									$args_2 = array(
										'cat' 			=> '1',
										'posts_per_page'=> '4',
										'page'          => '1'
									);
									$query_2 = new WP_Query($args_2);
									while ($query_2->have_posts()){
										$query_2->the_post()
								?>
								<li class="col-sm-3 highlight-post-card second-highlight-post-cards">
										<a class="highlight-post-link" href="<?php the_permalink();?>">
											<div class="card highlight-post-card-content">
												<div class="highlight-thumb ">	<?php the_post_thumbnail(); ?>	</div>
												<div class="card-img-overlay highlight-text align-middle">
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
										'posts_per_page'=> '4',
										'page'          => '1'
									);
									$query_2 = new WP_Query($args_2);
									while ($query_2->have_posts()){
										$query_2->the_post()
								?>

								<li class="col-sm-6 col-6 highlight-post-card second-highlight-post-cards">
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
					<!-- Blog  -->
					<div class="secondary ">
						<h1> Last Posts
						<div class="row">
							<div class=" col-lg-9 col-sm-12" id="blog-col">


								<ul class="card-columns" id="blog">	
									<?php 
										if( have_posts() ) { 
												while( have_posts() ) {
												the_post(); 
										?>		
									<li class="card-list">
										<div  class="card-div">
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
								

								<?php
								global $wp_query; // you can remove this line if everything works for you

								// don't display the button if there are not enough posts
								if (  $wp_query->max_num_pages > 1 )
									echo '<div class="misha_loadmore"> LOAD MORE </div>'; // you can use <a> as well
								?>
								


								
								<!-- <div class="previous-next container">
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
								</div> -->

							</div>
							<!-- 
						</div> -->
						<div class="col-lg-3 col-m-2" id="side-col">

							<div>
								<?php if ( dynamic_sidebar('content_widgets') ) : else : endif; ?>
							</div>
							
							<div class="ad">
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<ins class="adsbygoogle"
										style="display:block"
										data-ad-format="fluid"
										data-ad-layout-key="-6s+eg+1g-3d+2z"
										data-ad-client="ca-pub-3886723811120568"
										data-ad-slot="2910623932"></ins>
								<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
								</script>	
							</div>
							[instagram-feed]

							<div class="ad">
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<ins class="adsbygoogle"
										style="display:block"
										data-ad-format="fluid"
										data-ad-layout-key="-6s+eg+1g-3d+2z"
										data-ad-client="ca-pub-3886723811120568"
										data-ad-slot="2910623932"></ins>
								<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
							</div>

							<div id="twitter-widget">
								<a class="twitter-timeline" data-height="500" href="https://twitter.com/londrescheguei?ref_src=twsrc%5Etfw">
								Tweets by londrescheguei</a> 
								<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
							</div>
							
							<div class="ad">
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<ins class="adsbygoogle"
										style="display:block"
										data-ad-format="fluid"
										data-ad-layout-key="-6s+eg+1g-3d+2z"
										data-ad-client="ca-pub-3886723811120568"
										data-ad-slot="2910623932"></ins>
								<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
							</div>
						</div>
						
					</div>
				</main><!-- #main -->
				<!-- Parallax -->
				<!-- <div class="parallax" >
				</div> -->
			</div><!-- .wrap -->
		</div><!-- #content -->
	</div><!-- .site-content-contain -->									
<?php get_footer();?>
