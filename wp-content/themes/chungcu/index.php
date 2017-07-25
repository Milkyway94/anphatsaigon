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
			$thumbnail_URL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
			?>
			<div class="img"><a href="<?php the_permalink(); ?>"><img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=1349&h=395&q=100'; ?>" alt="<?php the_title(); ?>"></a></div>	
			<?php
			endwhile;
		}
		?>
	</div>
	<div class="container">
		<div class="row">
			<div class="services w100 fl">
				<div class="col-sm-12">
					<?php
					$args=array(
						'cat' =>'13',
						'showposts'=>4,
						'post_type'=>'post'
						);
					$my_query = new wp_query($args);
					?>
					<div class="wpb_wrapper fw">
						<div class="blue_c">
							<h2 class="wpb_heading">
								<?php if( $my_query->have_posts() ): ?>
									<?php echo $term->name;    ?>
								<?php endif; ?>
								<span><?php echo get_cat_name('13'); ?></span> 
							</h2>
						</div>
						<?php
						$args=array(
							'cat' =>'13',
							'showposts'=>4,
							'post_type'=>'post'
							);
						$my_query = new wp_query($args);
						?>

						<?php while ($my_query->have_posts()){
							$my_query->the_post();
							global $post; 
							$thumbnail_URL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
							?>
							<div class="col-md-3 col-sm-3 col-xs-12 featured-block">
								<div class = "thumbnail">
									<a href="<?php the_permalink(); ?>"><img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=165&h=165&q=100'; ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
							<div class = "caption">
								<h3><?php the_title(); ?></h3>
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="content w100 fl">
			<?php get_sidebar( 'content-left' ); ?> 
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-fix-content">
				<div class="main-content w100 fl">
					<div class="search-form">
						<?php get_search_form(); ?>
					</div>
					<div class="chung-cu-hot fw">
						<div class="subcat">
							<h2>
								<span class="heading-icon">
									<i class="fa fa-caret-right icon-design"></i>
								</span>
								<?php 
								$term = get_term( 36, 'location' ); 
								echo $name = $term->name;
								?>
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
						</div>
						<div class="adv fw">
							<?php
							$post=@get_post('113');
							?>
							<?php 
							echo get_the_post_thumbnail($post, 'full', array( 'class' => 'img-responsive' ));
							?>
						</div>
						<div class="lien-ke-biet-thu">
							<div class="subcat">
								<h2>
									<span class="heading-icon">
										<i class="fa fa-caret-right icon-design"></i>
									</span>
									<?php 
									$term = get_term( 34, 'location' ); 
									echo $name = $term->name;
									?>
								</h2>
								<a href="/location/lien-ke-biet-thu/" class="btn btn-primary btn-sm pull-right">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
							</div>
							<?php 
							wp_reset_query();
							$args = array('post_type' => 'project',
								'tax_query' => array(
									array(
										'taxonomy' => 'location',
										'field' => 'id',
										'terms' => 34,
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
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="apartment fw">
										<div class = "thumbnail">
											<a href="<?php the_permalink();?>" class="fw property-featured-image">
												<div class="overlay2"></div>
												<img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=200&h=180&q=100'; ?>" alt="<?php the_title(); ?>"></a>
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
							<div class="bat-dong-san-gui">
								<div class="subcat">
									<h2>
										<span class="heading-icon">
											<i class="fa fa-caret-right icon-design"></i>
										</span>
										<?php 
										$term = get_term( 35, 'location' ); 
										echo $name = $term->name;
										?>
									</h2>
									<a href="/location/bat-dong-san-gui/" class="btn btn-primary btn-sm pull-right">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
								</div>
								<?php 
								wp_reset_query();
								$args = array('post_type' => 'project',
									'tax_query' => array(
										array(
											'taxonomy' => 'location',
											'field' => 'id',
											'terms' =>35,
											'showposts' => 5
											),
										),
									);
								$loop = new WP_Query($args);
								if($loop->have_posts()) {
									while($loop->have_posts()) : $loop->the_post();
									?>
									<?php 
									global $post; 
									$thumbnail_URL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
									?>
									<div class="col-md-4 col-sm-6">
										<div class="apartment fw">
											<div class = "thumbnail">
												<a href="#" class="fw property-featured-image">
													<a href="<?php the_permalink();?>" class="fw property-featured-image">
														<div class="overlay2"></div>
														<img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=200&h=180&q=100'; ?>" alt="<?php the_title(); ?>"></a>
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
												<div class = "caption">
													<div class="fw property-info">
														<h4>
															<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
														</h4>
														<span class="location">
															<i class="fa fa-map-marker"></i> <?php echo get_post_meta( $post->ID, 'wpcf-locate', true ); ?>
														</span>
														<div class="fw property-amenities">
															<span class="area">DT: <?php echo get_post_meta( $post->ID, 'wpcf-area', true ); ?> m<sup>2</sup></span>
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
								<div class="news-event w100 fl">
									<div class="col-md-6 col-xs-12">
										<div class="news w100 fl">
											<div class="subcat">
												<?php
												$args=array(
													'cat' =>'14',
													'showposts'=>5,
													'post_type'=>'post'
													);
												$my_queryn = new wp_query($args);
												?>
												<h2>
													<span class="heading-icon">
														<i class="fa fa-caret-right icon-design"></i>
													</span>
													<?php echo get_cat_name('14'); ?>
												</h2>
											</div>
											<div class="post-item fw">
												<?php while ($my_queryn->have_posts()){
													$my_queryn->the_post();?>
													<?php 
													global $post; 
													$thumbnail_URL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
													?>
													<div class="post-thumb">
														<div class="row">     
															<div class="content-left-dst">        
																<div class="image">           
																	<a href="<?php the_permalink();?>"><img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=132&h=96&q=100'; ?>"></a>       
																</div>
															</div>     
															<div class="content-right-dst">       
																<h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>        
																<p><?php echo substr(get_the_excerpt(), 0,100); ?> <a href="<?php the_permalink(); ?>">[…]</a></p>
															</div> 
														</div>
													</div>
													<?php
												}
												?>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="policy w100 fl">
											<div class="subcat">
												<?php
												$args=array(
													'cat' =>'15',
													'showposts'=>5,
													'post_type'=>'post'
													);
												$my_queryn = new wp_query($args);
												?>
												<h2>
													<span class="heading-icon">
														<i class="fa fa-caret-right icon-design"></i>
													</span>
													<?php echo get_cat_name('15'); ?>
												</h2>
											</div>
											<div class="post-item fw">
												<?php while ($my_queryn->have_posts()){
													$my_queryn->the_post();?>
													<?php 
													global $post; 
													$thumbnail_URL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
													?>
													<div class="post-thumb">
														<div class="row">     
															<div class="content-left-dst">        
																<div class="image">           
																	<a href="<?php the_permalink();?>"><img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=132&h=96&q=100'; ?>"></a>       
																</div>
															</div>     
															<div class="content-right-dst">       
																<h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>        
																<p><?php echo substr(get_the_excerpt(), 0,100); ?> <a href="<?php the_permalink();  ?>">[…]</a></p>     
															</div> 
														</div>
													</div>
													<?php
												}
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php get_sidebar('content-right'); ?>
					</div>
				</div>
				<div class="list-customer fw col-xs-12">
					<div class="subcat">
						<h2>
							<span class="heading-icon">
								<i class="fa fa-caret-right icon-design"></i>
							</span>
							<?php 
							$term = get_term( 24, 'category-image' ); 
							echo $name = $term->name;
							?>
						</h2>
					</div>
					<div class="customer fw">
						<?php 
						wp_reset_query();
						$args = array('post_type' => 'image',
							'tax_query' => array(
								array(
									'taxonomy' => 'category-image',
									'field' => 'id',
									'terms' => 24,
									),
								),
							);
						$loop1 = new WP_Query($args);
						if($loop1->have_posts()) {
							while($loop1->have_posts()) : $loop1->the_post();
							global $post; 
							$thumbnail_URL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
							?>
							<div class="img"><img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=165&h=99&q=100'; ?>" alt="<?php the_title(); ?>"></div>
							<?php
							endwhile;
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>
