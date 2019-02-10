<?php
/**
 * Main configurations file for our theme.
 * 
 * @package wpresto
 * @version 1.0
 */

 if ( ! function_exists( 'wp_resto_support_add') ) :
	function wp_resto_support_add() {
		load_theme_textdomain( 'wpresto', get_template_directory_uri() . '/languages');
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails');
		add_theme_support( 'automatic-feed-links');
		add_post_type_support( 'page', 'excerpt');
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'search-form',
				'gallery',
				'video',
				'image',
				'qoute',
				'aside',
			)
		);
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'wpresto' ),
				'secondary' => esc_html__( 'Secondary Menu',  'wpresto' )
			)
		);
	}

 endif;
 add_action( 'after_setup_theme', 'wp_resto_support_add' );

 if ( ! function_exists( 'wp_resto_regsiter_script' ) ) :
	function wp_resto_regsiter_script() {
		wp_register_style( 'wp_resto_stylesheet', get_stylesheet_directory_uri(), array() );
		wp_enqueue_style( 'wp_resto_stylesheet' );
	
		wp_register_style( 'wp_resto_bootsrap_reset', get_template_directory_uri() . '/assets/css/bootsrap-reboot.min.css' );
		wp_enqueue_style( 'wp_resto_bootsrap_reset' );

		wp_register_style( 'wp_resto_bootstrap',  get_template_directory_uri() . '/assets/css/bootstrap.min.css');
		wp_enqueue_style( 'wp_resto_bootstrap' );

		wp_register_style( 'wp_resto_layout',  get_template_directory_uri() . '/assets/css/layout.min.css');
		wp_enqueue_style( 'wp_resto_layout' );
		
		wp_register_script( 'wp_resto_bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), true );
		wp_enqueue_script( 'wp_resto_bootstrap_js');

		wp_register_script( 'wp_resto_custom_js', get_template_directory_uri() . '/assets/js/custom.js', array(), true);
		wp_enqueue_script( 'wp_resto_custom_js');
	}
 endif;

 add_action( 'wp_enqueue_scripts', 'wp_resto_regsiter_script');

/** 
 * Removes the topbar margin
 */
 add_action('get_header', 'my_filter_head');

 function my_filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
 }

 /**
  * Custom Post type for Menus
  */
function wpresto_menus() {
	register_post_type(
		'wpresto_menu_list',
		array(
			'labels'      => array(
				'name'		     => __( 'Resto Menu', 'wpresto' ),
				'singular_name'  => __( 'Menu', 'wpresto' )
			),
			'public'      => true,
			'has_archive' => true,
			'supports'    => array( 'title', 'editor', 'thumbnail')
		)
	);
}
add_action( 'init', 'wpresto_menus' );
/**
 * Metabox for Menus
 */
function wporg_add_custom_box()
{
	add_meta_box(
		'wporg_box_id',           // Unique ID
		'Menu Price',             // Box title
		'wporg_custom_box_html',  // Content callback, must be of type callable
		'wpresto_menu_list',      // Post type
		'side'
	);
}
add_action('add_meta_boxes', 'wporg_add_custom_box');

// HTML Design
function wporg_custom_box_html($post)
{
    ?>
    <label for="price">Price</label>
	<?php
	global $post;
	$price = get_post_meta( $post->ID, '_wporg_meta_key', true );
	echo '<input type="number" name="price" pattern="^\d*(\.\d{0,2})?$" value="' . $price . '" class="widefat"> ';
}
// Save to post
function wporg_save_postdata($post_id)
{
    if (array_key_exists('price', $_POST)) {
        update_post_meta(
            $post_id,
            '_wporg_meta_key',
            $_POST['price']
        );
    }
}
add_action('save_post', 'wporg_save_postdata');

// End of Menu


function wpresto_featured_posts() {
	register_post_type(
		'wpresto_menu',
		array(
			'labels'      => array(
				'name'           => __( 'Featured Menu', 'wpresto' ),
				'singular'       => __( 'Featured Menu', 'wpresto')
			),
			'public'      => true,
			'has_archive' => true,
			'supports'    => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' )
		)
	);
}
add_action( 'init', 'wpresto_featured_posts' );

