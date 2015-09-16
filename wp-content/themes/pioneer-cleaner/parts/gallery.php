<?php
    $title = get_sub_field('gallery_main_title');

    if( !have_rows('gallery_images') )
        return;

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="portfolio-mini-wrapper portfolio-mini-wrapper-gallery">
                <?php PC_Markup::h3($title, 'widget-title'); ?>

                <div class="portfolio-container portfolio-active">

                    <div id="portfolio-content" class="projects-container row">
                        <?php
                        while( have_rows('gallery_images') ):
                            the_row();

                            $image          = get_sub_field('gallery_image');
                            $small_image    = $image['sizes']['medium'];
                            $large_image    = $image['url'];
                            ?>
                            <div class="project-post filter-buildings col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <img src="<?php echo $small_image; ?>" alt="<?php the_sub_field('gallery_title'); ?>"  />
                                <div class="project-content">
                                    <div class="inner-project">
                                        <h3><?php the_sub_field('gallery_title'); ?></h3>
                                        <a href="<?php echo $large_image; ?>" class="project-link" title="<?php the_sub_field('gallery_title'); ?>" data-rel="prettyPhoto[gallery]">
                                            Zoom
                                        </a>
                                    </div>
                                </div>

                            </div>
                        <?php endwhile; ?>
                    </div>

                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

<div class="spacer-big"></div>