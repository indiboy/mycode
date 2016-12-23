<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:102:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\enewsmembergroup\index.html";i:1482429174;s:84:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\main.html";i:1482420935;}*/ ?>
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
				</div>
			</div>
		</div>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <table class="layui-table">
                    <thead>
                    <tr>
                        <th style="width: 30px;">ID</th>
                        <th>名称</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($enewsmembergroup_list) || $enewsmembergroup_list instanceof \think\Collection): if( count($enewsmembergroup_list)==0 ) : echo "" ;else: foreach($enewsmembergroup_list as $key=>$vo): ?>
                    <tr>
                        <td><?php echo $vo['groupid']; ?></td>
                        <td><?php echo $vo['groupname']; ?></td>
                        <td><?php echo $vo['checked']==1 ? '禁用' : '启用'; ?></td>
                        <td>
                            <a href="<?php echo url('index/enewsmembergroup/auth',['groupid'=>$vo['groupid']]); ?>" class="layui-btn layui-btn-mini">授权</a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

			<!--JS引用-->
			<script src="/public/js/layui.js"></script>
			<script src="/public/js/bottom.js"></script>
			<script src="/public/js/usercp.js"></script>
			
			<script>
				layui.config({
					base: '/public/js/'
				}).use('main');
			</script>
			
	</body>

</html>