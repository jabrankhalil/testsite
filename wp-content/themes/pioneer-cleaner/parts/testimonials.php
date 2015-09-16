<?php
    $testimonials = get_sub_field('testimonials');

    if(empty($testimonials))
        return;

    $testimonials = array_chunk($testimonials, 2);
?>
<div class="siteorigin-panels-stretch panel-row-style testimonials-bg">
    <div class="container">
        <div class="panel-grid">
            <div class="panel-grid-cell" id="pgc-7-4-0">
                <div class="panel widget widget_pt_testimonials panel-first-child panel-last-child">
                    <div class="testimonial">
                        <h2 class="widget-title">
                            <a class="testimonial__carousel testimonial__carousel--left" href="#carousel-testimonials-widget-4-0-0" data-slide="next">
                                <i class="fa  fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only" role="button">Next</span>
                            </a>
                            <a class="testimonial__carousel  testimonial__carousel--right" href="#carousel-testimonials-widget-4-0-0" data-slide="prev">
                                <i class="fa  fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only" role="button">Previous</span>
                            </a>
                            <?php the_sub_field('testimonial_title'); ?>
                        </h2>

                        <?php if( have_rows('testimonials') ): ?>
                        <div id="carousel-testimonials-widget-4-0-0" class="carousel slide">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">


                                <?php foreach($testimonials as $i => $testimonial_row) : ?>
                                <div class="item <?php if($i === 0): ?> active <?php endif; ?>">
                                    <div class="row">
                                        <?php foreach($testimonial_row as $testimonial) : ?>
                                        <div class="col-xs-12  col-sm-6">
                                            <blockquote class="testimonial__quote">
                                                <?php echo $testimonial['testimonial_quote']; ?>
                                            </blockquote>
                                            <cite class="testimonial__author">
                                                <?php echo $testimonial['testimonial_by']; ?>
                                            </cite>
                                            <div class="testimonial__rating">
                                                <?php the_pc_rating_icons($testimonial['testimonial_rating']); ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>