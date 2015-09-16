
<?php get_header();?>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">
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
        <?php get_sidebar(); ?>

        </div>
    </div>
    <?php get_footer(); ?>
