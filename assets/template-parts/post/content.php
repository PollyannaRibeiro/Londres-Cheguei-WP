<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

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
