
<?php
/**
 * Template Name: Other Page
 *
 */



get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> </header>
<section class="entry-content">

<?php the_content(); ?>

</section>

<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
