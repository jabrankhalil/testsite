<?php
// Template Name: Wine Template
?>
<?php get_header();?>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            <?php
            $args=array(
                'post_type'=>'movie'

            );
            $query=new WP_Query($args);
            ?>
            <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
                <div class="page-header">
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <p>
                        <em>
                            By <?php the_author(); ?>
                            on <?php echo the_time('l,F jS,Y'); ?>
                            in <?php the_category(','); ?>.
                            <a href="<?php comments_link() ?>"><?php comments_number(); ?></a>
                        </em>
                    </p>
                    <hr>
                    <?php
                    $image=get_field('image1');
                    echo wp_get_attachment_image($image['id']);

                    ?>
                    <hr>
                    <?php the_field('description');?>
                    <hr>
                    <?php
                    if(have_rows('images')):
                        while(have_rows('images')):
                            the_row();
                            $images=get_sub_field('image2');
                            echo wp_get_attachment_image($images['id']);
                        endwhile;
                    endif;

                    ?>
                    <hr>
                    <p><a class="btn btn-large btn-primary" href="<?php the_field('download'); ?>">Download<span class="glyphicon glyphicon-arrow-down"></span></a></p>

                </div>

            <?php endwhile; else:?>
                <div class="page-header">
                    <h1>currently no posts are availabe</h1>
                </div>
            <?php endif;?>
        </div>


    </div>
</div>

<?php get_footer(); ?>
