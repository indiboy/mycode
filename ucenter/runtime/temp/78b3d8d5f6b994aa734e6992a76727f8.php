<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:90:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\index\main.html";i:1482420937;s:84:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\main.html";i:1482420935;}*/ ?>
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
        <ul class="layui-tab-title">
            <li class="layui-this">网站概览</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div class="table-responsive">
                	<table class="table table-hover table-bordered">
                    <tr>
                        <td style="width: 400px;">网站域名</td>
                        <td><?php echo $config['url']; ?></td>
                    </tr>
                    <tr>
                        <td>网站目录</td>
                        <td><?php echo $config['document_root']; ?></td>
                    </tr>
                    <tr>
                        <td>服务器操作系统</td>
                        <td><?php echo $config['server_os']; ?></td>
                    </tr>
                    <tr>
                        <td>服务器端口</td>
                        <td><?php echo $config['server_port']; ?></td>
                    </tr>
                    <tr>
                        <td>服务器IP</td>
                        <td><?php echo $config['server_ip']; ?></td>
                    </tr>
                    <tr>
                        <td>服务器环境</td>
                        <td><?php echo $config['server_soft']; ?></td>
                    </tr>
                    <tr>
                        <td>PHP版本</td>
                        <td><?php echo $config['php_version']; ?></td>
                    </tr>
                    <tr>
                        <td>MySQL版本</td>
                        <td><?php echo $config['mysql_version']; ?></td>
                    </tr>
                    <tr>
                        <td>最大上传限制</td>
                        <td><?php echo $config['max_upload_size']; ?></td>
                    </tr>
                </table>
                </div>
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