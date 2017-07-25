<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<section class="no-results not-found">
	<header class="page-head">
		<h4 class="page-title"><?php _e( 'Không có kết quả', 'twentysixteen' ); ?></h4>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentysixteen' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentysixteen' ); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>

			<p><?php _e( 'Dường như chúng tôi không thể tìm thấy được điều bạn đang tìm kiếm. Trở về <a href="/"><b>Trang chủ</b></a> hoặc thử thanh tìm kiếm bên dưới.', 'twentysixteen' ); ?></p>
			<!-- <?php //get_search_form(); ?> -->

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
