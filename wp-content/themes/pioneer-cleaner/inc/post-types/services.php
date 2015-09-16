<?php

$args = array(
    'label'              => 'Services',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'page',
    'hierarchical'       => false,
    'has_archive'        => true,
    'rewrite'            => array('slug' => 'services'),
    'menu_position'      => 21,
    'menu_icon'          => 'dashicons-format-status',
    'supports'           => array('title')
);

register_post_type( 'services' ,$args );