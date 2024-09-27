<?php
function ghyport_register_custom_post_types() {

    $labels = array(
        'name'                  => _x('Projects', 'post type general name'),
        'singular_name'         => _x('Project', 'post type singular name'),
        'menu_name'             => _x('Projects', 'admin menu'),
        'name_admin_bar'        => _x('Project', 'add new on admin bar'),
        'add_new'               => _x('Add New', 'Project'),
        'add_new_item'          => __('Add New Project'),
        'new_item'              => __('New Project'),
        'edit_item'             => __('Edit Project'),
        'view_item'             => __('View Project'),
        'all_items'             => __('All Projects'),
        'search_items'          => __('Search Projects'),
        'parent_item_colon'     => __('Parent Projects:'),
        'not_found'             => __('No Projects found.'),
        'not_found_in_trash'    => __('No Projects found in Trash.'),
        'archives'              => __('Service Archives'),
        'insert_into_item'      => __('Insert into service'),
        'uploaded_to_this_item' => __('Uploaded to this service'),
        'filter_item_list'      => __('Filter Projects list'),
        'items_list_navigation' => __('Project list navigation'),
        'items_list'            => __('Project list'),
        'featured_image'        => __('Project featured image'),
        'set_featured_image'    => __('Set Project featured image'),
        'remove_featured_image' => __('Remove Project featured image'),
        'use_featured_image'    => __('Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-desktop',
        'supports'           => array( 'title' ),
    );
    register_post_type( 'ghyport-project', $args );
}
add_action( 'init', 'ghyport_register_custom_post_types' );