<?php
/**
 * Template Name: Left Column Page
 */

get_header(); ?>

	<div class="container top-spacing">
		<div class="row">
			<div class="col-xs-12  col-md-3">
				<div class="sidebar">

					<div class="widget widget_nav_menu  push-down-30">
						<div class="menu-services-menu-container">
							<ul id="menu-services-menu" class="menu">
								<?php wp_list_pages(array(
									'post_type' 	=> get_post_type(),
									'title_li'	 	=> false,
									'depth' 		=> 1
								)); ?>
							</ul>
						</div>
					</div>

				</div>
			</div>
			<main class="col-xs-12  col-md-9" role="main">
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
