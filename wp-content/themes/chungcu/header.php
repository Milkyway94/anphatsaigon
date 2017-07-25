<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta property="fb:app_id" content="1080043248778167" />
	<meta property="fb:admins" content="100004966144394"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57ff457e59182123"></script>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1080043248778167',
			xfbml      : true,
			version    : 'v2.8'
		});
	};
	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<body <?php body_class(); ?>>
	<!-- Header -->
	<header>
		<div class="header-top">
			<div class="container">
				<div class="contact fl">
					<span class="mail"><a href="mailto:vuongviet258@gmail.com"><i class="fa fa-envelope"></i>&nbsp;banggiachungcuhn@gmail.com</a></span>
				</div>
				<div class="search fr">
					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="search-icon fl"><input type="search" class="search-field input-search" placeholder="Từ khóa tìm kiếm" name="s" /></div></form>
					<div class="social">
						<ul>
							<li class="facebook"><a href="https://www.facebook.com/giang.xnmay?fref=ts&#10;" target="_blank"><span class="fa fa-facebook stack"><span></span></span></a></li><li class="google-plus"><a href="https://plus.google.com/117033481445797668380/about" target="_blank"><span class="fa fa-google-plus stack"><span></span></span></a></li><li class="youtube"><a href="https://www.youtube.com/channel/UCxIW8GPrks7ukZtXBnQwAdw" target="_blank"><span class="fa fa-youtube stack"><span></span></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div> 
		<div class="header">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="197">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">
								<?php twentysixteen_the_custom_logo(array('class'=>'navbar-brand')); ?>
							</a>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'nav navbar-nav',
									'walker' => new Nav_Walker_Nav_Menu()
									) );
									?>
								</ul>
							</div>
						</div><!--/.nav-collapse -->
					</nav>
				<?php endif; ?>
			</div>
</header><!-- /header -->