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