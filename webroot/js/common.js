$(document).ready(function() {
	// Выпадающее меню
	$('#second_top_menu li, #first_top_menu li, #bottom_menu li').hover(function () {
		clearTimeout($.data(this,'timer'));
		$('ul',this).stop(true, true).slideDown(400);
	}, function () {
		$.data(this,'timer', setTimeout($.proxy(function() {
			$('ul',this).stop(true, true).slideUp(400);
		}, this), 150));
	});

	// Выезжающий блок свяжитесь с нами
	$('.contact_block > h3').click(function() {
    $('.contact_us').slideToggle(400);
  });

  function toggleSoft(soft, block) {
  	$(soft).click(function() {
  		$(block).fadeToggle('400');
  	});
  }
  toggleSoft('img[src*=frv-prof]', '.about_frv');
  toggleSoft('img[src*=fn-prof]', '.about_fn');

	// Отступ в последнем выпадающем списке меню категорий
	$('#second_top_menu > ul li > ul').eq(4).css('marginLeft', '-36px');

	// Слайдер на главной станице
	$("#slider3").responsiveSlides({
		manualControls: '#slider3-pager',
		speed: 1000,
		timeout: 5000,
		nav: true,
		prevText: "<",
		nextText: ">"
	});

	// Карусель клиентов
	$(function() {
		$('.clients').jCarouselLite({
			btnNext: ".next",
			btnPrev: ".prev"
		});
	});

});