<?php
/*
	Template Name : header.php
	Author: Moses Mathenge
	Description: powers the header to the AFRICANSHOPTHEME 
*/
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta charset ="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(); ?> </title>

	</head>
	
	<body>
		<div class="site_container">
		
			<header class="african_shop">

				<h1><a href="<?php echo get_option('home'); ?>"> 
					<?php bloginfo('name'); ?></a>  </h1>
					
				<div class="description">
					<?php bloginfo('description') ?> 
				</div><!-- description -->
						
					<?php  wp_nav_menu(); ?>
					<?php wp_head(); ?>
			</header><!-- african_shop -->