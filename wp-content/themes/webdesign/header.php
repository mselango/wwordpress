<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Design</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/camera.css">
<script src="<?php echo get_template_directory_uri();?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery-migrate-1.1.1.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/superfish.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.equalheights.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/camera.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/touchTouch.jquery.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/touchTouch.css">
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="<?php echo get_template_directory_uri();?>/js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script>
$(document).ready(function () {
    jQuery('#camera_wrap').camera({
        loader: false,
        pagination: false,
        thumbnails: false,
        height: '32.92857142857143%',
        minHeight: '300',
        caption: false,
        navigation: true,
        fx: 'mosaic'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
        <h1><a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt=""></a></h1>
      <div class="menu_block">
        <nav>
            <?php
               $defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'sf-menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
?>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>