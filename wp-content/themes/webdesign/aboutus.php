<?php
/**
 * Template Name: Aboutus Page
 *
 */
get_header();
?>
<div class="content">
    <div class="container_12">
        <div class="grid_5">
            <h3 class="head1">Our Principles</h3>
            <ul class="list">

                <?php
                $args = array('post_type' => 'principles', 'posts_per_page' => 3);
                $loop = new WP_Query($args);

                static $i = 1;

                while ($loop->have_posts()) : $loop->the_post();
                    ?>	
                    <li>
                        <div class="count"><?php echo $i++; ?></div>
                        <div class="extra_wrapper">
                            <div class="col3"><a href="#"><?php echo the_title(); ?>. </a></div>
                            <?php echo the_content(); ?>. </div>
                    </li>  

                    <?php
                endwhile;
                ?>

            </ul>
            <h3 class="head1 h1">Our advantages</h3>
            <ul class="list1 col3">
                <li><a href="#">Bertoce quis fermentuempus coetum reto</a></li>
                <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                <li><a href="#">In mollis erat mattis neque facilisis sit ame </a></li>
                <li><a href="#">Cras facilisis, nulla vel viverra auctorle </a></li>
                <li><a href="#">Proin pharetra luctus diam, a scelerisqu </a></li>
                <li><a href="#">Aliquam nibh anterno mertilo neiner</a></li>
                <li><a href="#">Etiam dui eros, laoreet sit amet aniloto me</a></li>
            </ul>
        </div>
        <div class="grid_6 prefix_1">

            <h3><span>Our Mission</span></h3>
            <p class="col3">

                <?php
                if (have_posts()) : while (have_posts()) : the_post();

                        the_content();

                    endwhile;
                endif;
                ?>
            </p>
            <a href="#" class="btn"></a>
            <div class="clearfix"></div>
            <h3 class="head2"><span>Meet our Work team</span></h3>
            <div class="team">


                <?php
                $args1 = array('post_type' => 'myteam', 'posts_per_page' => 6);
                $loop1 = new WP_Query($args1);
                $j=0;
                while ($loop1->have_posts()) : $loop1->the_post();
                    ?>
                    <div class="grid_2">
                        <?php
                        if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                            ?>
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($loop1->ID)); ?>" alt="">

                        <?php } ?> 
                        <div class="col3"><a href="#"><?php the_field('emplyee_name'); ?></a></div>
                        <?php the_field('employee_position'); ?> </div>
                <?php $j++;
                if( $j%3==0){
                ?>
                 <div class="clear"></div>
                <?php } endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>