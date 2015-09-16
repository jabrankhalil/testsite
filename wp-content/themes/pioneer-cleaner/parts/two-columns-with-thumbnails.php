<?php
    $css_classes = get_sub_field('related_content') ? 'col-md-4' : 'col-md-6';
?>
<div class="container" role="main">
    <div class="row">
        <div class="<?php echo $css_classes; ?>">
            <div class="panel widget widget_pt_featured_page panel-first-child panel-last-child" id="panel-7-1-0-0">
                <div class="has-post-thumbnail page-box page-box--block">

                    <?php if(has_sub_field('left_column_link')) : ?>

                        <a class="page-box__picture" href="<?php the_sub_field('left_column_link'); ?>">
                            <img width="360" height="240" src="<?php the_sub_field('left_column_image'); ?>" alt="<?php the_sub_field('left_column_title'); ?>"/>
                        </a>
                        <div class="page-box__content">
                            <h5 class="page-box__title  text-uppercase">
                                <a href="<?php the_sub_field('left_column_link'); ?>"><?php the_sub_field('left_column_title'); ?></a>
                            </h5>

                            <?php the_sub_field('left_column_content'); ?>

                            <p>
                                <a href="<?php the_sub_field('left_column_link'); ?>" class="read-more read-more--page-box">Read more</a>
                            </p>
                        </div>

                    <?php else : ?>

                        <a class="page-box__picture">
                            <img width="360" height="240" src="<?php the_sub_field('left_column_image'); ?>" alt="<?php the_sub_field('left_column_title'); ?>"/>
                        </a>
                        <div class="page-box__content">
                            <h5 class="page-box__title  text-uppercase"><?php the_sub_field('left_column_title'); ?></h5>
                            <?php the_sub_field('left_column_content'); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="<?php echo $css_classes; ?>">
            <div class="panel widget widget_pt_featured_page panel-first-child panel-last-child" id="panel-7-1-1-0">
                <div class="has-post-thumbnail page-box page-box--block">

                    <?php if(has_sub_field('right_column_link')) : ?>

                        <a class="page-box__picture" href="<?php the_sub_field('right_column_link'); ?>">
                            <img width="360" height="240" src="<?php the_sub_field('right_column_image'); ?>" alt="<?php the_sub_field('right_column_title'); ?>"/>
                        </a>
                        <div class="page-box__content">
                            <h5 class="page-box__title  text-uppercase">
                                <a href="<?php the_sub_field('left_column_link'); ?>"><?php the_sub_field('right_column_title'); ?></a>
                            </h5>

                            <?php the_sub_field('right_column_content'); ?>

                            <p>
                                <a href="<?php the_sub_field('right_column_link'); ?>" class="read-more read-more--page-box">Read more</a>
                            </p>
                        </div>

                    <?php else : ?>

                        <a class="page-box__picture">
                            <img width="360" height="240" src="<?php the_sub_field('right_column_image'); ?>" alt="<?php the_sub_field('right_column_title'); ?>"/>
                        </a>
                        <div class="page-box__content">
                            <h5 class="page-box__title  text-uppercase"><?php the_sub_field('right_column_title'); ?></h5>
                            <?php the_sub_field('right_column_content'); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <?php if( have_rows('related_content') ): ?>
            <div class="<?php echo $css_classes; ?>">

            <?php while( have_rows('related_content') ): the_row(); ?>
                <div class="panel widget widget_pt_featured_page panel-first-child related-content" id="panel-7-1-2-0">
                        <div class="has-post-thumbnail page-box page-box--inline">
                            <a class="page-box__picture" href="<?php the_sub_field('featured_information_link') ; ?>">
                                <img src="<?php the_sub_field('featured_information_image') ; ?>" alt="<?php the_sub_field('featured_information_title') ; ?>"/>
                            </a>
                            <div class="page-box__content">
                                <h5 class="page-box__title text-uppercase">
                                    <a href="<?php the_sub_field('featured_information_link') ; ?>">
                                        <?php the_sub_field('featured_information_title') ; ?>
                                    </a>
                                </h5>
                                <?php the_sub_field('featured_information_content') ; ?> &hellip;
                            </div>
                        </div>
                        <div class="spacer"></div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="spacer"></div>