<!-- Header Carousel -->
<?php
$args=array(
    'post_type'   =>'post',
    'showposts'   =>1
);
$postss=new WP_Query($args);
?>
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php if($postss->have_posts()):while($postss->have_posts()): $postss->the_post()?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $postss->current_post; ?>" class="<?php if($postss->current_post==0): ?>active<?php endif; ?>"></li>
        <?php endwhile; endif;?>
    </ol>

    <!-- Wrapper for slides -->
    <?php rewind_posts(); ?>
    <div class="carousel-inner">
        <?php if($postss->have_posts()): while($postss->have_posts()): $postss->the_post();?>
        <div class="<?php if($postss->current_post==0): ?>active<?php endif; ?> item">
            <?php
            $thumbnail_id= get_post_thumbnail_id();
            $thumbnail_url=wp_get_attachment_image_src($thumbnail_id,'thumbnail_size',true);
            $thumbnail_meta=get_post_meta($thumbnail_id,'_wp_attachment_image_alt',true);
            ?>
            <a href="<?php the_permalink(); ?>"><img class="fill"
                                                     src="<?php echo $thumbnail_url[0]; ?>"
                                                     alt="<?php echo $thumbnail_meta; ?>"></a>
            <!--<a href="<?php the_permalink(); ?>"><div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>-->
            <div class="carousel-caption">
                <h2><?php the_title();?></h2>
            </div>
            <?php endwhile; endif;?>
        </div>


    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>