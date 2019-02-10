 <?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rtCamp
 */

if ( ! is_active_sidebar( 'sidebar-footer' ) ) {
	return;
}
?>
<div class="graybg clearfix">
<div class="container clearfix">
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-footer' ); ?>
    
 
</aside><!-- #secondary -->
</div>
    </div>