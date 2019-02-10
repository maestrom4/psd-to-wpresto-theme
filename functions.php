<?php
/**
 * Main configurations for wptheme2
 *
 * @package wpthemes1
 * @author Danilo B. Matias Jr.
 * @version 1.0
 * @since 2019
 */

if ( ! functon_exist('wptheme2_setup') ) :
	function wptheme2_setup() {
		load_theme_textdomain( 'wptheme2', get_template_directory() . '/langauges');
		add_theme_support( 'title-tags' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_post_type_support( 'page', 'exerpt' );
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'search-form',
				'gallery',
				'caption',
				'video',
				'qoute',
				'aside',
				'image',
			)
		);
		register_nav_menu(
			'primary', esc_html( 'Primary Menu' )
		);
	}
endif;
add_action( 'after_setup_theme', 'wptheme2_setup');
