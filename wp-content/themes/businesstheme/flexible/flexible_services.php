<?php

$service_count=0;
?>

<section id="services">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('title','options'); ?></h2>
                <h3 class="section-subheading text-muted"><?php the_field('description','options'); ?></h3>
            </div>
        </div>

            <div class="row text-center">
                    <?php if(have_rows('service')): while(have_rows('service')): the_row();?>
                    <?php $service_count++; if($service_count1==4):?>
            </div> <div class="row text-center">
                    <?php endif; ?>

                    <div class="col-md-4 service-images">

                        <?php
                        $image=get_sub_field('image');

                        $service_pic=wp_get_attachment_image_src($image['ID'],'service-image');
                        ?>

                        <a href="<?php the_permalink();?>"> <img class="servicess" src="<?php echo $service_pic[0]; ?>"  width="<?php echo $team_pic[1];?>" height="<?php echo $team_pic[2];?>" alt=""></a>


                        <a href="<?php the_permalink();?>"> <h4 class="service-heading"><?php echo get_sub_field('title');  ?></h4></a>

                        <p class="text-muted"><?php echo get_sub_field('description'); ?></p>

                    </div>



        <?php endwhile;?>
        <?php endif;?>
            </div>
    </div>

</section>