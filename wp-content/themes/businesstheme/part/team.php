<?php

$args=array(
    'post_type'=>'team',
    'post_per_pages'=>-1,
);

$team=get_posts($args);
$teams = array_chunk($team, 3);

?>

<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('team-heading','options') ?></h2>
                <h3 class="section-subheading text-muted"><?php the_field('team-subheading','options') ?></h3>
            </div>
        </div>
        <?php foreach($teams as $team_member):?>
            <div class="row">
                <?php foreach($team_member as $member_info) : ?>
                    <div class="col-xs-4 service-images">
                        <?php
                        $image = get_field('image', $member_info->ID);

                        $team_pic = wp_get_attachment_image_src($image['ID'],'team-image');


                        ?>
                        <div class="team-member">
                            <img class="img-responsive img-circle" src="<?php echo $team_pic[0]; ?>" width="<?php echo $team_pic[1];?>" height="<?php echo $team_pic[2];?> class="img-responsive img-circle" alt="">
                            <div class="team">
                            <h4><?php echo get_the_title($member_info); ?></h4>
                            <p class="text-muted"><?php the_field('role', $member_info->ID); ?></p>

                                <ul  class="list-inline" >

                                    <?php if(have_rows('sociallinks',$member_info->ID)): ?>

                                        <?php while(have_rows('sociallinks',$member_info->ID)):the_row();?>

                                            <?php   $link=get_sub_field('link',$member_info->ID);
                                                    $imageattribures=get_sub_field('image',$member_info->ID);
                                                    $image1=wp_get_attachment_image_src($imageattribures['ID']);
                                              ?>

                                            <li ><a href="<?php echo $link;?>"><img class="btn-social btn-outline" src="<?php echo $image1[0]; ?>" alt=""></a>
                                            </li>

                                    <?php endwhile;endif; ?>

                                </ul>
                             </div>

                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endforeach;?>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>