<div class="hentry container" role="main">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-grid widget widget_text panel-last-child">
                <?php PC_Markup::h3(get_sub_field('title'), 'widget-title'); ?>
            </div>
        </div>
    </div>
    <div class="spacer"></div>
    <div class="row">
        <div class="col-md-3">
            <div class="textwidget panel widget">
                <span class="icon-container">

                    <span class="fa fa-home"></span></span>

                    <?php if(pc_has_option_field('address') OR pc_has_option_field('postcode')) : ?>
                        <b><?php bloginfo('name'); ?></b><br>
                        <?php the_field('address', 'option'); ?><br>
                        <?php the_field('city', 'option'); ?>, <?php the_field('postcode', 'option'); ?>
                        <br>
                    <?php endif; ?>

                    <?php if(pc_has_option_field('phone')) : ?>
                        <span class="icon-container"><span class="fa fa-phone"></span></span>
                        <b><?php the_field('phone', 'option'); ?></b>
                        <br>
                    <?php endif; ?>

                    <?php if(pc_has_option_field('email_address')) : ?>
                        <span class="icon-container"><span class="fa fa-envelope"></span></span>
                        <a href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a>
                        <br>
                    <?php endif;?>

                    <?php if(pc_has_option_field('opening_time') OR pc_has_option_field('close_time')) : ?>
                        <br>
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

                    <br />
            </div>
            <div class="panel widget widget_pt_social_icons panel-last-child">
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
        <div class="col-md-9">
            <?php
                if(pc_has_option_field('email_address')) :
                    do_shortcode(get_field('contact_form7_shortcode', 'option'));
                endif;
            ?>
        </div>
    </div>
</div><!-- /container -->