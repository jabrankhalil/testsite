<div class="panel-grid">
    <div class="panel-grid-cell">
        <div class="panel container">
            <?php PC_Markup::h3(get_sub_field('title'), 'widget-title'); ?>

            <div class="textwidget">
                <div class="logo-panel">
                    <div class="row">
                        <?php
                            if( have_rows('images') ):
                                while( have_rows('images') ):
                                    the_row();

                                    if(!get_sub_field('image'))
                                        continue;
                        ?>
                                <div class="col-xs-12 col-sm-2">
                                    <img src="<?php the_sub_field('image'); ?>" alt="Client Logo" width="208" height="98">
                                </div>
                        <?php
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>