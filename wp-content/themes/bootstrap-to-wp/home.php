<?php get_header(); ?>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h1><?php wp_title(''); ?></h1>
            </div>
            <?php
            $args = array(
                'post_type' => 'post',
                'category_name' => 'featured'

            );
            ?>
            <?php $query= new WP_Query($args); ?>

           


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $query->current_post; ?>"

                    class="<?php if($query->current_post==0): ?>active<?php endif; ?>">

                    </li>
                    <?php endwhile; endif;?>

                </ol>

                <?php rewind_posts(); ?>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
                    <div class="<?php if($query->current_post==0): ?>active<?php endif; ?> item">
                        <?php
                        //$thumbnail_id= get_post_thumbnail_id();
                        //$thumbnail_url=wp_get_attachment_image_src($thumbnail_id,'thumbnail_size',true);
                        //$thumbnail_meta=get_post_meta($thumbnail_id,'_wp_attachment_image_alt',true);
                        ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php //echo $thumbnail_url[0];?>" alt="<?php //echo $thumbnail_meta;?>"></a>
                        <div class="carousel-caption"><a href="<?php the_permalink();?>"> <?php the_title();?></a></div>
                    </div>

                    <?php endwhile; endif;?>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>


            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <article>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <p>
                            <em>
                                By <?php the_author(); ?>
                                on <?php echo the_time('l,F jS,Y'); ?>
                                in <?php the_category(','); ?>.
                                <a href="<?php comments_link() ?>"><?php comments_number(); ?></a>
                            </em>
                        </p>

                        <?php the_excerpt(); ?>
                    </article>

                <?php endwhile;
            else: ?>
                <div class="page-header">
                    <h1>currently no posts are availabe</h1>
                </div>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>

    </div>
</div>
<?php get_footer(); ?>
