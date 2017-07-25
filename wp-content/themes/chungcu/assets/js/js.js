$(document).ready(function() {
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		// arrows: false,
		asNavFor: '.slider-for',
		centerMode: true,
		centerPadding: '60px',
		swipeToSlide:true,
		focusOnSelect: true,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
				infinite: true,
			}
		}, {
			breakpoint: 1024,
			settings: {
				arrows: false,
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		}, {
			breakpoint: 700,
			settings: {
				arrows: false,
				slidesToShow: 2,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 480,
			settings: {
				arrows: false,
				slidesToShow: 2,
				slidesToScroll: 1
			}
		}]
	});
	$('.slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
		autoplaySpeed: 3000,
		autoplay: 300,
		dots: true
	});
	$('.customer').slick({
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		swipeToSlide: true,
		focusOnSelect: true,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
				infinite: true,
			}
		}, {
			breakpoint: 1024,
			settings: {
				arrows: false,
				slidesToShow: 3,
				slidesToScroll: 2,
				infinite: true,
			}
		}, {
			breakpoint: 700,
			settings: {
				arrows: false,
				slidesToShow: 2,
				slidesToScroll: 2
			}
		}, {
			breakpoint: 480,
			settings: {
				arrows: false,
				slidesToShow: 2,
				slidesToScroll: 2
			}
		}]
	});
	$('.list-apartment').slick({
		infinite: true,
		speed: 300,
		rows: 2,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		focusOnSelect: true,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		}, {
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
				arrows: false,
			}
		}, {
			breakpoint: 700,
			settings: {
				arrows: false,
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 480,
			settings: {
				arrows: false,
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});
});
$(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$('.custom-logo-link').hide();
			$('#wpadminbar').hide();
			$('#goTop').fadeIn();
		} else {
			$('.custom-logo-link').show();
			$('#wpadminbar').show();
			$('#goTop').fadeOut();
		}
	});
	$('#goTop').click(function() {
		$('body,html').animate({
			scrollTop: 0
		}, 'slow');
	});
});
$(document).ready(function() {
	var i = 0;
	$(".button_chat_offline").click(function() {
		$(".modal-content").animate({
			height: 'toggle',
		});
		if (i % 2 == 0) {
			$("#downup").html("<i class=\"pill-right fa fa-chevron-down\"></i>")
		} else {
			$("#downup").html("<i class=\"pill-right fa fa-chevron-up\"></i>")
		}
		i++;
	});
});