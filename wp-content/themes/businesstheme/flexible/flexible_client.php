<?php
$client_count=0;

?>

<aside class="clients">
    <div class="container">

            <div class="row">

                <?php if(have_rows('client')): while(have_rows('client')): the_row();?>
                <?php $client_count++; if($client_count==5):?>
            </div> <div class="row">
                <?php endif; ?>
                    <div class="col-md-3 col-sm-6">

                        <?php
                        $image=get_sub_field('image');

                        $client_pic=wp_get_attachment_image_src($image['ID'],'portfolio-image');
                        ?>
                            <a href="#">
                                <img src="<?php echo $client_pic[0];?>" class="img-responsive img-centered" alt="">
                            </a>

                    </div>
                <?php endwhile; endif;?>
            </div>

    </div>
</aside>