<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div id="headerRightSearchForm">
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Nhập từ khóa tìm kiếm &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" id="s" class="input-search" placeholder="Nhập từ khóa tìm kiếm...">
					<button type="submit" class="search-submit"><i class="fa fa-search"></i>&nbsp;Tìm kiếm</button>
				</form>
			</div>