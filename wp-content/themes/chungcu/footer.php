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
<footer>
	<div id="footer-wrapper">
		<div class="overlay3"></div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box-footer">
						<h4>HỆ THỐNG SIÊU THỊ DỰ ÁN BẤT ĐỘNG SẢN – TẬP ĐOÀN CENGROUP</h4>
						<div class="info">
							<p>Trụ sở chính: 137 Nguyễn Ngọc Vũ, Trung Hòa, Cầu Giấy, Hà Nội.</p>
							<p>Cơ sở 2: Tầng 3, tòa nhà 319 Bộ Quốc Phòng, 63 Lê Văn Lương, Trung Hòa, Cầu Giấy, Hà Nội.</p>
							<p>HOTLINE: 0979 263 968 - 0908 438 386</p>
							<p>Email: banggiachungcuhn@gmail.com</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box-footer">
						<h4>DỰ ÁN CHUNG CƯ</h4>
						<?php
						$term_id = 22;
						$taxonomy_name = 'location';
						$termchildren = get_term_children( $term_id, $taxonomy_name );

						echo '<ul>';
						foreach ( $termchildren as $child ) {
							$term = get_term_by( 'id', $child, $taxonomy_name );
							echo '<li><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';
						}
						echo '</ul>';
						?> 
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box-footer">
						<div class="Fanpage fw">
							<h4>
								Bạn bè trên Facebook
							</h4>
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FB%25E1%25BA%25A3ng-gi%25C3%25A1-chung-c%25C6%25B0-1122087561231629%2F%3F__mref%3Dmessage_bubble&tabs&width=300&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1080043248778167" width="300" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="fl">
							<span class="copy" style="margin-left: 100px;">Copyright &copy; Nguyễn Hữu Thành.</span>
						</div>
						<div class="fr">
							<div class="social">
								<ul>
									<li class="facebook"><a href="https://www.facebook.com/giang.xnmay?fref=ts&#10;" target="_blank"><span class="fa fa-facebook stack"><span></span></span></a></li><li class="google-plus"><a href="https://plus.google.com/117033481445797668380/about;" target="_blank"><span class="fa fa-google-plus stack"><span></span></span></a></li><li class="youtube"><a href="https://www.youtube.com/channel/UCxIW8GPrks7ukZtXBnQwAdw" target="_blank"><span class="fa fa-youtube stack"><span></span></span></a></li>
								</ul>
							</div>
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
