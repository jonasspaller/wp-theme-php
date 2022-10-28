<?php

if (!function_exists('js_setup')) {

    function js_setup()
    {

        // make theme translatable
        load_theme_textdomain('js', get_template_directory() . '/languages');

        // post thumbnails
        add_theme_support('post-thumbnails');
        add_image_size('size-100', 100, 100);
        add_image_size('size-200', 200, 200);

        // add menus
        register_nav_menus(array(
            "primary" => __('Primary Menu', 'js'),
            "footer" => __('Footer Menu', 'js'),
        ));

        // enable theme support for different formats
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    }
}
add_action('after_setup_theme', 'js_setup');

if (!function_exists('js_sidebar_setup')) {

	function js_sidebar_setup() {

		register_sidebar(
			array(
				'id' => 'primary',
				'name' => __('Primary Sidebar'),
				'description' => __('The one and only sidebar of the theme.', 'js'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
			)
		);
	}
}
add_action('widgets_init', 'js_sidebar_setup');

?>