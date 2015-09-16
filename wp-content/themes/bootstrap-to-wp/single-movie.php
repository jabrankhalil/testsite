
<?php get_header();?>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>
                    <div class="page-header">
                     <a href="<?php bloginfo('url') ?>"><span class="glyphicon glyphicon-th-large"></span></a>
                        <h1><?php the_title();?></h1>
                    </div>
                    <?php
                    $image=get_field('image1');
                    echo wp_get_attachment_image($image['id']);
                    ?>
                    <hr>
                    <?php the_field('description');?>

                <?php endwhile; else:?>
                <div class="page-header">
                    <h1>currently no posts are availabe</h1>
                </div>
            <?php endif;?>
        </div>
        <?php get_sidebar(); ?>

    </div>
</div>
<?php echo the_meta(); ?>
<?php echo wp_get_attachment_image(143);
;
global $post;
$thePostID = $post->ID;
echo $thePostID;
echo $post->post_title;
echo "khan";

$custom_field_value = get_post_custom_values('image1');
print_r($custom_field_value);
echo wp_get_attachment_image(implode($custom_field_value));


global $wpdb;
$get=$wpdb->get_results("SELECT * FROM $wpdb->posts WHERE ID=%h");
var_dump($get);

$url=wp_upload_dir();
var_dump($url);
?>
<?php get_footer(); ?>


