<?php
/*
Template Name: Single
*/
?>

<?php get_header();?>

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

	</div>
	
</div>


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

<?php get_footer();?>