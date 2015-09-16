<?php
$about_count=0;
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

            <div class="row">
                <?php if(have_rows('about')): while(have_rows('about')): the_row();?>
                <?php $about_count++; if($about_count==4):?>
            </div> <div class="row">
                <?php endif; ?>
                    <div class="col-lg-12">
                        <?php
                        $image=get_sub_field('image');

                        $about_pic=wp_get_attachment_image_src($image['ID'],'portfolio-image');
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
                                <a href="<?php the_permalink();?>?>"> <img class="img-circle img-responsive" src="<?php echo $about_pic[0]; ?>" /></a>


                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo get_sub_field('date'); ?></h4>
                                    <h4 class="subheading"><a href="<?php the_permalink();?>"><?php echo get_sub_field('title'); ?></a></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo get_sub_field('description'); ?></p>
                                </div>
                            </div>
                            </li>


                        </ul>
                    </div>

            </div>
      <?php endwhile; endif;?>
    </div>
</section>