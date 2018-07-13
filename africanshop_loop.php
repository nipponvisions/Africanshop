<?php
/**
	*Template name:  africanshop_loop
	*author: Mathenge Moses
	*Description: the loop to the theme africanshop
	*theme: africanshop
**/





		# code...
		while (have_posts()) {
			# code...
					the_post();
			//---------------------------------------------------------------
			?>

				<h2>  <?php the_title(); ?> </h2>
				
			<?php

					the_content();

			//---------------------------------------------------------------
		} //endwhile
		
	?>

