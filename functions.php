<?php
function techbook_enqueue_assets(){
	//css enqueue
	wp_enqueue_style("bootstrap", get_template_directory_uri()."/css/bootstrap.min.css",array(), '4.3.1', 'all');
	wp_enqueue_style("style", get_stylesheet_uri());

  //javascript enqueue
	wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array('jquery'), 1.0, true);
	wp_enqueue_script("customjs", get_template_directory_uri()."/js/main.js", array(), 1.0, true);
	wp_enqueue_script("fontawesome", 'https://kit.fontawesome.com/a6b14e980f.js');
}

add_action("wp_enqueue_scripts", "techbook_enqueue_assets");


function food_funday_restaurant_setup() {

	load_theme_textdomain( 'techbook', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'techbook' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'techbook_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}

add_action( 'after_setup_theme', 'food_funday_restaurant_setup' );


function techbook_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'techbook' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'techbook' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'techbook' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'techbook' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'techbook' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'techbook' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'techbook' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'techbook' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'techbook_widgets_init' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Option',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Section',
		'menu_title'	=> 'Home Top Section',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Manage About Section',
		'menu_title'	=> 'About Section',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Manage Founder Section',
		'menu_title'	=> 'Founder Section',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Services Section',
		'menu_title'	=> 'Services Section',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Approach And Founders Thoughts',
		'menu_title'	=> 'Approach And Founders Thoughts',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Section',
		'menu_title'	=> 'Contact Section',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	
}