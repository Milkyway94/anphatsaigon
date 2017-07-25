<?php get_header(); ?>
<section>
	<div class="slider">
		<?php 
		wp_reset_query();
		$args = array('post_type' => 'image',
			'tax_query' => array(
				array(
					'taxonomy' => 'category-image',
					'field' => 'id',
					'terms' => 23,
					),
				),
			);
		$loop = new WP_Query($args);
		if($loop->have_posts()) {
			while($loop->have_posts()) : $loop->the_post();
			global $post; 
			?>
			<div class="img">
				<?php echo get_the_post_thumbnail(); ?>
			</div>	
			<?php
			endwhile;
		}
		?>
	</div>

	<div class="container">
	<div class="about fw">
				<div class="col-md-6 col-xs-12">
					<div class="fw video">
						<div class="wrapper">
							<div class="h_iframe">
								<!-- a transparent image is preferable -->
								<img class="ratio" src="http://placehold.it/16x9" alt="ratio">
								<iframe class="scale-with-grid" src="https://www.youtube.com/embed/m7sKkgj2yQ0" allowfullscreen=""></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="fw aboutus">
						<h1>AN PHÁT SÀI GÒN</h1>
						<p>Với phương châm "luôn lắng nghe để đáp ứng nhiều hơn khách hàng cần" và vì mục tiêu trở thành sự lựa chọn tốt nhất đối với khách hàng chúng tôi cam kết.
						<ul>
							<li>Chất lượng tốt nhất</li>
<li>Giá thành hợp lí nhất</li>
<li>Giao nhận nhanh nhất</li>
<li>Bảo hành sớm nhất</li>
						</ul>
						</p>
						<p>Chúng tôi hiểu rằng muốn có sản phẩm dịch vụ tốt thì điều kiện kiên quyết đầu tiên là nguyên liệu phải tốt, do đó chúng tôi luôn tìm kiếm và mang đến những sản phẩm tốt nhất từ những nhà sản xuất uy tín nhất.</p>
						</div>
					</div>
				</div>
		<div class="content w100 fl">
			<div class="col-md-12 col-xs-12">
				<div class="main-content w100 fl">
					<div class="search-form">
						<?php //get_search_form(); ?>
					</div>
					<div class="chung-cu-hot fw">
						<div class="blue_c"> <h2 class="wpb_heading"> <span><?php $term = get_term( 36, 'location' ); 
								echo $name = $term->name; ?></span> </h2> </div>
						</div>
						<div class="list-apartment fw">
							<?php 
							wp_reset_query();
							$args = array('post_type' => 'project',
								'tax_query' => array(
									array(
										'taxonomy' => 'location',
										'field' => 'id',
										'terms' => 36,
										'showposts' => 5
										),
									),
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
											<a href="<?php the_permalink();?>" class="fw property-featured-image">
												<div class="overlay2"></div>
												<img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=208&h=180&q=100'; ?>" alt="<?php the_title(); ?>"></a>
												
											</div>
											<div class = "caption">
												<div class="fw property-info">
													<h4>
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
													</h4>
												</div>
											</div>
										</div>
									</div>
									<?php
									endwhile;
								}
								?>
							</div>
						</div>
						<!-- <?php get_sidebar('content-right'); ?> -->
					</div>
				</div>
				<div class="main-content w100 fl">
					<div class="search-form">
						<?php //get_search_form(); ?>
					</div>
					<div class="chung-cu-hot fw">
						<div class="blue_c"> <h2 class="wpb_heading"> <span><?php $term = get_term( 37, 'location' ); 
								echo $name = $term->name; ?></span> </h2> </div>
						</div>
						<div class="list-apartment fw">
							<?php 
							wp_reset_query();
							$args = array('post_type' => 'project',
								'tax_query' => array(
									array(
										'taxonomy' => 'location',
										'field' => 'id',
										'terms' => 37,
										'showposts' => 5
										),
									),
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
											<a href="<?php the_permalink();?>" class="fw property-featured-image">
												<div class="overlay2"></div>
												<img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=208&h=180&q=100'; ?>" alt="<?php the_title(); ?>"></a>
												
											</div>
											<div class = "caption">
												<div class="fw property-info">
													<h4>
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
													</h4>
												</div>
											</div>
										</div>
									</div>
									<?php
									endwhile;
								}
								?>
							</div>
						</div>
						<!-- <?php get_sidebar('content-right'); ?> -->
					</div>
				</div>
				</div>
			</div>

		</div>
		<div class="w100 loingo_bg">
					<div class="container container-fluid">
						<div class="loingo w100 col-xs-12 col-md-12 col-lg-12 col-sm-12"><div class="row" <div="">
								<div class="caption vi w100">
									<div class="caption-auto"><span>Lời ngỏ</span></div>
								</div>
								<div class="w100 list_loingo">
									<p>Đến với An Phát Sài Gòn, nhân viên bán hàng sẽ trực tiếp tư vấn về sản phẩm, chất liệu, xuất xứ v. v. phù hợp với không gian chiếu sáng của bạn cũng như giải đáp mọi thắc mắc của khách hàng</p>
									<p>Hệ thống cửa hàng của chúng tôi hiện tại chưa phủ rộng khắp cả nước, và để giải quyết vấn đề trên, chúng tôi đã xây dựng hệ thống cửa hàng trực tuyến để có thể phục vụ quý khách hàng từ xa.</p>
									<p><b>Hotline:<span>(+84) 98 282 395</span> <br>Email:<span>hotro@anphatsaigon.vn</span></b></p>
								</div>
							</div>
						</div>
					</div>
					<div class="w100 duan-bg">
					<div class="container container-fluid">
						<div class="product-hot w100">
							<div class="caption vi">
								<div class="caption-auto"><span class="den"></span><span class="do">Dự án tiêu biểu</span></div>
							</div>
							<div class="w100 list-duan">
								<div class="row">
									<div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">
										<div class="products-img"><span class="watermark"></span><a class="product-img1" href="#"><img src="http://localhost:82/Anphatsaigon_v1/wp-content/themes/twentysixteen/Assets/images/du-an.jpg" class="img-responsive"></a></div>
										<div class="w100 title-duan"><a href="#">Dự án lắp đặt đèn trang trí cho Thành Phố Hồ Chí Minh</a></div>
									</div>
									<div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">
										<div class="products-img"><span class="watermark"></span><a class="product-img1" href="#"><img src="http://localhost:82/Anphatsaigon_v1/wp-content/themes/twentysixteen/Assets/images/du-an2.jpg" class="img-responsive"></a></div>
										<div class="w100 title-duan"><a href="#">Dự án nội thất ngôi nhà mơ ước</a></div>
									</div>
									<div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">
										<div class="products-img"><span class="watermark"></span><a class="product-img1" href="#"><img src="http://localhost:82/Anphatsaigon_v1/wp-content/themes/twentysixteen/Assets/images/du-an3.jpg" class="img-responsive"></a></div>
										<div class="w100 title-duan"><a href="#">Dự án lắp đặt đèn trang trí cho Biệt thự tại Phú Mỹ Hưng</a></div>
									</div>
									<div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">
										<div class="products-img"><span class="watermark"></span><a class="product-img1" href="#"><img src="http://localhost:82/Anphatsaigon_v1/wp-content/themes/twentysixteen/Assets/images/du-an4.jpg" class="img-responsive"></a></div>
										<div class="w100 title-duan"><a href="#">Dự án đèn trang trí tại khách sạn cho Thành Phố Hồ Chí Minh</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w100 duan-bg">
					<div class="container container-fluid">
						<div class="product-hot w100">
							<div class="caption vi">
								<div class="caption-auto"><span class="den"></span><span class="do">HỆ THỐNG ĐẠI LÝ</span></div>
							</div>
							<div class="w100 list-duan">
								<div class="row">
									<div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">
										<div class="products-img"><span class="watermark"></span><a class="product-img1" href="#"><img src="http://localhost:82/Anphatsaigon_v1/wp-content/themes/twentysixteen/Assets/images/du-an.jpg" class="img-responsive"></a></div>
										<div class="w100 title-duan"><a href="#">Đại lý Cà Mau</a></div>
									</div>
									<div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">
										<div class="products-img"><span class="watermark"></span><a class="product-img1" href="#"><img src="http://localhost:82/Anphatsaigon_v1/wp-content/themes/twentysixteen/Assets/images/du-an2.jpg" class="img-responsive"></a></div>
										<div class="w100 title-duan"><a href="#">Dự án nội thất ngôi nhà mơ ước</a></div>
									</div>
									<div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">
										<div class="products-img"><span class="watermark"></span><a class="product-img1" href="#"><img src="http://localhost:82/Anphatsaigon_v1/wp-content/themes/twentysixteen/Assets/images/du-an3.jpg" class="img-responsive"></a></div>
										<div class="w100 title-duan"><a href="#">Dự án lắp đặt đèn trang trí cho Biệt thự tại Phú Mỹ Hưng</a></div>
									</div>
									<div class="col-xs-12 col-lg-3 col-sm-3 col-md-3">
										<div class="products-img"><span class="watermark"></span><a class="product-img1" href="#"><img src="http://localhost:82/Anphatsaigon_v1/wp-content/themes/twentysixteen/Assets/images/du-an4.jpg" class="img-responsive"></a></div>
										<div class="w100 title-duan"><a href="#">Dự án đèn trang trí tại khách sạn cho Thành Phố Hồ Chí Minh</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</section>
	<?php get_footer(); ?>
