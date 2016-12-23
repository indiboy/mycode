<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:96:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\enewsmember\edit.html";i:1482429018;s:84:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\main.html";i:1482420935;}*/ ?>
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
            		<a class="button border-green icon-home" href="<?php echo url('index/enewsmember/index'); ?>"> 用户管理</a>
            		<button type="button" class="button border-green icon-edit" disabled="disabled"> 用户状态</button>
				</div>
			</div>
		</div>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <form class="layui-form form-container" action="<?php echo url('index/enewsmember/update'); ?>" method="post">
                    <div class="layui-form-item">
                        <label class="layui-form-label">用户名</label>
                        <div class="layui-input-block">
                            <input type="text" name="username" value="<?php echo $enewsmember['username']; ?>" required  lay-verify="required" placeholder="请输入用户名" class="layui-input" disabled>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">状态</label>
                        <div class="layui-input-block">
                            <input type="radio" name="checked" value="1" title="启用" <?php if($enewsmember['checked']==1): ?> checked="checked"<?php endif; ?>>
                            <input type="radio" name="checked" value="0" title="禁用" <?php if($enewsmember['checked']==0): ?> checked="checked"<?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="hidden" name="userid" value="<?php echo $enewsmember['userid']; ?>">
                            <button class="layui-btn" lay-submit lay-filter="*">更新</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
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