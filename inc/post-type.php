<?php
//custom post type
add_action('init', 'create_posttype');
function create_posttype()
{
    register_taxonomy(
        'category-programs',
        ['programs'],
        array(
            'label'   => ('Category programs'),
            'rewrite' => array('slug' => 'category-programs'),
            'meta_box_cb'             => 'post_categories_meta_box',
        )
    );
    register_post_type(
        'programs',
        array(
            'labels'              => array(
                'name'            => __('Programs'),
                'singular_name'   => __('Program')
            ),
            'public'              => true,
            'hierarchical'        => true,
            // 'has_archive'         => true,
            'show ui'             => true,
            'menu_icon'           => 'dashicons-buddicons-buddypress-logo',
            'rewrite'             => array('slug' => 'programs'),
            'show_in_rest'        => true,
            'menu_position'       => 3,
            'taxonomies'          => array('category-programs'),
            'supports'            => array('thumbnail', 'title', 'excerpt'),
        )
    );
    register_taxonomy(
        'category-resources',
        ['resources'],
        array(
            'label'   => ('Category resources'),
            'rewrite' => array('slug' => 'category-resources'),
            'meta_box_cb'             => 'post_categories_meta_box',
        )
    );
    register_post_type(
        'resources',
        array(
            'labels'              => array(
                'name'            => __('Resources'),
                'singular_name'   => __('Resource')
            ),
            'public'              => true,
            'hierarchical'        => true,
            // 'has_archive'         => true,
            'show ui'             => true,
            'menu_icon'           => 'dashicons-info-outline',
            'rewrite'             => array('slug' => 'resources'),
            'show_in_rest'        => true,
            'menu_position'       => 3,
            'taxonomies'          => array('category-resources'),
            'supports'            => array('thumbnail', 'title', 'excerpt'),
        )
    );
}
