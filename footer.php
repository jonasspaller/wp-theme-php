		<footer id="site-footer">

			<nav id="footer-navigation">
				<?php
					wp_nav_menu(
						array(
							'menu_class' => 'nav-menu',
							'theme_location' => 'footer',
							'container' => 'ul',
							'depth' => 1
						)
					);
				?>
			</nav>

		</footer>

		<!-- wp_footeer() -->
		<?php wp_footer(); ?>

	</body>
	
</html>