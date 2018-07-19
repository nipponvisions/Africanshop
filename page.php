<?php
/** 
	*Template Name: page.php
 	*Author : Mathenge Moses
 	*Description :  the most generic page after index
 **/

  ?>

<?php   get_header('shop'); ?>
<div  class="notice"> This is page.php </div>


           <?php

        /**
         * Hook: woocommerce_before_main_content.
         *
         * @hooked africanshop_output_content_wrapper (outputs opening div for the content)
         * @hooked woocommerce_breadcrumb - 20
         * @hooked WC_Structured_Data::generate_website_data() - 30
         * 
         */
        do_action( 'africanshop_before_main_content' );

        ?>

     
                <?php
                /**
                 * Hook: woocommerce_archive_description.
                 *
                 * @hooked woocommerce_taxonomy_archive_description - 10
                 * @hooked woocommerce_product_archive_description - 10
                 */
                 do_action( 'woocommerce_archive_description' );
                ?>
          
</header>



          <div class="flex_container">

    <div class="flex_sidebar">


 <?php  get_sidebar('shop'); ?>  

 </div><!--sidebar-->


    <div class="flex_main"> 

<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
        //
        the_title();
        the_content();
        //
    } // end while
} // end if
?>

</div><!--flex_main-->

</div><!-- flex_container --> 














<?php get_footer(); ?>
<!--dont close 
