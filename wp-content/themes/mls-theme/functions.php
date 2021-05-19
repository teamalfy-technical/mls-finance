<?php

function africabp_files(){
    wp_enqueue_style('africabp_main_styles',get_stylesheet_uri());

}

add_action('wp_enqueue_scripts','africabp_files');


function abp_post_types(){
    register_post_type('slider', array(
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        'public' => true,
        'labels' => array(
            'name' => 'Slider',
            'add_new_item' => 'Add New SLider',
            'edit_item' => 'Edit Slider',
            'all_items' => 'All Sliders'
        ),
        'menu_icon' => 'dashicons-location'
    ));
    register_post_type('kath', array(
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        'public' => true,
        'labels' => array(
        'name' => 'Kath',
        'add_new_item' => 'Add New kath Hospital',
        'edit_item' => 'Edit kath Hospital',
        'all_items' => 'All kath Hospitals'
        ),
        'menu_icon' => 'dashicons-location'
    ));
    register_post_type('dodowa', array(
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        'public' => true,
        'labels' => array(
        'name' => 'Dodowa',
        'add_new_item' => 'Add New dodowa Hospital',
        'edit_item' => 'Edit dodowa Hospital',
        'all_items' => 'All dodowa Hospitals'
        ),
        'menu_icon' => 'dashicons-location'
    ));
}
add_action('init', 'abp_post_types');

// @ini_set( 'upload_max_size' , '400M' );
// @ini_set( 'post_max_size', '400M');
// @ini_set( 'max_execution_time', '600' );

// function abp_post_types(){
//     register_post_type('hospitals', array(
//         'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
//         'public' => true,
//         'labels' => array(
//             'name' => 'Hospitals',
//             'add_new_item' => 'Add New Hospital',
//             'edit_item' => 'Edit Hospital',
//             'all_items' => 'All Hospitals'
//         ),
//         'menu_icon' => 'dashicons-location'
//     ));
//     register_post_type('residential', array(
//         'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
//         'public' => true,
//         'labels' => array(
//             'name' => 'Residential',
//             'add_new_item' => 'Add New Residential',
//             'edit_item' => 'Edit Residential',
//             'all_items' => 'All Residentials'
//         ),
//         'menu_icon' => 'dashicons-tagcloud'
//     ));
//     register_post_type('factory', array(
//         'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
//         'public' => true,
//         'labels' => array(
//             'name' => 'Factories',
//             'add_new_item' => 'Add New Factory',
//             'edit_item' => 'Edit Factory',
//             'all_items' => 'All Factories'
//         ),
//         'menu_icon' => 'dashicons-color-picker'
//     ));
//     register_post_type('office', array(
//         'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
//         'public' => true,
//         'labels' => array(
//             'name' => 'Offices',
//             'add_new_item' => 'Add New Office',
//             'edit_item' => 'Edit Office',
//             'all_items' => 'All Offices'
//         ),
//         'menu_icon' => 'dashicons-admin-home'
//     ));
// }
// add_action('init', 'abp_post_types');