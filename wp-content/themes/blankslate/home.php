
<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>
<div class="block-1">
  <div class="container">
    <div class="row">
      <div class="grid_3">
        <div class="block-1_count">   <?php the_field('years_experience'); ?></div>
        Years of <br> Experience
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <div class="block-1_count">30</div>
        Successful <br> Projects
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <div class="block-1_count">20</div>
        Partner <br> Projects
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <a href="#" class="support"><img src="<?php echo get_template_directory_uri();?>/images/support.png" alt=""></a>
      </div>
    </div>
  </div>
</div>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_10 preffix_1 ta__center">
        <div class="greet">
          <h2 class="head__1">
            Welcome
          </h2>
          <p>Read more about the <a href=" http://blog.templatemonster.com/free-website-templates/" rel="nofollow" class="color1">freebie</a> here. <br> Go to TemplateMonster.com and find more <a href="http://www.templatemonster.com/properties/topic/business-services/" rel="nofollow" class="color1">goodies</a> of this kind </p>
          Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet site amet est vel, commodo venenatis eros. Fusce adipiscing quam id risus sagittis, non consequat lacus interdum. nulla, eu sodales arcu. Quisque viverra nulla nunc, eu ultrices libero ultricies eget. Phasellus accumsan 
        </div>
      </div>
    </div>
  </div>
  <article class="content_gray">
    <div class="container">
      <div class="row">
        <div class="grid_7">
          <h3>Our Advantages</h3>         
          <?php
          $experience = get_post(35); 
      
          
          $marketing = get_post(38); 

          ?>
          <div class="block-2">
              <div class="img_inner fleft"> <?php echo get_the_post_thumbnail( 35, 'thumbnail' );?></div>
            <div class="extra_wrapper">
              <div class="text1"><a href="#"><?php echo $experience->post_title;?></a></div>
              <p><?php echo$experience->post_content;?>
              <br>
              <a href="#" class="link-1">more</a>
            </div>
          </div>
          <div class="block-2">
              <div class="img_inner fleft"><?php echo get_the_post_thumbnail( 38, 'thumbnail' );?></div> 
            <div class="extra_wrapper">
              <div class="text1"><a href="#"><?php echo $marketing->post_title;?></a></div>
              <p><?php echo $marketing->post_content;?>
              <br>
              <a href="#" class="link-1">more</a>
            </div>
          </div>
        </div>
        <div class="grid_4 preffix_1">
          <h3>Testimonials</h3>
          
         <?php
         echo do_shortcode("[testimonials category='client-feedback']");?>
          <blockquote class="bq1">
            <p>“Curabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am est vel commodo venenatisipiscing... ”</p>
            <span>Liza Jons</span>
          </blockquote>
          <blockquote class="bq1">
            <p>“Burabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am ast vel commodo venenatisipiscino... ”</p>
            <span>Mark Brown</span>
          </blockquote>
        </div>
      </div>
    </div>
  </article>
  <div class="container">
    <div class="row">
      <div class="grid_5">
        <h4>About Company</h4>
        <img src="<?php echo get_template_directory_uri();?>/images/page1_img3.jpg" alt="" class="img_inner fleft">
          <p>Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert arius augue, eu consectetur </p>
          <p class="offset__1">Eligulaam dui eros dertolisce dertolo adipiscing quam id risus sagittis</p>
          Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert rius augue, eu consectetur larem dui eros dertolisce dertolo 
      </div>
      <div class="grid_4">
        <h4>Solutions</h4>
        <ul class="list-1">
          <li><a href="#">Vivamus at magna non nunc tristique </a></li>
          <li><a href="#">Aliquam nibh ante, egestas id</a></li>
          <li><a href="#">Ommodo luctus libero</a></li>
          <li><a href="#">Faucibus malesuada faucibusonec </a></li>
          <li><a href="#">Laoreet metus id laoreet</a></li>
          <li><a href="#">Jalesuadaorem ipsum dolor sit ame</a></li>
        </ul>
      </div>
      <div class="grid_3">
        <h4>Contact Info</h4>
        <address>
          <ul class="cont_address">
            <li>8901 Marmora Road, Glasgow, D04 89GR</li>
            <li>+1 (800) 123 9876</li>
            <li><a href="#">info@demolink.org</a></li>
            <li><a href="#">www.demolink.org</a></li>
          </ul>
        </address>
      </div>
    </div>
  </div>
</section>