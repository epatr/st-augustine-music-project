<?php

if (!function_exists('bulmawordpress_setup')) :
function bulmawordpress_setup() {
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video', 'audio'));
        add_theme_support('title-tag');
        
        register_nav_menus(array(
                'primary' => 'Primary Menu'
            ));
        
        // Add support for flyers, thumbnails, and Open Graph
        add_image_size('flyer-thumb', 240, 360, true);
        add_image_size('flyer-tiny', 75, 150);
        add_image_size('open-graph', 1200, 630, array( 'center', 'center' ));
        add_image_size('open-graph-half', 600, 315, array( 'center', 'center' ));
    }
endif;
add_action('after_setup_theme', 'bulmawordpress_setup');

// Add stuff to the head
function bulmawordpress_scripts() {
        wp_enqueue_style('google-fonts-merriweather', '//fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i|Oswald:300,400,700', array(), null);
        wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'bulmawordpress_scripts');

// Control the read more string
function bulmawordpress_excerpt_more($more) {
    return ' ... ';
}
add_filter( 'excerpt_more', 'bulmawordpress_excerpt_more' );

// Control the <!--more--> text
function modify_read_more_link() {
    return ' <a href="' . get_permalink() . '">More...</a>';
}
add_filter('the_content_more_link', 'modify_read_more_link');

// Disable emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// Testing the Upcoming Events query include

function bulmawordpress_event_query($file, $variables) {
    return include (TEMPLATEPATH . '/templates/queries/' . $file . '.php');
}