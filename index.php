<?php
/** 
	*Template Name: Index.php
	*Author : Mathenge Moses
	*Description : 
**/

get_header();
?>

<div id="notice">  <p> powered by index.php  </p> </div>

<?php 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		the_title();
		the_content();
		get_sidebar();
		//
	} // end while
} // end if
?>

<?php get_footer(); ?>