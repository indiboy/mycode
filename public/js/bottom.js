(function($) {
	//返回顶部
	var backToTopId = 'back-to-top';
	$(function() {
		$('body').append('<a id="' + backToTopId + '" href="javascript:void(0);" title="返回顶部">返回顶部</a>');
		$("#" + backToTopId).hide();

		$(window).scroll(function() {
			if($(window).scrollTop() > 100) {
				$("#" + backToTopId).fadeIn();
			} else {
				$("#" + backToTopId).fadeOut();
			}
		});

		$("#" + backToTopId).bind('click', function() {
			$('body, html').animate({
				scrollTop: 0
			});
			return false;
		});
	});
})($);