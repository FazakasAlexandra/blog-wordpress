<?php

// ENQUE LINKS
function enqueue_fashion_blog_styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_fashion_blog_styles');


function add_fashion_blog_google_fonts()
{
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=PT+Serif&display=swap', false);
}

add_action('wp_enqueue_scripts', 'add_fashion_blog_google_fonts');


function enqueue_fashion_blog_FontAwesome()
{
    wp_enqueue_style('font-awesone', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
}

add_action('wp_enqueue_scripts', 'enqueue_fashion_blog_FontAwesome');


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
add_image_size('M_footer', 300, 320, true);
add_image_size('L', 770, 350, true);
add_image_size('XL', 1900, 700, true);


// ADD WIDGETS
add_theme_support('widgets');


// REGISTER SIDEBARS
function fashion_blog_my_sidebars()
{
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar',
        'before_title' => '<h4 class="sidebar">',
        'after_title' => '</h1>'
    ));

    register_sidebar(array(
        'name' => 'Social',
        'id' => 'social-media-icons',
        'before_title' => '<h4 class="social-media-icons">',
        'after_title' => '</h1>'
    ));

    register_sidebar(array(
        'name' => 'Instagram pictures',
        'id' => 'instagram-pictures',
        'before_title' => '<h4 class="instagram-pictures">',
        'after_title' => '</h1>'
    ));
}

add_action('widgets_init', 'fashion_blog_my_sidebars');


// LIMIT NUMBER OF TAGS DISPLAYED IN TAG CLOUD WIDGET
add_filter('widget_tag_cloud_args', 'fashion_blog_tag_cloud_limit');

function fashion_blog_tag_cloud_limit($args)
{
    // Check if taxonomy option of the widget is set to tags
    if (isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag') {
        $args['number'] = 15; // Number of tags to show
    }
    return $args;
}


// ADD PAGINATION
function fashion_blog_number_pagination()
{

    global $wp_query;
    $big = 9999999; // need an unlikely integer
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text'          => __('<i class="fas fa-angle-left"></i> <p>PREVIOUS POSTS</p>'),
        'next_text'          => __('<p>NEXT POSTS</p> <i class="fas fa-angle-right"></i>'),
    ));
}



// SET NUMBER OF CHARACTERS IN EXCERPT
function fashion_blog_excerpt_length()
{
    return 20;
}

add_filter('excerpt_length', 'fashion_blog_excerpt_length');


// ADD CUSTOM LOGO

add_theme_support('custom-logo');

function themename_custom_logo_setup()
{
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');


