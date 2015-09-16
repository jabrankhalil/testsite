<?php

/* ========================================================================================================================

  Custom Post Types & ACF

  ======================================================================================================================== */

require_once( get_template_directory() . '/inc/post-types/services.php' );
require_once( get_template_directory() . '/acf/acf.php' );

/* ========================================================================================================================

  Theme's callbacks

  ======================================================================================================================== */
add_action( 'after_setup_theme', 'pc_setup' );
add_action( 'wp_enqueue_scripts', 'pc_scripts' );
add_action( 'init', 'pc_replace_default_jquery' );



function pc_setup() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 100, 75, true );
    add_image_size('client-logos', 208, 98, true );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu' )
    ) );

    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    add_editor_style( array( 'css/editor-style.css' ) );

    if( function_exists('acf_add_options_page') ) {
        acf_add_options_sub_page('Header');
        acf_add_options_sub_page('Footer');
        acf_add_options_sub_page('404');
        acf_add_options_sub_page('Homepage Options');
    }
}

function pc_replace_default_jquery() {

    if(is_admin())
        return;

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '2.1.3');
    wp_enqueue_script('jquery');
}

function pc_fonts_url() {

    $fonts = array(
        'Source Sans Pro:400,700:latin',
        'Montserrat:700:latin'
    ) ;

    $fonts_url = add_query_arg( array(
        'family' => urlencode( implode( '|', $fonts ) ),
    ), '//fonts.googleapis.com/css' );

    return $fonts_url;
}

function pc_scripts() {
    wp_enqueue_style( 'pc-fonts', pc_fonts_url(), array(), null );

    //Our Theme's css lirbaries
    wp_enqueue_style( 'pc-pretty-photo',        get_template_directory_uri() . '/css/prettyPhoto.css', array(), '3.1.5');

    // Load our main stylesheet.
    wp_enqueue_style( 'pc-style',               get_template_directory_uri() . '/css/style.css', array('pc-pretty-photo'));
    wp_enqueue_style( 'pc-custom-style',        get_stylesheet_uri());

    wp_enqueue_script( 'pc-isotope',            get_template_directory_uri() . '/js/isotope.js',                   array('jquery'), '20150623',false);
    wp_enqueue_script( 'pc-imagesloaded',       get_template_directory_uri() . '/js/imagesloaded.js',              array('jquery'), '20150623',false);
    wp_enqueue_script( 'pc-modernizr-custom',   get_template_directory_uri() . '/js/modernizr.custom.24530.js',    array('jquery'), '20150623',false);

    //Scripts
    wp_enqueue_script( 'pc-almond',             get_template_directory_uri() . '/js/almond.js',                    array(), '20150623', true);
    wp_enqueue_script( 'pc-underscore',         get_template_directory_uri() . '/js/underscore.js',                array(), '20150623',true);
    wp_enqueue_script( 'pc-pretty-photo',       get_template_directory_uri() . '/js/jquery.prettyPhoto.js',        array(), '20150623',true);
    wp_enqueue_script( 'pc-header-carousel',    get_template_directory_uri() . '/js/header_carousel.js',           array(), '20150623',true);
    wp_enqueue_script( 'pc-sticky-navbar',      get_template_directory_uri() . '/js/sticky_navbar.js',             array(), '20150623',true);
    wp_enqueue_script( 'pc-simplemap',          get_template_directory_uri() . '/js/simplemap.js',                 array(), '20150623',true);

    wp_enqueue_script( 'pc-main-min',           get_template_directory_uri() . '/js/main.min.js',                  array(), '20150623',true);
    wp_enqueue_script( 'pc-script',             get_template_directory_uri() . '/js/main.js', array(
        'pc-isotope',
        'pc-imagesloaded',
        'pc-modernizr-custom',
        'pc-almond',
        'pc-underscore',
        'pc-pretty-photo',
        'pc-header-carousel',
        'pc-sticky-navbar',
        'pc-simplemap',
        'pc-main-min',
    ), '20150623', true );

    wp_enqueue_script( 'pc-require',            get_template_directory_uri() . '/js/require.js',                   array(), '20150623',true);

}


function the_pc_jumbotron()
{
    if(is_singular())
    {
        if ( have_rows('jumbotron_slides') ) {
            get_template_part('parts/jumbotron');
            return;
        }

        if(get_field('main_heading')) {
            get_template_part('parts/main-heading');
            return;
        }
    }

    get_template_part('parts/main-heading-default');
}

function pc_has_option_field($acf_field_name)
{
    $value = get_field($acf_field_name, 'option');
    return !empty($value);
}

function pc_load_google_map_js()
{
    echo "<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>";
}

function the_pc_rating_icons($number)
{
    $rating = intval($number);

    if($number < 1)
        return;

    for($i = 1; $i <= $rating; $i++) :
        echo '<i class="fa fa-star"></i>';
    endfor;
}


class PC_Markup
{
    //@FIXME remove this after reading & understanding it
    //http://stackoverflow.com/questions/6829609/php-singleton-vs-full-static-class-when-use-what

    public static function h1($text, $class = null, $id = null)
    {
        if(empty($text))
            return;

        printf('<h1 %s>%s</h1>', self::convert_to_attributes(compact('class', 'id')), $text);
    }

    public static function h2($text, $class = null, $id = null)
    {
        if(empty($text))
            return;

        printf('<h2 %s>%s</h2>', self::convert_to_attributes(compact('class', 'id')), $text);
    }

    public static function h3($text, $class = null, $id = null)
    {
        if(empty($text))
            return;

        printf('<h3 %s>%s</h3>', self::convert_to_attributes(compact('class', 'id')), $text);
    }

    private static function convert_to_attributes($attributes)
    {
        $attributes = array_filter($attributes);

        if(array_key_exists('class', $attributes))
            $attributes['class'] = is_array($attributes['class']) ? implode(' ', $attributes['class']) : $attributes['class'];

        $return = array();
        foreach($attributes as $attribute_key => $attribute_value)
            $return[] = "$attribute_key = '$attribute_value'";

        return implode(' ', $return);
    }
}