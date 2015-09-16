<?php
$args=array(
    'post_type'   =>'post',
    'showposts'   =>1
);
$postss=new WP_Query($args);
?>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
    <?php if($postss->have_posts()):while($postss->have_posts()): $postss->the_post()?>
        <div class="col-sm-4">

            <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <p>
                By&nbsp;<a href="https://www.facebook.com/jabran.khalil.9"> <?php the_author(); ?></a><br>
                <span class="glyphicon glyphicon-time">&nbsp;<?php echo the_time('l,F jS,Y'); ?> </span><br>
                in&nbsp;<span class="dashicons dashicons-category"><?php the_category(','); ?>
            </p>
            <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
        </div>
    <?php endwhile; endif; ?>
</div>