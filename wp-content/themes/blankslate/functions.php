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
