<div class="main-title" style="background-color: #f2f2f2">
	<div class="container">

		<?php
			//Archive => List of Posts
			//Single  => One Item
		if(is_archive()) :

			the_archive_title( '<h1 class="main-title__primary">', '</h1>' );
			the_archive_description( '<h2 class="main-title__secondary">', '</h2>' );

		elseif(is_singular()) :

			PC_Markup::h1(get_the_title(), 'main-title__primary');

		elseif(is_404()) :

			PC_Markup::h1(get_field('page_404_title', 'option'), 'main-title__primary');
			PC_Markup::h2(get_field('page_404_subtitle', 'option'),'main-title__secondary');

		endif;


		?>

	</div>
</div>