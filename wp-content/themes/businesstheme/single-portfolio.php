<?php
get_header();
?>

    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php the_field('heading','options');?></h2>
                    <h3 class="section-subheading text-muted"><?php the_field('subheading','options');?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-5">
                    <?php next_post_link('%link','<button class="page-scroll btn btn-md">PREV</button>'); ?>
                    <?php previous_post_link('%link','<button class="page-scroll btn btn-md">NEXT</button>'); ?>
                </div>
            </div>
                <div class="row">

                        <div class="col-md-4 col-sm-6  portfolio-item " >
                            <?php
                            $image = get_field('portfolio-image', $port_value->ID);

                            $portfolio_pic = wp_get_attachment_image_src($image['ID'],'single');

                            ?>
                                <img class="img-responsive" src="<?php echo $portfolio_pic[0]; ?>"  alt="">

                            <div class="portfolio-caption">
                                <h4><?php echo get_the_title($port_value); ?></h4>
                                <p class="text-muted"><?php the_field('subheading', $port_value->ID); ?></p>
                            </div>

                        </div>

                </div>

        </div>
    </section>

<?php get_footer(); ?>