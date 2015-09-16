<?php
$args=array(
    'post_type'=>'portfolio',
    'post_per_pages'=>-1,
);

$portfolio=get_posts($args);
$portfolios = array_chunk($portfolio, 3);
?>
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('heading','options');?></h2>
                <h3 class="section-subheading text-muted"><?php the_field('subheading','options');?></h3>
            </div>
        </div>
        <?php foreach($portfolios as $portfolio_value):?>
            <div class="row">
                <?php foreach($portfolio_value as $port_value) : ?>
                    <div class="col-md-4 col-sm-6  portfolio-item " >
                        <?php
                        $image = get_field('portfolio-image', $port_value->ID);

                        $portfolio_pic = wp_get_attachment_image_src($image['ID'],'portfolio-image');

                        ?>

                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <a href="<?php echo get_permalink($port_value->ID);?>"> <img class="img-responsive" src="<?php echo $portfolio_pic[0]; ?>"  alt=""></a>

                        </a>
                        <div class="portfolio-caption">
                            <a href="<?php echo get_permalink($port_value->ID)?>"><h4><?php echo get_the_title($port_value); ?></h4></a>
                            <p class="text-muted"><?php the_field('subheading', $port_value->ID); ?></p>
                        </div>

                    </div>
                <?php endforeach;?>

            </div>
        <?php endforeach; ?>
    </div>
</section>