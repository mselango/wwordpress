<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); 


?>
<div class="slider_wrapper">
  <div id="camera_wrap" class="">
   <?php   
      $args = array( 'post_type' => 'slider', 'posts_per_page' => 3 );
$loop = new WP_Query( $args );


while ( $loop->have_posts() ) : $loop->the_post();

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	
        
        echo '<div data-src='. wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ).'> </div>';
} 
endwhile;
?>
    
    
  
  </div>
</div>
<div class="content">
  <div class="container_12">
    <div class="grid_12">
      <h2>WELCOME TO MY SITE WHERE YOU CAN FIND<span>A RANGE OF CREATIVE HIGH-QUALITY <span class="col1">DESIGNS</span> THAT CAN HELP YOUR BUSINESS FLOURISH.</span></h2>
      <h3><span>SERVICES</span></h3>
    </div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
      <?php

/*
*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
*/




/*
*  Loop through post objects (assuming this is a multi-select field) ( don't setup postdata )
*  Using this method, the $post object is never changed so all functions need a seccond parameter of the post ID in question.
*/

$post_objects = get_field('service1');
//print_r($post_objects);
if( $post_objects ): ?>
    <ul>
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
         <div class="grid_4">
      <div class="icon"> <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>" alt="">
          <div class="title"><?php  the_title();?></div>
            
        <?php the_content();?>
      
      </div>
    </div>
    <?php endforeach; ?>
    
<?php endif;

?>
        <?php endwhile; endif; ?>
    
    
  
    <div class="clear"></div>
    <div class="grid_12">
      <h3><span>Testimonials</span></h3>
    </div>
    
    <?php   
      $args = array( 'post_type' => 'testimonial', 'posts_per_page' => 3 );
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();


?>
    
    <div class="grid_6">
      <blockquote> <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($loop->ID) );?>" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
            <p><?php echo the_content();?></p>
          <span class="col2 upp"><?php the_field('author');?> </span> - client </div>
      </blockquote>
    </div>
  <?php 
  
  endwhile;
 ?>
  </div>
</div>

<?php get_footer(); ?>