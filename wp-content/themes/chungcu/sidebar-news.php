<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="col-md-3 col-sm-3 hidden-xs">
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-news' ); ?>
	</aside><!-- .sidebar .widget-area -->
	<?php if ( is_active_sidebar( 'sidebar-news' )  ) : ?>
			<div class="sidebar">
				<div class="w100 widget">
					<h2 class="widget-title">Hình ảnh dự án</h2>
					<div class="apm">
						<?php wp_reset_query();
						$args = array('post_type' => 'hinh-anh',
							'tax_query' => array(
								array(
									'taxonomy' => 'danh-muc-hinh-anh',
									'field' => 'id',
									'terms' => 9,
									),
								),
							);
						$loop = new WP_Query($args);
						if($loop->have_posts()) {
							while($loop->have_posts()) : $loop->the_post();
							?>
								<div class="apartment-img">
									<a href="<?php the_permalink(); ?>"><img alt="<?php echo the_title(); ?>" class="img-responsive" src="<?php echo get_post_meta( $post->ID, 'wpcf-slider', true ); ?>" /></a>
									<div class="property none-hover">
										<div class="title w100">
											<b>
												<?php the_title(); ?>
											</b>
										</div>
									</div>
								</div>
						<?php endwhile; } ?>
					</div>
				</div>
		</div>
<?php endif; ?>
</div>