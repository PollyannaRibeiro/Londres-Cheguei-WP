<?php
/*
Template Name: Page
*/
?>
<?php get_header();?>
	<div class="main-wrap">
		<main class="container-fluid" id="page" role="main">
			<div class="secondary ">
				<?php 
					if( have_posts() ) { 
							while( have_posts() ) {
							the_post(); 
					?>		
					<div  class="page-content">
							<h1><?php the_title(); ?></h1>
							<p class="card-text"><?php the_content();?></p>
					
					</div>
				<?php 
						}
					}
				?>
			</div>
		</main> 
	</div><!-- .wrap -->
  </div><!-- #content -->
</div><!-- .site-content-contain -->	

<?php get_footer();?>
