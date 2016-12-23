/**
 * 后台JS主入口
 */

layui.define(['layer', 'element'], function(exports) {
	var layer = layui.layer,
		element = layui.element();

	exports('login', {});
});

function show_verify(verify) {
	layer.tips('<img src="' + verify + '" />', '#show_verify', {
		tips: [3, '#ccc'], //还可配置颜色
		time: 50000,
		success: function(index, layero) {
			//do something
			$("#show_verify").text("更换");
		}
	});
}

//刷新验证码
function reverify() {
	var verifyimg = $(".verifyimg").attr("src");
	if(verifyimg.indexOf('?') > 0) {
		$(".verifyimg").attr("src", verifyimg + '&random=' + Math.random());
	} else {
		$(".verifyimg").attr("src", verifyimg.replace(/\?.*$/, '') + '?' + Math.random());
	}
}