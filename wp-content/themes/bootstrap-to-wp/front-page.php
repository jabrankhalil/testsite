<?php get_header();?>

<?php get_template_part('part/slide'); ?>

<!-- Page Content -->
<div class="container">

    <hr>

    <div class="row">
        <div class="col-sm-8">
           <a href="<?php bloginfo('url'); ?>"> <h2>Welcome to Innovative Solution</h2></a>
            <p><strong>"Things Never Happen Before"</strong></p><br>
            <p>In this site you can see about the latest innovations in Computer field from the whole world and from my side.</p>
            <p>You can also search latest books in Computer Engineering field and web related famouse language tutorials.</p>
            <p>
                <!-- <a class="btn btn-default btn-lg" href="<?php bloginfo('url'); ?>">Call to Action &raquo;</a> -->
            </p>
        </div>
        <div class="col-sm-4">
            <h2>Contact Me</h2>
            <address>
                <span class="glyphicon glyphicon-education">&nbsp;<strong><?php the_field('education','options'); ?></strong> </span><br>
                <span class="glyphicon glyphicon-briefcase">&nbsp;<strong><?php the_field('skill','options');?></strong></span>
                <br><span class="glyphicon glyphicon-home"><a href="<?php the_field('country','url');?>">&nbsp;Pakistan</a></span>
                <br>
            </address>
            <address>
                <abbr title="Phone">P:</abbr><?php the_field('phoneno','options');?>
                <br>
                <abbr title="Email">E:</abbr> <a href="mailto:#">jabran93@gmail.com</a>
            </address>
        </div>
    </div>
    <!-- /.row -->



<?php get_template_part('part/content');?>
<?php get_footer(); ?>

