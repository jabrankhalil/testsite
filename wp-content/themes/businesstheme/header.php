<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>
    </title>


<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class();?>   class="index">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name');?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'depth'          => 2,
                'link_before'    => '',
                'link_after'     => '',
                'menu_class'     => 'nav navbar-nav navbar-right'
            ) );
            ?>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>



<header>
       <div class="container">
             <div class="intro-text">
                <div class="intro-lead-in"><?php the_field('mainheading','options');?></div>
                <div class="intro-heading"><?php the_field('subheading','options');?></div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
             </div>
       </div>

</header>









