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
    add_theme_support( 'woocommerce', array(

    	'thumbnail_image_width' => 100,
    	'gallery_thumbnail_image' => 100,
    	'single_image_width' => 500,

    	 // Product grid theme settings	goes here

    	'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        )    


    	) );
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



//uhook * see  new hook 'africanshop_before_shop_loop'
 remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
 remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
 remove_action('woocommerce_before_shop_loop', 'wc_print_notices', 10);
 remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);




 remove_action('woocommerce_before_main_content', 'WC_Structured_Data::generate_website_data()', 30);
 remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

//new to the hook
 add_action('africanshop_before_main_content', 'africanshop_output_content_wrapper');  
	function africanshop_output_content_wrapper(){
	 	?>
	 	<div class="below_header"> 

	 	<?php
	 }

 //add_action('africanshop_before_main_content', 'WC_Structured_Data::generate_website_data()', 30);
 add_action('africanshop_before_main_content', 'woocommerce_breadcrumb', 20);



// create hook africanshop_before_shop_loop  to replace woocommerce_before_shop_loop
function africanshop_before_shop_loop_contents(){
	add_action('african_shop_pagination', 'woocommerce_pagination', -10); 
	add_action('african_shop_catalog_odering', 'woocommerce_catalog_ordering', -30);
	add_action('africanshop_result_count', 'woocommerce_result_count', -20);
	add_action('africanshop_print_notices', 'wc_print_notices', -10);

	?>
	<ul class="before_shop_loop">
		<!-- <li class="before_shop_loop"> <?php  get_template_part('/woocommerce/product-searchform'); ?> </li> -->


		<li class="before_shop_loop"> <?php get_template_part('woocommerce/product-searchform'); ?> </li> 
		<li class="before_shop_loop"> <?php do_action('african_shop_pagination'); ?> </li>
		<li class="before_shop_loop"> <?php do_action('african_shop_catalog_odering'); ?>  </li>
		<li class="before_shop_loop"> <?php do_action('africanshop_result_count'); ?> </li>

		<!-- <li> <?php  do_action('africanshop_print_notices') ?> </li> -->

	</ul><!--before_shop_loop -->


<?php
}

add_action('africanshop_before_shop_loop','africanshop_before_shop_loop_contents');







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














