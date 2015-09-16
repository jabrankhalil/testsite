<?php
add_action('init','post_type');
function post_type()
{


    $service = array(

        'name' => 'services',
        'singular_name' => 'service',
        'add_new' => 'Add New service',
        'add_new_item' => 'Add New service',
        'edit_item' => 'Edit service',
        'new_item' => 'New service',
        'all_items' => 'All services',
        'view_item' => 'View service',
        'search_items' => 'Search services',
        'not_found' => 'No services Found',
        'not_found_in_trash' => 'No services found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Services',


    );
    $services = array(
        'labels' => $service,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'services'),
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'editor', 'author','thumbnail'),
        'menu_position' => 5
    );
    register_post_type('service', $services);

    $portfolios = array(

        'name' => 'Portfolio',
        'singular_name' => 'Portfolio',
        'add_new' => 'Add New Portfolio',
        'add_new_item' => 'Add New Portfolio',
        'edit_item' => 'Edit Portfolio',
        'new_item' => 'New Portfolio',
        'all_items' => 'All Portfolio',
        'view_item' => 'View Portfolio',
        'search_items' => 'Search Portfolios',
        'not_found' => 'No Portfolio Found',
        'not_found_in_trash' => 'No Portfolio found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Portfolio',


    );
    $portfolio = array(
        'labels' => $portfolios,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'portfolios'),
        'menu_icon' => 'dashicons-video-alt2',
        'supports' => array('title', 'editor'),
        'menu_position' => 5
    );
    register_post_type('portfolio', $portfolio);

    $about = array(

        'name' => 'About',
        'singular_name' => 'About',
        'add_new' => 'Add New About',
        'add_new_item' => 'Add New About',
        'edit_item' => 'Edit About',
        'new_item' => 'New About',
        'all_items' => 'All About',
        'view_item' => 'View About',
        'search_items' => 'Search About',
        'not_found' => 'No Abouts Found',
        'not_found_in_trash' => 'No Abouts found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'About',


    );
    $Abouts = array(
        'labels' => $about,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'rewrite' => array('slug' => 'abouts'),
        'menu_icon' => 'dashicons-smiley',
        'supports' => array('title', 'editor'),
        'menu_position' => 5
    );
    register_post_type('about', $Abouts);

    $team = array(

        'name' => 'Team',
        'singular_name' => 'Team',
        'add_new' => 'Add New Team',
        'add_new_item' => 'Add New Team',
        'edit_item' => 'Edit Team',
        'new_item' => 'New Team',
        'all_items' => 'All Team',
        'view_item' => 'View Team',
        'search_items' => 'Search Team',
        'not_found' => 'No Team Found',
        'not_found_in_trash' => 'No Team found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Team',


    );
    $Team = array(
        'labels' => $team,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'rewrite' => array('slug' => 'teams'),
        'menu_icon' => 'dashicons-smiley',
        'supports' => array('title', 'editor'),
        'menu_position' => 5
    );
    register_post_type('team', $Team);




    $clients = array(

        'name' => 'Clients',
        'singular_name' => 'Clients',
        'add_new' => 'Add New Client',
        'add_new_item' => 'Add New Client',
        'edit_item' => 'Edit Client',
        'new_item' => 'New Client',
        'all_items' => 'All Client',
        'view_item' => 'View Client',
        'search_items' => 'Search Clients',
        'not_found' => 'No Team Found',
        'not_found_in_trash' => 'No Clients found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Clients',


    );
    $client = array(
        'labels' => $clients,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'rewrite' => array('slug' => 'clients'),
        'menu_icon' => 'dashicons-businessman',
        'supports' => array('title', 'editor','thumbnail'),
        'menu_position' => 5
    );
    register_post_type('client', $client);

}

