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
                        <?php if(have_rows('sociallinks','option')):?>
                        <?php while(have_rows('sociallinks','option')):the_row();?>
                        <li>
                            <?php

                            $image=get_sub_field('image','option');
                            $img=wp_get_attachment_image_src($image['ID']);

                            ?>
                            <a href="<?php the_sub_field('link','option') ?>"><img class="btn-social btn-outline"  src="<?php echo $img[0]?>"></a>

                        </li>
                       <?php endwhile;?>
                       <?php endif;?>
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
            
            <!-- mail chimp -->
            
            <div class="row">
            <div  id="googleMap" class="col-md-6 googlemap" >
                
            </div>    
            <div class="col-md-6 ">
                <div id="mc_embed_signup">
                    <form action="//easybuy.us11.list-manage.com/subscribe/post?u=8aaafdacc68935469f6b53b66&amp;id=d005e80133" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
	                    <h2>Subscribe Now</h2>
                            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                                <div class="mc-field-group">
	                               <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                                    </label>
	                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL">
                                </div>
                            <div class="mc-field-group">
	                            <label for="mce-FNAME">First Name </label>
	                            <input type="text" value="" name="FNAME" class="name" id="mce-FNAME">
                            </div>
                            <div class="mc-field-group">
	                            <label for="mce-LNAME">Last Name </label>
	                            <input type="text" value="" name="LNAME" class="lname" id="mce-LNAME">
                            </div>
	                          <div id="mce-responses" class="clear">
		                      <div class="response" id="mce-error-response" style="display:none"></div>
		                      <div class="response" id="mce-success-response" style="display:none"></div>
	                           </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_8aaafdacc68935469f6b53b66_d005e80133" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="page-scroll btn btn-xl"></div>
                        </div>
                    </form>
                </div>
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
                <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 7 ); }?>
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