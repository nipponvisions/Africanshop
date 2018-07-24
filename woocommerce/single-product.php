<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header( 'shop' ); ?>

<div class="notice">  single-product.php  </div>

	

	<?php
	/**
		*africanshop_before_main_content hook
		*@hooked africanshop_output_content_wrapper
	**/
	do_action('africanshop_before_main_content');
	?>

<!-- 	<div class="below_header"> -->
		<div class="flex_container">
	        <div class="flex_sidebar">
	            <?php  get_sidebar('shop'); ?>  
	        </div><!-- flex_sidebar -->
	        <div class="flex_main">
	        	<p>Flex Main </p>



		<?php 
		while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. 
		?>

	        </div><!-- flex_main -->
	    </div><!-- flex_container -->

	</div><!-- below_header --> 

<?php get_footer( 'shop' );
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */