<?php
function enqueueFashionBlogStyles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueueFashionBlogStyles');


function wpb_add_google_fonts()
{
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=PT+Serif&display=swap', false);
}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');

// ADD MENUS
add_theme_support('menus');

register_nav_menus(
    array(
        'main-menu' => 'Main',
        'categories' => 'Categories'
    )
);

// ADD PICTURES
add_theme_support('post-thumbnails');
// ADD PICTURES SIZE
add_image_size('S', 270, 160, true);
add_image_size('M_post', 360, 280, true);
add_image_size('M_footer', 300, 300, true);
add_image_size('L', 770, 350, true);
add_image_size('XL', 1900, 700, true);
add_image_size('post_size', 1900, 700, false);

// ADD WIDGETS
add_theme_support('widgets');

// REGISTER SIDEBARS
function my_sidebars(){
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar',
        'before_title' => '<h4 class="sidebar">',
        'after_title' => '</h1>'
    ));
}

add_action('widgets_init', 'my_sidebars');

//  Limit the number of tags displayed by Tag Cloud widget  

add_filter( 'widget_tag_cloud_args', 'tj_tag_cloud_limit' );
function tj_tag_cloud_limit($args){ 
	// Check if taxonomy option of the widget is set to tags
	if ( isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag' ){
		$args['number'] = 15; // Number of tags to show
 	}
	return $args;
}

