
<div class="jumbotron  jumbotron--with-captions">
    <div class="carousel  slide  js-jumbotron-slider" id="headerCarousel" data-interval="5000">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php
                $i = 0;

                while ( have_rows('jumbotron_slides') ) :

                    the_row();

                    $i++;
                    $css_classes        = ($i === 1) ? 'item active' : 'item';
                    $background_image   = get_sub_field('background_image');

                    if(!is_array($background_image))
                        continue;

                    $background_image   = $background_image['sizes']['large'];
            ?>

                <div class="<?php echo $css_classes; ?>">
                    <img src="<?php echo $background_image; ?>"	alt="<?php the_sub_field('main_heading'); ?>" />
                    <div class="container">
                        <div class="carousel-content">
                            <div class="jumbotron__category">
                                <h6>
                                    <?php the_sub_field('sub_heading'); ?>
                                </h6>
                            </div>
                            <div class="jumbotron__title">
                                <h1>
                                    <?php the_sub_field('main_heading'); ?>
                                </h1>
                            </div>
                            <div class="jumbotron__content">
                                <p><?php the_sub_field('content'); ?></p>

                                <?php if(get_sub_field('link') AND get_sub_field('link_text')) : ?>
                                    <a class="btn  btn-primary" href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('link_text'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#headerCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#headerCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>