<?php

if (!function_exists('js_setup')):

	function js_setup() {

		// make theme translatable
		load_theme_textdomain('js', get_template_directory() . '/languages');

		// post thumbnails
		add_theme_support('post-thumbnails');
		add_image_size('size-100', 100, 100);
		add_image_size('size-200', 200, 200);

		// add menus
		register_nav_menus( array(
			"primary"	=> __('Primary Menu', 'js'),
			"footer"	=> __('Footer Menu', 'js')
		));

		// enable theme support for different formats
		add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
	}

endif;

add_action('after_setup_theme', 'js_setup');

?>