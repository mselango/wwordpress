<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
add_action( 'init', 'codex_slider_init' );
/**
 * Register a slider post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_slider_init() {
	$labels = array(
		'name'               => _x( 'sliders', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'slider', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'sliders', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'slider', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'slider', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New slider', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New slider', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit slider', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View slider', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All sliders', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search sliders', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent sliders:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No sliders found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No sliders found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'codex_testimonial_init' );
/**
 * Register a testimonial post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_testimonial_init() {
	$labels = array(
		'name'               => _x( 'testimonials', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'testimonial', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'testimonials', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'testimonial', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'testimonial', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New testimonial', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New testimonial', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit testimonial', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View testimonial', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All testimonials', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search testimonials', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent testimonials:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No testimonials found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No testimonials found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'testimonial', $args );
}

add_action( 'init', 'codex_principles_init' );
/**
 * Register a principles post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_principles_init() {
	$labels = array(
		'name'               => _x( 'principless', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'principles', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'principless', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'principles', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'principles', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New principles', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New principles', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit principles', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View principles', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All principless', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search principless', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent principless:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No principless found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No principless found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'principles' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'principles', $args );
}

add_action( 'init', 'codex_myteam_init' );
/**
 * Register a myteam post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_myteam_init() {
	$labels = array(
		'name'               => _x( 'myteams', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'myteam', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'myteams', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'myteam', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'myteam', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New myteam', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New myteam', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit myteam', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View myteam', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All myteams', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search myteams', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent myteams:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No myteams found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No myteams found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'myteam' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'myteam', $args );
}