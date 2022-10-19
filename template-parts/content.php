<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		
			if(is_single()){

				the_title('<h1 class="entry-title">', '</h1>');
			} else {

				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			}
		?>
	</header>

	<div class="entry-content">

		<?php is_single() ? the_content() : the_excerpt(); ?>

	</div>

	<?php if(!is_single()): ?>
		<a class="read-more-link" href="<?php the_permalink(); ?>">
			<?php _e("Read more", "js"); ?>
		</a>
	<?php endif; ?>

</article>