<?php
function my_theme_enqueue_styles() {

    //$parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    //$parent_style = 'acs-style-css';
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js', '1.20.4', true );
	wp_enqueue_script( 'scrollmagic', 'http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js', '2.0.5', true );
	wp_enqueue_script( 'scrollmagic-gsap', 'http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', '2.0.5', true );
	// wp_enqueue_script( 'scroll-js', get_template_directory_uri().'/js/smoothscroll.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri().'/js/mesh.js', array('jquery'), '1.0.0', true );
    wp_dequeue_style( 'acs-style', get_template_directory_uri() . '/css/style.css', 100);
    wp_deregister_script( 'acs-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', 100);
    //wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

//Add support for custom items
add_image_size('background-fullscreen', 1800, 1200, true);
add_image_size('short-banner', 1800, 800, true);

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Global Site Settings',
		'menu_title'	=> 'Global Site Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
?>
