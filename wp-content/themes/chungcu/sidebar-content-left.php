<?php
if ( ! is_active_sidebar( 'sidebar-right' )) {
	return;
}
?>
<div id="content-bottom-widgets" class="col-lg-3 col-md-3 hidden-sm hidden-xs sidebar col-fix-sidebar" role="complementary">
</aside>
<div class="project-hot fw">
	<h2 class="ew_heading">
		<span class="heading-icon">
			<i class="fa fa-caret-right icon-design"></i>
		</span>
		Dự án hot
	</h2>
	<div class="item-project">
		<?php 
		wp_reset_query();
		$args = array('post_type' => 'project',
			'tax_query' => array(
				array(
					'taxonomy' => 'location',
					'field' => 'id',
					'terms' => 22,
					),
				),
			'showposts' => 6,
			);
		$loop = new WP_Query($args);
		if($loop->have_posts()) {
			while($loop->have_posts()) : $loop->the_post();
			?>
			<?php 
			global $post; 
			$thumbnail_URL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
			?>
			<div class="apartment fw">
				<div class = "thumbnail">
					<a href="<?php the_permalink();?>" class="fw property-featured-image">
					<div class="overlay2"></div>
					<img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=220&h=180&q=100'; ?>">
					</a>
					<div class="price">
						<strong>
							Giá
						</strong>
						<span>
							<?php echo get_post_meta( $post->ID, 'wpcf-prices', true ); ?> triệu/m<sup>2</sup>
						</span>
					</div>
				</div>
				<div class = "caption cp-sidebar fw">
					<div class="fw property-info">
						<h4>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h4>
 					<span class="location">
							<i class="fa fa-map-marker"></i> <?php echo get_post_meta( $post->ID, 'wpcf-locate', true ); ?>
						</span>
					</div>
				</div>
			</div>
			<?php
			endwhile;
		}
		wp_reset_query();
		?>
	</div>
</div>
<?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
	<div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-left' ); ?>
	</div>
<?php endif; ?>
</div>