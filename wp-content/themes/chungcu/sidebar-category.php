<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div id="content-bottom-widgets" class="col-lg-3 col-md-3 hidden-sm hidden-xs sidebar col-fix-sidebar" role="complementary">
<?php if ( is_active_sidebar( 'sidebar-category' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-category' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
</div>
