<?php
function my_theme_enqueue_styles() {

    //$parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $parent_style = 'acs-style-css';
    wp_dequeue_style( 'acs-style-css', get_template_directory_uri() . 'css/style.css',100 );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css'
        //array( $parent_style ),
        //wp_get_theme()->get('Version')
    );
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