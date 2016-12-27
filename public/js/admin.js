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

	var opened_tabs = new Array();

	var active = {
		closeTab: function() {
			var tab_name = $(this).data('name');
			var index = $.inArray(tab_name, opened_tabs);
			element.tabDelete('page-tab', index);
			update_opened_tab();
		},
		signOut: function() {
			common.signOut('确认退出系统？', '为保存的操作将丢失！', function() {
				window.location.href = 'login.html';
			});
		}
	};

	$('.layui-nav').on('click', '.tab-open', function() {
		update_opened_tab();

		var has_tab = $.inArray($(this).data('name'), opened_tabs);
		if(has_tab != -1) {
			element.tabChange('page-tab', has_tab);
		} else {
			element.tabAdd('page-tab', {
				title: $(this).data('name').trim() + " <i class='layui-icon ayui-unselect layui-tab-close close-tab' data-name='" + $(this).data('name').trim() + "' data-type='closeTab'>&#x1006;</i>",
				content: "<iframe class='tab-main' src='" + $(this).data('url') + "'></iframe>"
			});
			element.tabChange('page-tab', opened_tabs.length);
			layer.msg('页面加载中，请稍后。。。', {
				icon: 16,
				time: false
			});
			changeIframeHeight();
		};
	});

	function update_opened_tab() {
		opened_tabs = new Array();
		var temp = $('.page-tab>.layui-tab-title li');
		$(temp).each(function(key, value) {
			opened_tabs[key] = $(value).text().substr(0, $(value).text().trim().length - 2);
		});
	};
	$('#go-dashboard').on('click', function(e) {
		element.tabChange('page-tab', 0);
	});

	$('.page-tab').on('click', '.close-tab', function() {
		var type = $(this).data('type');
		active[type] ? active[type].call(this) : '';
	});

	/**
	 * AJAX全局设置
	 */
	$.ajaxSetup({
		type: "post",
		dataType: "json"
	});

	/**
	 * 后台侧边菜单选中状态
	 */
	$('.layui-nav-item').find('a').removeClass('layui-this');
	$('.layui-nav-tree').find('a[href*="' + GV.current_controller + '"]').parent().addClass('layui-this').parents('.layui-nav-item').addClass('layui-nav-itemed');




	/**
	 * 清除缓存
	 */
	$('#clear-cache').on('click', function(event) {
		event.preventDefault();
		var _url = $(this).data('url');
		if(_url !== 'undefined') {
			$.ajax({
				url: _url,
				success: function(data) {
					if(data.code === 1) {
						setTimeout(function() {
							location.href = location.pathname;
						}, 1000);
					}
					layer.msg(data.msg);
				}
			});
		}

		return false;
	});

	exports('admin', {});
});