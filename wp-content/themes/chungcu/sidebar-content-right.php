<?php
if ( ! is_active_sidebar( 'sidebar-right' )) {
	return;
}
?>
<div id="content-bottom-widgets" class="col-lg-3 col-md-3 hidden-sm hidden-xs sidebar col-fix-sidebar" role="complementary">
	<div class="support w100 fl">
		<h4>
			<i class="fa fa-headphones"></i>
			Hỗ trợ trực tuyến
		</h4>
		<div class="supporter fw">   
			<div class="content-left-dst">        
				<div class="image">           
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo.jpg" alt="avatar" class="img-responsive"/>     
				</div>
			</div>     
			<div class="content-right-dst sp">       
				<span class="name-suport"><i class="fa fa-user"></i>&nbsp;Mr. Việt</span>        
				<span class="fw phone-suport"><a href="tel:0979263958"><i class="fa fa-phone"></i>&nbsp;0979 263 958</a></span>
				<span class="fw phone-suport"><a href="tel:0908438386"><i class="fa fa-phone"></i>&nbsp;0908 438 386</a></span>
				 <span class="mail-suport fw"><a href="mailto:vuongviet258@gmail.com"><i class="fa fa-envelope fa-gmail"></i>&nbsp;<span class="font-mini">vuongviet258@gmail.com</span></a></span> 
			</div> 
		</div>
	</div>
	<?php
	if ( is_archive() AND get_post_type($post)=='post') {
		?>
		<div class="cats fw">
			<h2 class="ew_heading">
				<span class="heading-icon">
					<i class="fa fa-caret-right icon-design"></i>
				</span>
				Chuyên mục
			</h2>
			<?php
			if (is_category()) {
				$cat = get_query_var('cat');
				$this_category = get_category($cat);
				$this_category = wp_list_categories('hide_empty=0&hierarchical=true&orderby=id&show_count=0&title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID."&echo=0");
				if($this_category !='<li>No categories</li>')
				{
					echo '<ul class="newstick">'.$this_category.'</ul>'; 
				}
			}
			?>
		</div>
		<?php
	}
	else{ ?>
	<div class="cats fw">
		<h2 class="ew_heading">
			<span class="heading-icon">
				<i class="fa fa-caret-right icon-design"></i>
			</span>
			Dự Án
		</h2>
		<?php
		$term_id = 22;
		$taxonomy_name = 'location';
		$termchildren = get_term_children( $term_id, $taxonomy_name );

		echo '<ul class="newstick">';
		foreach ( $termchildren as $child ) {
			$term = get_term_by( 'id', $child, $taxonomy_name );
			echo '<li class="cat-item"><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';
		}
		echo '</ul>';
		?> 
	</div>
	<?php	
}
?>
<div class="sidebar-news fw">
	<h2 class="ew_heading">
		<span class="heading-icon">
			<i class="fa fa-caret-right icon-design"></i>
		</span>
		<?php echo get_cat_name('14'); ?>
	</h2>
	<div class="post-item-sidebar fw">
		<?php
		$args=array(
			'cat' =>'14',
			'showposts'=>5,
			'post_type'=>'post',
			);
		$my_query1 = new wp_query($args);
		?>
		<?php while ($my_query1->have_posts()){
			$my_query1->the_post();
			global $post; 
			$thumbnail_URL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
			?>
			<div class="post-thumb fw">   
				<div class="content-left-dst">        
					<div class="image">           
					<a href="<?php the_permalink();?>" class="fw property-featured-image"><img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=76&h=58&q=100'; ?>"></a>
					</div>
				</div>     
				<div class="content-right-dst">       
					<h5><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h5>   
				</div>
			</div>
			<?php 
		}
		?>
	</div>
</div>
<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
	<div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-right' ); ?>
	</div>
<?php endif; ?> 