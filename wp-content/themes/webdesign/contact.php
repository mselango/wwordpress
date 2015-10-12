<?php
/**
 * Template Name: Contactus Page
 *
 */
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/form.css">
<div class="content">
    <div class="container_12">
        <div class="grid_12">
            <h3><span>contact info</span></h3>
        </div>
        <div class="grid_5">
            <div class="map">

<?php
if (have_posts()) : while (have_posts()) : the_post();

        the_content();

    endwhile;
endif;
?>

            </div>
        </div>
        <div class="grid_6 prefix_1">
            <form id="form" action="#">
                <div class="success_wrapper">
                    <div class="success">Contact form submitted!<br>
                        <strong>We will be in touch soon.</strong> </div>
                </div>
                <fieldset>
<?php echo do_shortcode("[contact-form-7 id='91' title='Contact']"); ?>
                </fieldset>
            </form>
            Marketing Department: <br>
            E-mail: <span class="col1"><a href="#">email@domain.com</a></span> <br>
            Phone: 1-518-312-4162 </div>
    </div>
</div>

<?php get_footer(); ?>