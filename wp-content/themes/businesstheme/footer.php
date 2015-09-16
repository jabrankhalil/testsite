<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <?php the_field('location','options');?>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <?php

                            $image=get_field('twitterimage','options');
                            $img=wp_get_attachment_image_src($image['ID']);

                            ?>
                            <a href="<?php the_field('twitter','options') ?>"><img class="btn-social btn-outline"  src="<?php echo $img[0]?>"></a>

                        </li>
                        <li>
                            <?php

                                $image=get_field('facebookimage','options');
                                $img=wp_get_attachment_image_src($image['ID']);
                            ?>
                            <a href="<?php the_field('facebook','options') ?>"><img class="btn-social btn-outline"  src="<?php echo $img[0]?>"></a>
                        </li>
                        <li>
                            <?php

                                $image=get_field('linkedinimage','options');
                                $img=wp_get_attachment_image_src($image['ID']);
                            ?>
                            <a href="<?php the_field('linkedin','options') ?>"><img class="btn-social btn-outline"  src="<?php echo $img[0]?>"></a>

                        </li>
                        <li>
                            <?php
                                $image=get_field('googleplusimage','options');
                                $img=wp_get_attachment_image_src($image['ID']);
                            ?>
                            <a href="<?php the_field('googleplus','options') ?>"><img class="btn-social btn-outline"  src="<?php echo $img[0]?>"></a>
                        </li>

                        <!-- <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li> -->
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <button type="button" class="page-scroll btn btn-xl" data-toggle="modal" data-target="#agencyform">
                        CONTACT US
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php the_field('copyright','options');echo date('Y');?>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="agencyform">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">CONTACT US</h4>
            </div>
            <div class="modal-body">
                <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); }?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php wp_footer(); ?>

</body>

</html>