	<?php

		get_header();

		// the loop to display posts
		if(have_posts()){

			while(have_posts()){

				the_post();
				get_template_part('template-parts/content');
			}

			// show pagination
			the_posts_pagination();
		} else {

			// no posts to display
			get_template_part('template-parts/content', 'none');
		}
	?>

</main>

<?php
	get_sidebar();
	get_footer();
?>