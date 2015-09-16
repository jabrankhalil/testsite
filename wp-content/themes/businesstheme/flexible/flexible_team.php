<?php


$count=0;
?>

<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('team-heading','options') ?></h2>
<h3 class="section-subheading text-muted"><?php the_field('team-subheading','options') ?></h3>
</div>
</div>

    <div class="row">
        <?php if(have_rows('team')): while(have_rows('team')): the_row();?>
            <?php $count++; if($count==4):?>
                </div>    <div class="row">
                <?php endif; ?>
            <div class="col-xs-4 service-images">
                <?php
                $image=get_sub_field('image');

                $team_pic=wp_get_attachment_image_src($image['ID'],'team-image');

                ?>
                <div class="team-member">
                    <img class="img-responsive img-circle" src="<?php echo $team_pic[0]; ?>" width="<?php echo $team_pic[1];?>" height="<?php echo $team_pic[2];?> class="img-responsive img-circle" alt="">
                    <div class="team">
                        <h4><?php echo get_sub_field('name'); ?></h4>
                        <p class="text-muted"><?php echo get_sub_field('role'); ?></p>

                        <ul class="list-inline social-buttons">
                            <li><a href="#"></a>
                            </li>
                            <li><a href="#"></a>
                            </li>
                            <li><a href="#"> </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php endwhile; endif;?>

    </div>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 text-center">
        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
    </div>
</div>
</div>
</section>