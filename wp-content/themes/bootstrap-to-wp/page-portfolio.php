<?php
// Template Name: Portfolio Template
?>
<?php get_header();?>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>
                    <div class="page-header">
                        <h1><?php the_title();?></h1>
                    </div>
                    <?php the_content();?>
                <?php endwhile; else:?>
                <div class="page-header">
                    <h1>currently no posts are availabe</h1>
                </div>
            <?php endif;?>
        </div>


    </div>
</div>
<div class="row">
    <?php
    $args=array(
        'post_type'=>'portfolio'

    );
    $query=new WP_Query($args);
    ?>
    <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
        <div class="col-sm-3 movies">
            <h3><?php the_title();?></h3>
            <?php the_field('description');?>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
