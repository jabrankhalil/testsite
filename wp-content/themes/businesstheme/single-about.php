<?php
get_header();
?>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php the_field('aboutheading','options'); ?></h2>
                    <h3 class="section-subheading text-muted"><?php the_field('aboutsubheading','options')?></h3>
                </div>
            </div>

                <div class="row">

                        <div class="col-lg-12">
                            <?php
                            $image = get_field('image', $about_data->ID);

                            $about_pic = wp_get_attachment_image_src($image['ID'],'about-image');

                            ?>
                            <ul class="timeline">

                                <li>
                                    <div class="timeline-image">
                                        <img class="img-circle img-responsive" src="<?php echo $about_pic[0]; ?>" />

                                    </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?php the_field('date', $about_data->ID); ?></h4>
                                        <h4 class="subheading"><?php echo get_the_title($about_data); ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?php the_field('description', $about_data->ID); ?></p>
                                    </div>
                                </div>
                                </li>


                            </ul>
                        </div>

                </div>

        </div>
    </section>

<?php get_footer();?>