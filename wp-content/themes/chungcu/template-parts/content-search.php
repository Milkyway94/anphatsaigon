<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php 
global $post;
$thumbnail_URL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>
<div class="item w100 fl">
	<div class="image w100 fl content-left-dst">
		<a href="<?php the_permalink();?>" class="fw property-featured-image"><img class="img-responsive" border="0" src="<?php echo site_url().'/timthumb.php?src='.$thumbnail_URL.'&w=258&h=180&q=100'; ?>" alt="<?php the_title(); ?>"></a>
	</div>
	<div class="content-right-dst">
		<p class="date-author w100 fl">
			<span class="caption-date">
				<i class="fa fa-calendar"></i> Ngày đăng:                               
			</span>
			<span class="date">
			<?php the_time('l, d,F, Y') ?>                         
			</span>
			<span class="author">
				| Tin tức                                           
			</span>
		</p>
		<div class="title w100 fl"> 
			<h2><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		</div>
		<div class="description w100 fl"> 
			<?php the_excerpt (); ?><a href="<?php the_permalink() ?>">[…]</a>
		</div>       
	</div>  
</div>