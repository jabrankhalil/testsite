<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="boxed-container">
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php the_field('logo', 'option'); ?>" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive"/>
                    </a>
                </div>
                <div class="header-widgets  header-widgets-desktop">

                    <?php if(pc_has_option_field('phone') OR pc_has_option_field('email_address')) : ?>
                    <div class="widget  widget-icon-box">
                        <div class="icon-box">
                            <i class="fa  fa-phone  fa-3x"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">
                                    <?php the_field('phone', 'option'); ?>
                                </h4>
                                <span class="icon-box__subtitle">
                                    <?php the_field('email_address', 'option'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if(pc_has_option_field('address') OR pc_has_option_field('postcode')) : ?>
                    <div class="widget  widget-icon-box">
                        <div class="icon-box">
                            <i class="fa fa-home fa-3x"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">
                                    <?php the_field('address', 'option'); ?>
                                </h4>
                                <span class="icon-box__subtitle">
                                    <?php the_field('city', 'option'); ?>, <?php the_field('postcode', 'option'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if(pc_has_option_field('opening_time') OR pc_has_option_field('close_time')) : ?>
                    <div class="widget  widget-icon-box">
                        <div class="icon-box">
                            <i class="fa  fa-clock-o  fa-3x"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">
                                    <?php the_field('opening_time', 'option'); ?>
                                </h4>
                                <span class="icon-box__subtitle">
                                    <?php the_field('close_time', 'option'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="widget  widget-social-icons">
                        <?php
                            $social_links = array(
                                'facebook'  => get_field('facebook', 'option'),
                                'twitter'   => get_field('twitter', 'option'),
                                'youtube'   => get_field('youtube', 'option')
                            );

                            $social_links = array_filter($social_links);

                            foreach($social_links as $social_key => $social_link) :
                        ?>
                            <a class="social-icons__link" href="<?php echo $social_link; ?>" target="_blank"><i class="fa  fa-<?php echo $social_key;?>"></i></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Toggle Button for Mobile Navigation -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#buildpress-navbar-collapse">
                    <span class="navbar-toggle__text">MENU</span>
                        <span class="navbar-toggle__icon-bar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                </button>
            </div>
            <div class="sticky-offset js-sticky-offset"></div>
            <div class="container">
                <div class="navigation">
                    <div class="collapse  navbar-collapse" id="buildpress-navbar-collapse">

                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'depth'          => 2,
                            'link_before'    => '',
                            'link_after'     => '',
                            'menu_id'        => 'menu-main-menu',
                            'menu_class'     => 'navigation--main'
                        ) );
                        ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="header-widgets  hidden-md  hidden-lg">

                    <?php if(pc_has_option_field('phone') OR pc_has_option_field('email_address')) : ?>
                    <div class="widget  widget-icon-box">
                        <div class="icon-box">
                            <i class="fa  fa-phone  fa-3x"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">
                                    <?php the_field('phone', 'option'); ?>
                                </h4>
                                <span class="icon-box__subtitle">
                                    <?php the_field('email_address', 'option'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if(pc_has_option_field('address') OR pc_has_option_field('postcode')) : ?>
                    <div class="widget  widget-icon-box">
                        <div class="icon-box">
                            <i class="fa  fa-home  fa-3x"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">
                                    <?php the_field('address', 'option'); ?>
                                </h4>
                                <span class="icon-box__subtitle">
                                    <?php the_field('city', 'option'); ?>, <?php the_field('postcode', 'option'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if(pc_has_option_field('opening_time') OR pc_has_option_field('close_time')) : ?>
                    <div class="widget  widget-icon-box">
                        <div class="icon-box">
                            <i class="fa  fa-clock-o  fa-3x"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">
                                    <?php the_field('opening_time', 'option'); ?>
                                </h4>
                                <span class="icon-box__subtitle">
                                    <?php the_field('close_time', 'option'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="widget  widget-social-icons">
                        <?php
                        $social_links = array(
                            'facebook'  => get_field('facebook', 'option'),
                            'twitter'   => get_field('twitter', 'option'),
                            'youtube'   => get_field('youtube', 'option')
                        );

                        $social_links = array_filter($social_links);

                        foreach($social_links as $social_key => $social_link) :
                            ?>
                            <a class="social-icons__link" href="<?php echo $social_link; ?>" target="_blank"><i class="fa  fa-<?php echo $social_key;?>"></i></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </header>

        <?php the_pc_jumbotron(); ?>

        <div class="master-container">