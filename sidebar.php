<?php
/**
	*Template name: sidebar.php
	*Author: Mathenge Moses
	*Description: the footer to the africanshop theme
**/
?>
<div class="sidebar">
	


<h2> The  sidebar template </h2>



	<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'home_right_1' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?> 

<?php dynamic_sidebar(); ?>


</div>