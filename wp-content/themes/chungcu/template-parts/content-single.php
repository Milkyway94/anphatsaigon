<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section>
		<div class="container">
			<div class="content w100 fl">
				<?php get_sidebar( 'content-left' ); ?> 
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-fix-content">
					<div class="main-content w100 fl">
						<div class="nav-de w100 fl">
							<ul class="bercum">
								<li><a href="/">Trang chủ </a></li>
								<li><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></li>
								<li class="active"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							</ul>
						</div>
						<?php get_search_form(); ?>
						<header class="entry-header">
							<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
							<!-- <span class="fb-comments-count" xid="<?php the_ID(); ?>"></span> -->
						</header>
						<div class="fb-like fw">
							<div class="addthis_inline_share_toolbox_6n3s"></div>
						</div>
						<?php twentysixteen_excerpt(); ?>

						<div class="tx"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></a></div>	
						<div class="entry-content">
							<?php
							the_content();
							?>
							<div class="project fw">
								<?php 
								wp_reset_query();
								$args = array('post_type' => 'project',
									'tax_query' => array(
										array(
											'taxonomy' => 'location',
											'field' => 'id',
											'terms' => 36,
											),
										),
									'showposts' => 5
									);
								$loop = new WP_Query($args);
								if($loop->have_posts()) {
									$images = get_post_meta(get_the_ID(), 'wpcf-images');
									if($images): ?>
									<div class="subcat">
										<h2>
											<span class="heading-icon">
												<i class="fa fa-caret-right icon-design"></i>
											</span>
											Hình ảnh dự án
										</h2>
									</div>
									<div class="slider-for fw">
										<?php
										foreach ($images as $image) { ?>
										<div class="item-project">
											<a class="fw property-featured-image"><img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$image.'&w=700&h=350&q=100'; ?>" alt="<?php the_title();?>"/></a>
										</div>
										<?php } ?>
									</div>
									<div class="slider-nav fw">
										<?php
										foreach ($images as $image) { ?>
										<div class="item-images">
											<a class="fw property-featured-image"><img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$image.'&w=134&h=106q=100'; ?>" alt="<?php the_title();?>"/></a>
										</div>
										<?php } ?>
									</div>
									<?php
									endif;
								}
								?>
							</div>
						</div>
					</div>
					<div class="rel fw">
						<div class="fb-comments" xid="<?php the_ID(); ?> data-numposts="20" data-width="100%" data-colorscheme="light" data-version="v2.8"></div>
						<div class="newsrel fw">
							<div class="subcat">
								<h2>
									<span class="heading-icon">
										<i class="fa fa-caret-right icon-design"></i>
									</span>
									Bài viết liên quan
								</h2>
								<a href="/location/du-an/" class="btn btn-primary btn-sm pull-right">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
							</div>
							<ul class="newstick fw">
								<?php
								$args = array( 'numberposts' => '5' );
								$recent_posts = wp_get_recent_posts( $args );
								foreach( $recent_posts as $recent ){
									echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
								}
								wp_reset_query();
								?>
							</ul>
						</div>
						<?php if(get_post_type($post)=='project'){ ?>
						<div class="subcat">
							<h2>
								<span class="heading-icon">
									<i class="fa fa-caret-right icon-design"></i>
								</span>
								Dự án liên quan
							</h2>
						</div>
						<div class="list-apartment fw">
							<?php 
							wp_reset_query();
							$args = array('post_type' => 'project',
								'tax_query' => array(
									array(
										'taxonomy' => 'location',
										'field' => 'id',
										'terms' => 22
										),
									),
								'showposts'=>12
								);
							$loop = new WP_Query($args);
							if($loop->have_posts()) {
								while($loop->have_posts()) : $loop->the_post();
								global $post; 
								$thumbnail_URL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
								?>
								<div class="col-md-4">
									<div class="apartment fw">
										<div class = "thumbnail">
											<div class="overlay2"></div>
											<a href="<?php the_permalink();?>" class="fw property-featured-image"><img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=208&h=180&q=100'; ?>" alt="<?php the_title(); ?>"></a>
											<div class="price">
												<strong>
													Giá
												</strong>
												<span>
													<?php echo get_post_meta( $post->ID, 'wpcf-prices', true ); ?> triệu/m<sup>2</sup>
												</span>
											</div>
										</div>
										<div class = "caption">
											<div class="fw property-info">
												<h4>
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
												</h4>
												<span class="location">
													<i class="fa fa-map-marker"></i> <?php echo get_post_meta( $post->ID, 'wpcf-locate', true ); ?>
												</span>
												<div class="fw property-amenities">
													<span class="area">DT: <?php echo get_post_meta( $post->ID, 'wpcf-area', true ); ?> m2</span>
													<span class="floors">Số tầng: <?php echo get_post_meta( $post->ID, 'wpcf-floors', true ); ?></span>                                   
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
								endwhile;
							}
							?>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php get_sidebar( 'content-right' ); ?> 
			</div>
		</div>
	</div>
</section>
</article>
<div id="fixed-toc" class="ftoc-collapse ftoc-animated ftoc-animated-fadeIn" style="display: block; height: 32px; max-height: none; overflow-y: visible;">
	<div id="ftocp-control-button">
		<i id="ftocp-button-icon" class="ftoc-icon ftoc-icon-list-number ftoc-icon-normal"></i>
	</div>
	<div class="tooltip fade bottom in" role="tooltip" id="tooltip714565" style="top: 29px; left: -13px; display: block;"><div class="tooltip-arrow"></div><div class="tooltip-inner">Nội dung</div></div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#fixed-toc").click(function(){
				$("#toc_container").toggle('slow/400/fast', function() {	
					$("#fixed-toc").hide();
				});
			});
			$(".toc_title").click(function(event) {
				$("#toc_container").hide('slow/400/fast', function() {	

				});
				$("#fixed-toc").show();
			});
		});
		$(document).ready(function(){
			$('a[href^="#"]').on('click',function (e) {
				e.preventDefault();

				var target = this.hash;
				var $target = $(target);

				$('html, body').stop().animate({
					'scrollTop': $target.offset().top
				}, 900, 'swing', function () {
					window.location.hash = target;
				});
			});
		});
	</script>
	<script>
		$('#toc_container ul li').click(function() {
			$('#toc_container ul li').removeClass('red');
			$(this).addClass('red');

		});
	</script>
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
