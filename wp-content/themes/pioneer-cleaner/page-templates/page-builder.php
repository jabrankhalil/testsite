<?php
/**
 * Template Name: Page Builder
 */

get_header(); ?>

	<div class="container top-spacing">
		<div class="row">
			<main class="col-sm-12" role="main">
				<article class="post tformat-standard hentry">
					<?php while(have_posts()) :  the_post(); ?>
						<?php
						if( have_rows('content') ):

							while ( have_rows('content') ) :
								the_row();

								get_template_part('parts/' . get_row_layout());
								echo '<div class="spacer-big"></div>';
							endwhile;

						endif;
						?>
					<?php endwhile; ?>
					<div class="clearfix"></div>
				</article>
			</main>
		</div>
	</div><!-- /container -->

<?php
get_footer();
