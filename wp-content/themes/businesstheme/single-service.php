<?php
get_header();

?>

<section id="services">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('title','options'); ?></h2>
                <h3 class="section-subheading text-muted"><?php the_field('description','options'); ?></h3>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-5">
                <?php next_post_link('%link','<button class="page-scroll btn btn-md">PREV</button>'); ?>
                <?php previous_post_link('%link','<button class="page-scroll btn btn-md">NEXT</button>'); ?>
            </div>
        </div>
    <div class="row text-center">

            <div class="col-md-8 service-images">

                <?php
                $image = get_field('image', $value->ID);

                $profile_pic = wp_get_attachment_image_src($image['ID'],'single');

                ?>

                <img class="servicess" src="<?php echo $profile_pic[0]; ?>" />

            </div>
            <div class="col-md-4">

                 <h4 class="service-heading"><?php echo get_the_title($value); ?></h4>

                <p class="text-muted"><?php the_field('description', $value->ID); ?></p>

            </div>


    </div>

</div>

</section>


<?php get_footer(); ?>