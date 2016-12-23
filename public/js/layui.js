function DoDigg(classid, id, dotop) {
	$.ajax({
		type: "GET",
		url: '/e/extend/digg/?classid=' + classid + '&id=' + id + '&dotop=' + dotop,
		cache: false,
		dataType: 'json',
		data: {
			classid: classid,
			id: id,
			dotop: dotop,
		},
		success: function(data) {
			var status = data.status;
			var message = data.message;
			if(status) {
				if(dotop) {
					diggtop_num = Number($(".diggtop" + id).html()) + 1;
					$(".diggtop" + id).html(diggtop_num);
					layer.msg(message, {
						icon: 1
					});
				} else {
					diggdown_num = Number($(".diggdown" + id).html()) + 1;
					$(".diggdown" + id).html(diggdown_num);
					layer.msg(message, {
						icon: 1
					});
				}
			} else {
				layer.msg(message, {
					icon: 5
				});
			}
		},
		error: function() {
			layer.msg('网络错误，请稍后重试！', {
				icon: 5
			});
		}
	});
}

function nickname() {
	$.ajax({
		type: "GET",
		url: '/e/extend/ajaxmember/index.php',
		cache: false,
		dataType: 'text',
		success: function(data) {
			$("#username").val(data);
			layer.msg('随机昵称更换成功');
		},
		error: function() {
			layer.msg('随机昵称加载失败');
		}
	});
}