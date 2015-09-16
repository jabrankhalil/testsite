<?php

if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page( 'Footer' );
    acf_add_options_sub_page( 'header' );

}
add_action('wp_enqueue_scripts','theme_styles');
function theme_styles()
{
    //include css
	wp_enqueue_style('bootstrap_css',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('font_awesome_css',get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style('modern_business_css',get_template_directory_uri().'/css/modern-business.css');
    wp_enqueue_style('business_front_page_css',get_template_directory_uri().'/css/business-frontpage.css');
    wp_enqueue_style('style_css',get_template_directory_uri().'/style.css');

}
add_action('wp_enqueue_scripts','theme_js');
function theme_js()
{
    //for script to include on condition we use declare global $wp_scripts and then use it ..
	Global $wp_scripts;
	wp_register_script('html5_shiv','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js','','',false);
	wp_register_script('respond_js','https://oss.maxcdn.com/respond/1.4.2/respond.min.js','','',false);
	$wp_scripts->add_data('html5_shiv','conditional','lt IE 9');
	$wp_scripts->add_data('respond_js','conditional','lt IE 9');
    //include javascript..
	wp_enqueue_script('bootstrap_js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'',true);
    wp_enqueue_script('activator_js',get_template_directory_uri().'/js/activator.js',array('jquery','bootstrap_js'),'',true);
    wp_enqueue_script('theme_js',get_template_directory_uri().'/js/theme.js',array('jquery',''),'bootstrap_js',true);
}


// hide admin bar at front end
add_filter('show_admin_bar','__return_false');

//to add new function in theme or plugins we use this function add_theme...
add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus()
{
    //register menus
	register_nav_menus(
		array(
				'header-menu'=>__('Header Menu')
			)
		);
}
add_action('init','register_theme_menus');
// Custom Taxonomy Code
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy( 'wine type', 'wine', array( 'hierarchical' => true, 'label' => 'Wine Type', 'query_var' => true, 'rewrite' => true ) );
}
add_role('basic_contributor','Basic Contributor',array('read'=>true,'edit_post'=>true,'delete_posts'=>true,));

function create_widget($name,$id,$description)
{
    register_sidebar(array(
        'name'=>__($name),
        'id'=>$id,
        'description'=>__($description),
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title' =>'</h3>'

    ));
}

create_widget('Front Page Left','front_left','Display on the left of homepage');
create_widget('Front Page Right','front_right','Display on the right of homepage');
create_widget('Front Page Center','front_center','Display on the center of homepage  ');

function excerpt_length_trim($length)
{
    return 100;
}
add_filter('excerpt_length','excerpt_length_trim',999);

function new_excerpt_more( $more ) {

return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'your-text-domain' ) . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function remove_metaboxes() {
    remove_meta_box( 'custom field' , 'movie' , 'normal' );
}
add_action( 'admin_menu' , 'remove_metaboxes' );


function admin_color()
{
    $col=get_stylesheet_directory_uri();
    wp_admin_css_color(
        'jabran1', __('Jabran1'),
        $col.'/admin color/coffee',
        array('#46403c','#59524c','#c7a589','#9ea476')

    );
}
add_action('admin_init','admin_color');
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/innovative.jpg);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function login_message_show($message)
{
    return"<strong>
            <h1>Innovative Solution</h1></strong></br>".
            "<pre>            \"Things Never Happen Before \" </pre>";
}
add_filter('login_message','login_message_show');
//remove  admin menu


function remove_menus(){

    //remove_menu_page( 'index.php' );                  //Dashboard
    //remove_menu_page( 'edit.php' );                   //Posts
    //remove_menu_page( 'upload.php' );                 //Media
    //remove_menu_page( 'edit.php?post_type=page' );    //Pages
    //remove_menu_page( 'edit-comments.php' );          //Comments
    //remove_menu_page( 'themes.php' );                 //Appearance
    //remove_menu_page( 'plugins.php' );                //Plugins
    //remove_menu_page( 'users.php' );                  //Users
    //remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'remove_menus' );

