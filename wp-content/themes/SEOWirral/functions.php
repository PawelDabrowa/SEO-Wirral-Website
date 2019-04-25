<?php

    function web_files() {

        wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400');
        wp_enqueue_style( 'normalize_stylesheet', get_template_directory_uri() . '/css/normalize.css' );
        wp_enqueue_style( 'fontawsome', '//use.fontawesome.com/releases/v5.4.1/css/all.css');
        wp_enqueue_style( 'grid_stylesheet', get_template_directory_uri() . '/css/grid.css' );
        wp_enqueue_style( 'queries_stylesheet', get_template_directory_uri() . '/resources/queries.css');
        wp_enqueue_style( 'queries_animate', get_template_directory_uri() . '/resources/animate.css');
		wp_enqueue_style( 'resources_stylesheet', get_template_directory_uri() . '/resources/style.css' );
        wp_enqueue_style('web_main_styles', get_stylesheet_uri(), NULL, microtime());

        wp_enqueue_script('cloud_flare_script--js', '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js', NULL, true);
        wp_enqueue_script('cloud_flare_script--html', '//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js', NULL, true);
        wp_enqueue_script('cloud_flare_script--selec', '//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js', NULL, true);
        wp_enqueue_script('ionic_icons', '//unpkg.com/ionicons@4.4.2/dist/ionicons.js', NULL, true);
        wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/vendors/js/jquery.waypoints.min.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'fullclip', get_template_directory_uri() . '/vendors/js/fullclip.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'fullclipmin', get_template_directory_uri() . '/vendors/js/fullclip.min.js', array( 'jquery' ), '1.0', true );
        wp_enqueue_script( 'smoothup', get_template_directory_uri() . '/resources/js/script.js', array( 'jquery' ), '', true );

        //Making jQuery to load from Google Library
        if (!is_admin()) {
            // comment out the next two lines to load the local copy of jQuery
            wp_deregister_script('jquery');
            wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', NULL, true);
            wp_enqueue_script('jquery');
        }
    }



add_action('wp_enqueue_scripts', 'web_files');

function web_features() {
  register_nav_menu('SEOWirralMenuLocation','SEO Wirral Menu'); //----Menu Function-----
add_theme_support('title-tag');
 
  
}
add_action('after_setup_theme', 'web_features');

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50);


//-----------------------------------
