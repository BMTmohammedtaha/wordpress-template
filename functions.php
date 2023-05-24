<?php 
	register_nav_menus( array(
		'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
		'footer_menu' => 'My Custom Footer Menu',
		));

	add_theme_support('post-thumbnails');
	//set_post_thumblail_size( 150, 50, true );
	//set_post_thumblail_size( 350, 50, true );

	//Register side bar 
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name' => 'Side Bar',
			'before_widget' => '<div class= "widgetcostum">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3><br>',
			));
	}
 ?> 