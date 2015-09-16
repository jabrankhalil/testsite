<?php
    $title = get_sub_field('gallery_links_title');

    if( !have_rows('gallery_links_images') )
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
                        while( have_rows('gallery_links_images') ):
                            the_row();

                            $image          = get_sub_field('gallery_link_image');
                            $small_image    = $image['sizes']['medium'];
                            $large_image    = $image['url'];
                            ?>
                            <div class="project-post filter-buildings col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="<?php echo get_sub_field('gallery_link_link') ? get_sub_field('gallery_link_link') : '#' ?>">
                                    <img src="<?php echo $small_image; ?>" alt="<?php the_sub_field('gallery_link_title'); ?>"  />

                                    <div class="project-content">
                                        <div class="inner-project">
                                            <h3><?php the_sub_field('gallery_link_title'); ?></h3>
                                        </div>
                                    </div>
                                </a>
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