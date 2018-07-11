<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset ="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(); ?> </title>

		




		<?php wp_head(); ?>
	</head>

<div class="body">
	<div class="header"> 
		<div class="headerimg"></div>

			<h1>  <a href="<?php echo get_option('home'); ?>"> 
			<?php bloginfo('name'); ?></a>  </h1>

			<div class="description"> 
				<?php bloginfo('description') ?> 


			</div><!-- description --> 
		</div><!-- headerimg -->

<?php wp_nav_menu(); ?>

</div><!-- header -->
