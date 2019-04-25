<?php

function custom_post_types() {

//  //Event
//     register_post_type('event', array(
//
// 'public' => true,
// 'labels' => array(
//     'name' => 'Events',
//     'edit_item' => 'Edit event',
//     'singular_name'  => 'Events'
//
// ),
//     'capability_type' => 'post',
//     'capabilities' => array(
//         'create_posts' => false, // Removes support for the "Add New" function ( use 'do_not_allow' instead of false for multisite set ups )
//     ),
//     'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
//
// 'menu_icon' => 'dashicons-calendar'
// ));
//
//     //Gallery
//     register_post_type('gallery', array(
//
//         'public' => true,
//         'labels' => array(
//             'name' => 'Gallery',
//             'edit_item' => 'Edit gallery',
//             'singular_name'  => 'Gallery'
//
//         ),
//         'capability_type' => 'post',
//         'capabilities' => array(
//             'create_posts' => false, // Removes support for the "Add New" function ( use 'do_not_allow' instead of false for multisite set ups )
//         ),
//         'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
//
//         'menu_icon' => 'dashicons-format-gallery'
//     ));
//
//
//     //Three points
//     register_post_type('three_points', array(
//
//         'public' => true,
//         'labels' => array(
//             'name' => 'Three Points',
//             'edit_item' => 'Three Points',
//             'singular_name'  => 'Three Points'
//
//         ),
//         'capability_type' => 'post',
//         'capabilities' => array(
//             'create_posts' => false, // Removes support for the "Add New" function ( use 'do_not_allow' instead of false for multisite set ups )
//         ),
//         'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
//
//         'menu_icon' => 'dashicons-editor-kitchensink'
//     ));

//
//    //Four images
//    register_post_type('four_images', array(
//
//        'public' => true,
//        'labels' => array(
//            'name' => 'Four Images',
//            'edit_item' => 'Four Images',
//            'singular_name'  => 'Four Images'
//
//        ),
//        'capability_type' => 'post',
//        'capabilities' => array(
//            'create_posts' => true, // Removes support for the "Add New" function ( use 'do_not_allow' instead of false for multisite set ups )
//        ),
//        'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
//
//        'menu_icon' => 'dashicons-format-aside'
//    ));

    //Header
    register_post_type('header', array(

        'public' => true,
        'labels' => array(
            'name' => 'Header',
            'edit_item' => 'Header',
            'singular_name'  => 'Header'

        ),
        'capability_type' => 'post',
        'capabilities' => array(
            'create_posts' => false, // Removes support for the "Add New" function ( use 'do_not_allow' instead of false for multisite set ups )
        ),
        'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts

        'menu_icon' => 'dashicons-palmtree'
    ));
	
	
	
	 register_post_type('footer', array(

        'public' => true,
        'labels' => array(
            'name' => 'Footer',
            'edit_item' => 'Footer',
            'singular_name'  => 'Footer'

        ),
        'capability_type' => 'post',
        'capabilities' => array(
            'create_posts' => false, // Removes support for the "Add New" function ( use 'do_not_allow' instead of false for multisite set ups )
        ),
        'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts

        'menu_icon' => 'dashicons-format-aside'
    ));
}







add_action('init', 'custom_post_types');
