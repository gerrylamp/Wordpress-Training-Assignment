<?php

function post_types(){
    register_post_type('news', array(
        'has_archive' => true,
        'public'      => true,
        'labels'      => array(
            'name'    => 'News',
            'add_new_item' => 'Add New News',
            'edit_item' => 'Edit News',
            'all_item'  => "All News",
            'singular_name' => 'News'
        ),
        'menu_icon' => 'dashicons-megaphone'
    ));


    register_post_type('tip', array(
        'rewrite'     => array(
            'slug'    => 'tips'
        ),
        'has_archive' => true,
        'public'      => true,
        'labels'      => array(
            'name'    => 'Tips',
            'add_new_item' => 'Add New Tip',
            'edit_item' => 'Edit Tip',
            'all_item'  => "All Tips",
            'singular_name' => 'Tip'
        ),
        'menu_icon' => 'dashicons-lightbulb'
    ));
}
add_action('init', 'post_types');

?>