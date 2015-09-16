<?php
/**
 * Template Name: Full Width Page
 */

get_header(); ?>

	<div class="container top-spacing">
		<div class="row">
			<main class="col-xs-12  col-md-12" role="main">
				<article class="post tformat-standard hentry">
					<?php while(have_posts()) :  the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<div class="clearfix"></div>
				</article>
			</main>
		</div>
	</div><!-- /container -->

<?php
get_footer();
