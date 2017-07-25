<?php get_header(); ?>
<section>
	<div class="container">
		<div class="content w100 fl">
			<?php get_sidebar( 'content-left' ); ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-fix-content">

				<div class="main-content w100 fl">
					<div class="nav-de w100 fl">
						<ul class="bercum">
							<li><a href="/">Trang chủ </a></li><li class="active"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						</ul>
					</div>
					<div class="search-form">
						<?php get_search_form(); ?>
					</div>
					<?php
					while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					endwhile;
					?>

				</div>
			</div>
			<?php get_sidebar( 'content-right' ); ?>
		</div>
	</div>
</div>
</section>
<!-- <?php //get_sidebar( 'content-bottom' ); ?> -->
<!-- <?php //get_sidebar(); ?> -->
<?php get_footer(); ?>
