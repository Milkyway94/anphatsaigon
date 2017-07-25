<?php
/**
 * Plugin Name: Customize Admin By HT
 * Plugin URI: http://facebook.com/huu.thanh.2509
 * Description: Tùy biến lại trang quản trị của admin.
 * Version: 1.7.3
 * Author: Hữu Thành
 * Author URI: http://facebook.com/huu.thanh.2509

 /**
 * Thay đổi logo trang đăng nhập
 */
function tp_custom_logo() { ?>
<style type="text/css">
    #login h1 a {
        background-image: url(<?php echo plugins_url('images/logo.png', __FILE__); ?>);
        background-size: 178px 50px;
        width: 178px;
        height: 50px;
    }
</style>
<?php }
add_action('login_enqueue_scripts','tp_custom_logo');

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
 
function my_login_logo_url_title() {
    return 'Bảng giá chung cư';
}
/**
 * Thêm logo vào trang quản trị WordPress
 */
 
// add_action( 'admin_notices', 'tp_admin_logo' );

/**
 * Sửa chữ dưới footer của trang quản trị
 */
function tp_admin_footer_credits($text){
	$text = '<p>Copyright © Nguyễn Hữu Thành</p>';
	return $text;
}
add_filter('admin_footer_text','tp_admin_footer_credits');