<?php

//Template Name:Flexible Page

get_header();
$flexible_directory = get_template_directory() . "/flexible/";

if( have_rows('fexible_content') ):
    while ( have_rows('fexible_content') ) :
        the_row();
        $row_layout   = get_row_layout();
        $row_template = $flexible_directory . $row_layout . ".php";
            include $row_template;

    endwhile;
    endif;


get_footer();
