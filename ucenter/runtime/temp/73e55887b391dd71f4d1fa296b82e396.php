<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:101:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\enewsmembergroup\auth.html";i:1482430066;s:84:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\main.html";i:1482420935;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>会员登录</title>
		<meta name="keywords" content="会员登录" />
		<meta name="description" content="会员登录" />
		<meta name="renderer" content="webkit" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/public/pintuer/pintuer.css">
		<link rel="stylesheet" href="/public/layui/css/layui.css">
		<link rel="stylesheet" href="/public/css/font-awesome.min.css">
		<link rel="stylesheet" href="/public/css/css.css">
		<link rel="stylesheet" href="/public/css/usercp.css">
		<!--CSS引用-->
		
<link rel="stylesheet" href="/public/css/ztree-metro-style.css">

		<script src="/public/pintuer/jquery.js"></script>
		<script src="/public/layui/layui.js"></script>
		<script src="/public/pintuer/pintuer.js"></script>
		<!--[if lt IE 9]>
    <script src="/public/js/html5shiv.min.js"></script>
    <script src="/public/js/respond.min.js"></script>
    <![endif]-->
		<script src="/public/js/header.js"></script>
	</head>

	<body>
			
<div class="layout">
    <!--tab标签-->
    <div class="layui-tab layui-tab-brief">
        <div class="padding border-bottom">
			<div class="button-toolbar">
				<div class="button-group">
            		<a class="button border-green icon-home" href="<?php echo url('index/enewsmembergroup/index'); ?>"> 权限组</a>
            		<button type="button" class="button border-green icon-edit" disabled="disabled"> 编辑权限组</button>
				</div>
			</div>
		</div>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <ul id="tree" class="ztree"></ul>
            </div>
        </div>
        <input type="hidden" id="group_id" name="groupid" value="<?php echo $groupid; ?>">
        <button class="layui-btn" id="auth-btn">授权</button>
    </div>
</div>

			<!--JS引用-->
			<script src="/public/js/layui.js"></script>
			<script src="/public/js/bottom.js"></script>
			<script src="/public/js/usercp.js"></script>
			
<script src="/public/js/jquery.ztree.all.min.js"></script>

			<script>
				layui.config({
					base: '/public/js/'
				}).use('main');
			</script>
			
<script>
    $(document).ready(function(){
        /**
         * 加载树形授权菜单
         */
        var _groupid = $("#group_id").val();
        var tree = $("#tree");
        var zTree;

        // zTree 配置项
        var setting = {
            check: {
                enable: true
            },
            view: {
                dblClickExpand: false,
                showLine: true,
                showIcon: false,
                selectedMulti: false
            },
            data: {
                simpleData: {
                    enable: true,
                    idKey: "id",
                    pIdKey: "pid",
                    rootpid: ""
                },
                key: {
                    name: "title"
                }
            }
        };

        $.ajax({
            url: "<?php echo url('index/enewsmembergroup/getJson'); ?>",
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                groupid: _groupid
            },
            success: function (data) {
                zTree = $.fn.zTree.init(tree, setting, data);
            }
        });

        /**
         * 授权提交
         */
        $("#auth-btn").on("click", function () {
            var checked_ids,auth_rule_ids = [];
            checked_ids = zTree.getCheckedNodes(); // 获取当前选中的checkbox
            $.each(checked_ids, function (index, item) {
                auth_rule_ids.push(item.id);
            });
            $.ajax({
                url: "<?php echo url('index/enewsmembergroup/updateAuthGroupRule'); ?>",
                type: "post",
                cache: false,
                data: {
                    groupid: _groupid,
                    auth_rule_ids: auth_rule_ids
                },
                success: function (data) {
                    if(data.code === 1){
                        setTimeout(function () {
                            location.href = data.url;
                        }, 1000);
                    }
                    layer.msg(data.msg);
                }
            });
        });
    });
</script>

	</body>

</html>