/**
 * 后台JS主入口
 */

layui.define(['form', 'layer', 'element', 'layedit', 'laydate', 'upload'], function(exports) {
	var layer = layui.layer,
		element = layui.element(),
		layedit = layui.layedit,
		laydate = layui.laydate,
		form = layui.form();
	$(function() {

		// 关闭加载提示
		if(self.frameElement != null && self.frameElement.tagName == "IFRAME") {
			parent.layer.closeAll();
		};
	});

	exports('main', {});
});