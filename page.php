<?php
/** 
	*Template Name: page.php
 	*Author : Mathenge Moses
 	*Description :  the most generic page after index
 **/

 get_header();
 ?>

 <div class="notice">  <p> powered by page.php  </p> </div>

 <?php 

 if ( have_posts() ) {
 	while ( have_posts() ) {
 		the_post();
 		
 		 //Post Content here
 		the_title();
 		the_content();
 			get_sidebar();
 	
 		
 	} // end while
 }  // end if
 ?>

 <?php get_footer(); ?> -->