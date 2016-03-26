<?php
#pulls in CSS file into action
function WordPress_Resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'WordPress_resources');

//nav menus
		register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __('Footer Menu'),
		));