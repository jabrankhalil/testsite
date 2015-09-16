<?php get_header();?>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <?php
                $args=array(
                    'post_type'=>'movie',
                    'category_name'=>'bollywood'

                );
                $query=new WP_Query($args);
                ?>
                <h1><?php wp_title('');?></h1>
            </div>
            <?php if($query->have_posts()): ?>
                <?php while($query->have_posts()): $query->the_post();?>
                    <article>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p>
                            <em>
                                By <?php the_author();?>
                                on <?php echo the_time('l,F jS,Y'); ?>
                                in <?php the_category(','); ?>.
                                <a href="<?php comments_link() ?>"><?php comments_number(); ?></a>
                            </em>
                        </p>

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
                    </article>

                <?php endwhile; else:?>
                <div class="page-header">
                    <h1>currently no posts1 are availabe</h1>
                </div>
            <?php endif;?>
        </div>
        <?php get_sidebar(); ?>

    </div>
</div>
<?php get_footer(); ?>
