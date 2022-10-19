<?php

	get_header();

	// the loop to display posts
	if(have_posts()){

		while(have_posts()){

			the_post();
			get_template_part('template-parts/content');
		}
	} else {

		// no posts to display
		get_template_part('template-parts/content', 'none');
	}

	if (comments_open() || get_comments_number()) {

		comments_template();
	}

	get_sidebar();
	get_footer();
	
?>