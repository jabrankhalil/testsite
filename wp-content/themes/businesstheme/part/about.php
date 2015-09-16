<?php

$args=array(
    'post_type'=>'about',
    'post_per_pages'=>-1,
);

$about=get_posts($args);
$abouts = array_chunk($about, 3);
$current=0;
?>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('aboutheading','options'); ?></h2>
                <h3 class="section-subheading text-muted"><?php the_field('aboutsubheading','options')?></h3>
            </div>
        </div>
        <?php foreach ($abouts as $about_info) : ?>
        <div class="row">
            <?php foreach($about_info as $about_data):?>
            <div class="col-lg-12">
                <?php
                $image = get_field('image', $about_data->ID);

                $about_pic = wp_get_attachment_image_src($image['ID'],'about-image');

                ?>
                <ul class="timeline">

                    <?php
                    $current++;
                    if($current%2==0):
                        echo "<li class='timeline-inverted'>";
                        else:
                         echo "<li>";
                    endif;?>

                        <div class="timeline-image">
                            <a href="<?php echo get_permalink($about_data->ID);?>"> <img class="img-circle img-responsive" src="<?php echo $about_pic[0]; ?>" /></a>


                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php the_field('date', $about_data->ID); ?></h4>
                                <h4 class="subheading"><a href="<?php echo get_permalink($about_data->ID); ?>"><?php echo get_the_title($about_data); ?></a></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"><?php the_field('description', $about_data->ID); ?></p>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
            <?php endforeach;?>
        </div>
        <?php endforeach;?>
    </div>
</section>