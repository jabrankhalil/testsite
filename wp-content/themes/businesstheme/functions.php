<?php

add_action( 'after_setup_theme', 'businesstheme' );
add_action('wp_enqueue_scripts','theme_styles_js');
add_filter('show_admin_bar','__return_true');// hide admin bar at front end

if ( ! function_exists( 'businesstheme' ) ) :

    function businesstheme() {

        // Enable support for Post Thumbnails, and declare two sizes.
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        //set_post_thumbnail_size( 255, 255, true );
        add_image_size( 'twentyfourteen-full-width', 1038, 576, true );
        add_image_size( 'service-image',355,255,true);
        add_image_size( 'portfolio-image',400 , 289,true);
        add_image_size( 'team-image',235 , 235,true);
        add_image_size( 'about-image',170 , 170,true);
        add_image_size('single',500,500);

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary'          => __( 'Primary menu'),
            'footer'           =>__('Footer menu'),
            'one page site'    =>__('One page site'),

        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );


        add_editor_style( array( 'css/editor-style.css' ) );

        if( function_exists('acf_add_options_page') )
        {
            acf_add_options_sub_page('Header');
            acf_add_options_sub_page('Footer');
            acf_add_options_sub_page('Service');
            acf_add_options_sub_page('Portfolio');
            acf_add_options_sub_page('Team');
            acf_add_options_sub_page('about');

        }



        // This theme uses its own gallery styles.
        add_filter( 'use_default_gallery_style', '__return_false' );
    }
endif; // twentyfourteen_setup


/* ========================================================================================================================

  including css and js

  ======================================================================================================================== */

function theme_styles_js()
{
//include css
    wp_enqueue_style('bootstrap'                ,get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('agency'                   ,get_template_directory_uri().'/css/agency.css',array('bootstrap'));
    wp_enqueue_style('font_awesome'             ,get_template_directory_uri().'/css/font-awesome.min.css',array('agency'),'4.2.0');
    wp_enqueue_style('business_front_page1'     ,'https://fonts.googleapis.com/css?family=Montserrat:400,700',array('font_awesome'));
    wp_enqueue_style('business_front_page2'     ,'https://fonts.googleapis.com/css?family=Kaushan+Script');
    wp_enqueue_style('business_front_page3'     ,'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic');
    wp_enqueue_style('business_front_page4'     ,'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700');
    wp_enqueue_style('mailchimp_css1'            ,'https://cdn-images.mailchimp.com/embedcode/classic-081711.css');
    wp_enqueue_style('style_css'                ,get_stylesheet_uri());

    //for script to include on condition we use declare global $wp_scripts and then use it ..
    Global $wp_scripts;
    wp_register_script('html5_shiv',            'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
    wp_register_script('respond_js',            'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);
    $wp_scripts->add_data('html5_shiv',         'conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js',         'conditional', 'lt IE 9');
//include javascript..
    wp_enqueue_script('bootstrap_js',                   get_template_directory_uri() . '/js/bootstrap.min.js',                                              array('jquery'), '', true);
    wp_register_script('cdnjs',                         'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',                     array('jquery', 'bootstrap_js'), '', true);
    wp_enqueue_script('classie_js',                     get_template_directory_uri() . '/js/classie.js',                                                    array('jquery', 'bootstrap_js', 'cdnjs'), '', true);
    wp_enqueue_script('abpAnimatedHeader_js',           get_template_directory_uri() . '/js/cbpAnimatedHeader.js',                                          array('jquery', 'bootstrap_js', 'cdnjs', 'classie_js'), '', true);
    wp_enqueue_script('jqBootstrapValidation_js',       get_template_directory_uri() . '/js/jqBootstrapValidation.js',                                      array('jquery', 'bootstrap_js', 'cdnjs', 'classie_js', 'abpAnimatedHeader_js'), '', true);
    wp_enqueue_script('contact_me_js',                  get_template_directory_uri() . '/js/contact_me.js',                                                 array('jquery', 'bootstrap_js', 'cdnjs', 'classie_js', 'abpAnimatedHeader_js', 'jqBootstrapValidation_js'), '', true);
    wp_enqueue_script('agency_js',                      get_template_directory_uri() . '/js/agency.js',                                                     array('jquery', 'bootstrap_js', 'cdnjs', 'classie_js', 'abpAnimatedHeader_js', 'jqBootstrapValidation_js', 'contact_me_js'), '', true);
    wp_enqueue_script('mailchimp',                      'https:////s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js',                             array('jquery', 'bootstrap_js', 'cdnjs', 'classie_js', 'abpAnimatedHeader_js', 'jqBootstrapValidation_js', 'contact_me_js'), '', true);
    wp_enqueue_script('mailchimp_js',                    get_template_directory_uri() .   'js/mailchimp.js',                             array('jquery','mailchimp'), '', true);
    wp_enqueue_script('google_map_js',                  'https://maps.googleapis.com/maps/api/js',array('jquery'),'',true);
    wp_enqueue_script('map_js',                         get_template_directory_uri().'/js/map.js',array('jquery','google_map_js'),'',true);


}



