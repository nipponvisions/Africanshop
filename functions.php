<?php


/* attach main style sheet */

function add_shoptheme_scripts()
{
	# code...

	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'add_shoptheme_scripts');


	



// function add_dukasite_javascripts(){
// 	// register script
// 	// wp_register_script('one_ofthe_scripts', get_template_directory_uri() .'/scripts/one_ofthe_scripts.js');
// 	wp_enqueue_style( 'style', get_stylesheet_uri() );

// }
// add_action('wp_enqueue_scripts', 'add_dukasite_javascripts');

