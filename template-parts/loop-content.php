<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_post_thumbnail(); ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>

	<div class="entry-content">

		<?php the_excerpt(); ?>

	</div>

	<a class="read-more-link" href="<?php the_permalink(); ?>">
		<?php _e("Read more", "js"); ?>
	</a>

</article>