<?php

$args=array(
    'post_type'=>'client',
    'post_per_pages'=>-1,
);

$client=get_posts($args);
$chunks=array_chunk($client,4);

?>
<!-- Clients Aside -->
<artical id="clients">
<aside class="clients">
    <div class="container">
        <?php foreach($chunks as $post_chunk):?>
        <div class="row">
            <?php foreach( $post_chunk as $client_data):?>
            <div class="col-md-3 col-sm-6">
                <?php if ( has_post_thumbnail( $client_data->ID ) ):?>
                <?php

                        $client_img=get_post_thumbnail_id( $client_data->ID);
                        $image_ID=wp_get_attachment_image_src($client_img,'medium');
                ?>
                <a href="#">
                    <img src="<?php echo $image_ID[0];?>" class="img-responsive img-centered" alt="">
                </a>
                <?php endif;?>
            </div>
          <?php endforeach;?>
        </div>
        <?php endforeach;?>
    </div>
</aside>
<artical id="clients">
   