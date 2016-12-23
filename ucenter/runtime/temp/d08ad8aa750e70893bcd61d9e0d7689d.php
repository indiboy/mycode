<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\login\index.html";i:1482420939;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>会员登录 </title>
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
		<script type='text/javascript' src='/public/particleground/jquery.particleground.min.js'></script>
		<script src="/public/layui/layui.js"></script>
		<script src="/public/pintuer/pintuer.js"></script>
		<!--[if lt IE 9]>
    <script src="/public/js/html5shiv.min.js"></script>
    <script src="/public/js/respond.min.js"></script>
    <![endif]-->
		<script src="/public/js/header.js"></script>
		<script>
			$(document).ready(function() {
				$('#particles').particleground({
					dotColor: '#5cbdaa',
					lineColor: '#5cbdaa'
				});
			});
		</script>
		<style>
			* {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}
			
			html,
			body {
				width: 100%;
				height: 100%;
				overflow: hidden;
			}
			
			body {
				background: #16a085;
				font-family: 'Montserrat', sans-serif;
				line-height: 1.3;
				-webkit-font-smoothing: antialiased;
			}
			
			#particles {
				width: 100%;
				height: 100%;
				overflow: hidden;
			}
			
			#login {
				position: absolute;
				left: 50%;
				top: 20%;
				padding: 0 20px;
				width: 100%;
				text-align: center;
			}
		</style>
	</head>

	<body>
		<div class="container-layout border-bottom border-mix bg-blue-light padding-big-top padding-big-bottom">
			<div class="line">
				<div class="xs7 xm8 xb9">
					<a href="#">
						<img src="/public/images/admin_logo.png" alt="拼图" />
					</a>
				</div>
				<div class="xs5 xm4 xb3 text-big text-right padding-top">
					返回首页</div>
			</div>
		</div>
		<div id="particles">
			<div id="login" style="max-width: 400px;min-width: 400px;margin: 0 auto;">
				<div class="panel bg-white">
					<div class="panel-head">
						<h3 class="text-big">后台管理系统</h3>
					</div>
					<div class="panel-body">
						
						<form method="post" action="<?php echo url('index/login/login'); ?>">
							<div class="form-group">
								<div class="field">
									<div class="input-group">
				<span class="addon"> 账 号：</span>
				<input type="text" class="input" id="username" name="username" size="30" placeholder="手机/邮箱/账号">
			</div>
			
								</div>
							</div>
							<div class="form-group">
								<div class="field">
									<div class="input-group">
				<span class="addon"> 密 码：</span>
				<input type="password" class="input" id="password" name="password" size="30" placeholder="请输入密码">
			</div>
			
								</div>
							</div>
							<div class="form-group">
								<div class="field">
									<div class="input-group">
				<span class="addon">验 证：</span>
				<input type="text" class="input" id="verify" name="verify" size="30" placeholder="请输入验证码">
				<a href="javascript:;" class="addon" id="show_verify" onclick="show_verify('<?php echo captcha_src(); ?>');">查看</a>
			</div>
			
								</div>
							</div>
							<div class="form-group">
								<div class="field">
									<select name="lifetime" class="input">
										<option value="0">免登陆时间</option>
										<option value="0">不保存</option>
										<option value="3600">一小时 </option>
										<option value="86400">一天 </option>
										<option value="2592000">一个月</option>
										<option value="315360000">永久 </option>
									</select>
								</div>
							</div>
							<div class="form-button">
								<button class="button button-block" type="submit">
											登录</button>
							</div>
							<input type="hidden" name="ecmsfrom" value="" />
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="layout bg-blue-light fixed fixed-bottom">
			<div class="border-top border-mix">
				<div class="text-center padding">
					版权所有 @ 后台管理系统</div>
			</div>
		</div>
		<!--JS引用-->
		<script src="/public/js/layui.js"></script>
		<script src="/public/js/bottom.js"></script>
		<script src="/public/js/usercp.js"></script>
		
		<script>
			layui.config({
				base: '/public/js/'
			}).use('login');
		</script>

	</body>

</html>