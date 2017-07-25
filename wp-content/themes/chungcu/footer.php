<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<footer class="footer-area">
	<div id="goTop">
		<img src="<?php echo get_template_directory_uri();?> /assets/images/back-to-top.png " alt="zkiwi demo">
	</div>
	<div class="w100">
		<div class="container container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left2">
					<div class="aboutus">
						<section id="text-3" class="widget widget_text"><h2 class="widget-title">Giới thiệu</h2>			<div class="textwidget"><div class="info">
<p>Chúng tôi tin chất lượng là dịch vụ tốt nhất</p>
<p><b>Địa chỉ:</b>506/5 Lạc Long Quân, Phường  5, Quận 11, Thành Phố Hồ Chí Minh</p>
<p><b>Emal: info@anphatsaigon.com | Điện thoại: (+84) 08.38.616.839</b></p>
<p><b>Hotline (+84) 08.38.616.839 | <a href="http://www.anphatsaigon.com">Website: www.anphatsaigon.com</a></b></p>
</div>
		</div></section>					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right fance-page1">
					<h3>Fanpage</h3>
					<div class="fb-fanpage">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAnPhatSaiGon%2F&amp;tabs=timeline&amp;width=340&amp;height=250px&amp;small_header=false&amp;adapt_container_width=false&amp;hide_cover=false&amp;show_facepile=false&amp;appId" width="340" height="250px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
					</div>
					<!-- end Fanpage -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer bottom -->
	<div class="footer-bottom">
		<div class="container container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5">
					<div class="copyright"><span class="apo">Bản quyền thuộc về<a target="_blank" href="#">GoSMAC™</a></span></div>
				</div>
				<div class="col-xs-12 col-sm-7 col-md-7">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
						<div class="social">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</footer>
<!-- Call -->
<div class="call">
	<div class="callimages">
		<img src="http://kasagrand.com/images/call_muahang.svg" alt="goimuahang">
		<span style="margin-right: 2px;"><a href="tel:0982112395">0979 263 968</a></span>
	</div>
</div>
<div id="goTop">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/back-to-top.png" alt="zkiwi demo">
</div>
<div class="subiz_wrapper_offline" id="subiz_wrapper">
	<div class="button_chat_offline color_theme_default">
		<a id="SHCOntrol">
			<i class="fa fa-envelope icon_offline_button"></i>
			<span class="button_chat_offline_text"><?php echo get_the_title(98); ?> </span>
			<span id="downup" style="color: white"><i class="pill-right fa fa-chevron-up"></i></span>
		</a>
	</div>
	<div class="modal-content" style="border-radius: 0px !important; display: none;">
		<div class="modal-body modal-res">
			<span style="color: #4e4e4e">Hiện nay chúng tôi không ở đây, xin vui lòng để lại lời nhắn</span>
			<?php echo do_shortcode('[contact-form-7 id="98" title="form đăng ký"]'); ?>
		</div>
	</div>
</div>
<script type="<?php echo get_template_directory_uri(); ?>/assets/js/js.js"></script>
<?php wp_footer(); ?>
</body>
</html>
