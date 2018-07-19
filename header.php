<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset ="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(); ?> </title>

		




		<?php wp_head(); ?>
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
				</header><!--header-->		