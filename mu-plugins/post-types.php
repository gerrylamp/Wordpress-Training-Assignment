<?php

function post_types(){
    register_post_type('notice', array(
        'rewrite'     => array(
            'slug'    => 'news'
        ),
        'has_archive' => true,
        'public'      => true,
        'labels'      => array(
            'name'    => 'Notices',
            'add_new_item' => 'Add New Notice',
            'edit_item' => 'Edit Notice',
            'all_item'  => "All Notices",
            'singular_name' => 'Notice'
        ),
        'menu_icon' => 'dashicons-megaphone'
    ));


    register_post_type('column', array(
        'rewrite'     => array(
            'slug'    => 'tips'
        ),
        'has_archive' => true,
        'public'      => true,
        'labels'      => array(
            'name'    => 'Columns',
            'add_new_item' => 'Add New Column',
            'edit_item' => 'Edit Column',
            'all_item'  => "All Columns",
            'singular_name' => 'Column'
        ),
        'menu_icon' => 'dashicons-lightbulb'
    ));
}
add_action('init', 'post_types');

?>