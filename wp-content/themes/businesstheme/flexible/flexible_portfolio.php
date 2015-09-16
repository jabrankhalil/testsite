<?php
$portfolio_count=0;
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
                <?php if(have_rows('portfolio')): while(have_rows('portfolio')): the_row();?>
                <?php $portfolio_count++; if($portfolio_count==4):?>
            </div> <div class="row">
            <?php endif; ?>
                    <div class="col-md-4 col-sm-6  portfolio-item " >
                        <?php
                        $image=get_sub_field('portfolioimage');

                        $portfolio_pic=wp_get_attachment_image_src($image['ID'],'portfolio-image');

                        ?>

                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <a href="<?php the_permalink();?>"> <img class="img-responsive" src="<?php echo $portfolio_pic[0]; ?>"  alt=""></a>
                        </a>
                        <div class="portfolio-caption">
                            <a href="<?php the_permalink()?>"><h4><?php echo get_sub_field('title');  ?></h4></a>
                            <p class="text-muted"><?php echo get_sub_field('subheading'); ?></p>
                        </div>

                    </div>

            <?php endwhile;?>
            <?php endif;?>

            </div>

    </div>
</section>