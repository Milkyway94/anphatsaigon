<?php get_header(); ?>
<section>
	<div class="container">
		<div class="content w100 fl">
			<?php get_sidebar( 'content-left' ); ?> 
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-fix-content">

					<div class="main-content w100 fl">
						<div class="nav-de w100 fl">
							<ul class="bercum">
								<li><a href="/">Trang chủ </a></li>
								<?php if(get_post_type($post)=='post'){ ?>
								<li class="active"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></li>
									<?php }
									 else {
									  ?>
									<li class="active"><a href="/apartment/location/du-an/">Dự án</a></li>
									<?php } ?>
							</ul>
						</div>
						<?php get_search_form(); ?>
						<?php if ( have_posts() ) : 
						while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
						wp_pagenavi();
						else: 
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
<!-- <?php //get_sidebar(); ?> -->
<?php get_footer(); ?>
