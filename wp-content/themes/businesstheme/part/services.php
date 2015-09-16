<?php

$args=array(
    'post_type'=>'service',
    'post_per_pages'=>-1,
);

$service=get_posts($args);
$services = array_chunk($service, 3);

?>


<section id="services">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('title','options'); ?></h2>
                <h3 class="section-subheading text-muted"><?php the_field('description','options'); ?></h3>
            </div>
        </div>

        <?php foreach ($services as $service) : ?>
            <div class="row text-center">
                <?php foreach($service as $value):?>
                    <div class="col-md-4 service-images">

                        <?php
                        $image = get_field('image', $value->ID);

                        $profile_pic = wp_get_attachment_image_src($image['ID'],'service-image');

                        ?>

                        <a href="<?php echo get_permalink($value->ID); ?>"> <img class="servicess" src="<?php echo $profile_pic[0]; ?>" /></a>


                        <a href="<?php echo get_permalink($value->ID); ?>"> <h4 class="service-heading"><?php echo get_the_title($value); ?></h4></a>

                        <p class="text-muted"><?php the_field('description', $value->ID); ?></p>

                    </div>
                <?php endforeach; ?>

            </div>
        <?php endforeach; ?>
    </div>

</section>