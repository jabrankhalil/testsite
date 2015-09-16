<div class="container why-choose-us">
    <div class="row">
        <div class="col-md-6">
            <div class="panel widget widget_text panel-first-child" id="panel-7-3-0-0">
                <div class="textwidget"></div>
            </div>
            <div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child" id="panel-7-3-0-1">
                <?php PC_Markup::h3(get_sub_field('why_choose_us_title'), 'widget-title'); ?>
                <div class="textwidget">
                    <?php
                    if( have_rows('why_choose_us_reasons') ):
                        while( have_rows('why_choose_us_reasons') ):
                            the_row();
                            ?>
                            <h5>
                                <span><br/><span class="icon-container"><span class="fa fa-check"></span></span></span>
                                <span><?php the_sub_field('reason_title'); ?></span>
                            </h5>
                            <?php the_sub_field('reason_content'); ?>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel widget widget_text panel-first-child" id="panel-7-3-1-0">
                <div class="textwidget"></div>
            </div>
            <div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child" id="panel-7-3-1-1">
                <?php PC_Markup::h3(get_sub_field('who_we_are_title'), 'widget-title'); ?>
                <div class="textwidget">
                    <?php the_sub_field('who_we_are_content'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer-big"></div>