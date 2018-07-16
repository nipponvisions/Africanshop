<?php


/* attach main style sheet */

function add_shoptheme_scripts()
{
	# code...

	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'add_shoptheme_scripts');


	
// Declaring WooCommerce support
function africanshop_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'africanshop_add_woocommerce_support' );



// register menus
function africanshop_register_menus(){
	register_nav_menus(array(
		'header-menu' => _('Header Menu'),
		'footer-menu' => _('Footer Menu'),

		)
	);
}
add_action('init', 'africanshop_register_menus');


//REFGISTER SIDEBARS 
function africanshop_register_sidebars() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'africanshop_register_sidebars' );



// // unhook the WooCommerce wrappers:
 remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
 remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//change pagination timezone_location_get
 remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
 add_action('woocommerce_before_shop_loop', 'woocommerce_pagination', 10);


 //add_action('woocommerce_before_main_content', 'africanshop_wrapper_start', 10);
 //add_action('woocommerce_after_main_content', 'africanshop_wrapper_end', 10);

		/*
			 function africanshop_wrapper_start() {
				?>
			   <div class="contents_container"> 

			<?php
			}
			function africanshop_wrapper_end() {
			    ?>
			    </div> <!--contents_container-->

			<?php    
			}
		*/


// remove_action('woocommerce_before_shop_loop', 'wc_print_notices', 10);
// remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
// remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);


// add_action('woocommerce_before_shop_loop', 'africanshop_content_layout_start');



// add gallery support 
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );














