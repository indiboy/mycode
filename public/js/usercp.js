$(function() {
	autoLeftNav();
	$(window).resize(function() {
		autoLeftNav();
		//console.log($(window).width())
	});
})

// 侧边菜单开关

function autoLeftNav() {

	$('.tpl-header-switch-button').on('click', function() {
		if($('.left-sidebar').is('.switch')) {
			if($(window).width() > 1024) {
				$('.tpl-content-wrapper').removeClass('switch');
				$('.tpl-footer').removeClass('switch');
			}
			$('.left-sidebar').removeClass('switch');
		} else {

			$('.left-sidebar').addClass('switch');
			if($(window).width() > 1024) {
				$('.tpl-content-wrapper').addClass('switch');
				$('.tpl-footer').addClass('switch');
			}
		}
	})

	if($(window).width() < 1024) {
		$('.left-sidebar').addClass('switch');
		$('.tpl-content-wrapper').addClass('switch');
		$('.tpl-footer').addClass('switch');
		
	} else {
		$('.left-sidebar').removeClass('switch');
		$('.tpl-content-wrapper').removeClass('switch');
		$('.tpl-footer').removeClass('switch');
	}
}



changeIframeHeight();

window.onresize = function(){
    changeIframeHeight();
};

function changeIframeHeight(){
    var iframe = document.getElementsByClassName('tab-main');
    if (iframe.length >= 1){
        for(var i = 0; i<=iframe.length; i++){
        	//console.log(iframe[i]);
            $(iframe[i]).css("height",document.documentElement.clientHeight - 190);
        }
    }
}