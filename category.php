<?php
/*
Template Name: Category
*/
?>
<?php get_header();?>

    <div class="main-wrap">
      <main class="container-fluid" id="category-page"role="main">
        <div class="secondary ">
          <h4 class="category-title"><?php single_cat_title(); ?></h4>
          <ul class="card-columns" id="categories">	
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
      </main> 
    </div><!-- .wrap -->
<?php get_footer();?>
