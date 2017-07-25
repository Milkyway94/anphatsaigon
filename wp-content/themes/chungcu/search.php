<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section>
	<div class="container">
		<div class="content w100 fl">
			<?php get_sidebar( 'content-left' ); ?> 
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-fix-content">

				<div class="main-content search-content w100 fl">
					<div class="nav-de w100 fl">
						<ul class="bercum">
							<li><a href="/">Trang chủ </a></li><li class="active"><a href="<?php the_permalink(); ?>"><?php the_archive_title();?><?php the_category(', '); ?></a></li>
						</ul>
					</div>
					<div class="search-form">
						<?php get_search_form(); ?>
					</div>
					<?php if ( have_posts() ) : ?>

						<header class="page-head">
						<h4 class="page-title"><?php printf( __( 'Kết quả tìm kiếm cho: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h4>
						</header><!-- .page-header -->

						<?php
						while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );
				endwhile;
					wp_pagenavi();
		// If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</div>
		<?php get_sidebar( 'category' ); ?>
		<?php get_sidebar( 'content-right' ); ?> 
	</div>
</div>
</div>
</section>
<?php get_footer(); ?>
