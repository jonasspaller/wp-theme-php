<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

		<title>WP Theme PHP</title>

		<!-- wp_head() -->
		<?php wp_head();?>
	</head>

	<body <?php body_class();?>>
		<?php wp_body_open();?>

		<a id="skip-to-main-content-link" href="#site-content">
			<?php _e("Skip to content", "js");?>
		</a>

		<header id="site-header">
		
			<?php if (has_nav_menu('primary')): ?>
			
				<nav id="site-navigation">
					<?php
						wp_nav_menu(
							array(
								'menu_class' => 'nav-menu',
								'theme_location' => 'primary',
								'container' => 'ul',
								'depth' => 2
							)
						);
					?>
				</nav>

			<?php endif;?>

		</header>

		<main id="site-content">