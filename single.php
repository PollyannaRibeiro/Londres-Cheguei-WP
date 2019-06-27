<?php
/*
Template Name: Single
*/
?>

<?php get_header();?>

		<div class="main-wrap">
			<main>
				<div class="row" id="single-page">
					<div class="col-sm-9" id="main-content-single-page">
						<article class="main-article" >
							
							<?php
								if(have_posts()) {
									while(have_posts()){
										the_post();
							?>
								<div class="container">
								
									<section class="title-single-page">
										<h1><?php the_title();?></h1>
									</section>
									
									<div class="row">
										<div class="col-12 thumb-single-page"><?php the_post_thumbnail(); ?></div>
									</div>

									<span class="info-single-post float-right">
										<p><?php the_date();?></p>
										<p><?php _e( 'Postado por: ', 'textdomain' ); the_author_posts_link();?></p>
									</span>
													
									<section>
										<div class="content-single-post">
											<?php the_content();?> 
										</div>
									</section>
									<!-- categories -->
									<div class="row categories-single-post">
										<?php _e( 'Categorias: ', 'textdomain' ); the_category( ', ' );?>
									</div>
									<!-- tags		 -->
									<div class="row tags-single-post">
										<?php _e( '', 'textdomain' );the_tags();?>	
									</div>		
								</div>

								<div>
									<?php if ( dynamic_sidebar('content_widgets') ) : else : endif; ?>
								</div>

								<!-- Comments -->
								<div class="comments-format"> 
									<?php comments_template(); ?>
								</div>

							<?php																
									}
								}
							?>
						</article>

					</div>	
					
					<!-- Sidebar -->
					<div class="col-sm-3" id="single-page-side-content">
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

						<div id="facebook-widget">
						<div class="fb-page" data-href="https://www.facebook.com/londrescheguei/" 
							data-tabs="timeline" data-width="" data-height="500px" data-small-header="false" 
							data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
								<blockquote cite="https://www.facebook.com/londrescheguei/" class="fb-xfbml-parse-ignore">
									<a href="https://www.facebook.com/londrescheguei/">Londres, cheguei</a>
								</blockquote>
						</div>
						</div>
					</div>
				</div>

				<!-- phone  -->
				<div class="row" id="single-page-phone">
					<div class="col-12" id="main-content-single-page">
						<article class="main-article" >
							
							<?php
								if(have_posts()) {
									while(have_posts()){
										the_post();
							?>
								<div class="container">
								
									<section class="title-single-page">
										<h1><?php the_title();?></h1>
									</section>
									
									<div class="row">
										<div class="col-12 thumb-single-page"><?php the_post_thumbnail(); ?></div>
									</div>

									<span class="info-single-post float-right">
										<p><?php the_date();?></p>
										<p><?php _e( 'Postado por: ', 'textdomain' ); the_author_posts_link();?></p>
									</span>
													
									<section>
										<div class="content-single-post">
											<?php the_content();?> 
										</div>
									</section>
									<!-- categories -->
									<div class="row categories-single-post">
										<?php _e( 'Categorias: ', 'textdomain' ); the_category( ', ' );?>
									</div>
									<!-- tags		 -->
									<div class="row tags-single-post">
										<?php _e( '', 'textdomain' );the_tags();?>	
									</div>		
								</div>

								<div>
									<?php if ( dynamic_sidebar('content_widgets') ) : else : endif; ?>
								</div>

								<!-- Comments -->
								<div class="comments-format"> 
									<?php comments_template(); ?>
								</div>

							<?php																
									}
								}
							?>
						</article>
					</div>	
				</div>
			</main>
		</div><!-- main-wrap-->

<?php get_footer();?>