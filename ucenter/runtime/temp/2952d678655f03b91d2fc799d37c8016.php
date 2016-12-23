<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\index\index.html";i:1482420938;s:84:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\base.html";i:1482424686;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>用户中心</title>
		<meta name="keywords" content="用户中心" />
		<meta name="description" content="用户中心" />
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
		<div class="dhui-layout dhui-layout-admin">
			<div class="tpl-header header header-demo">
				<div class="float-left tpl-header-logo">
					<a href="javascript:;"><img src="/public/images/admin_logo.png" alt=""></a>
				</div>
				<div class="tpl-header-fluid bg-red">
					<div class="navbar navbar-big bg-red bg-inverse">
						<div class="navbar-head">
							<button class="button bg icon-navicon" data-target="#navbar-big2">
										</button>
							<a href="#" class="tpl-header-switch-button">
								<img src="/public/images/switch.png" alt="">
							</a>
						</div>
						<div class="navbar-body nav-navicon" id="navbar-big2">

							<ul class="nav nav-inline nav-menu nav-big">
								<?php if(is_array($nav) || $nav instanceof \think\Collection): if( count($nav)==0 ) : echo "" ;else: foreach($nav as $key=>$v): ?>
								<li>
									<a href="<?php echo $v['link']; ?>" class="<?php echo $v['icon']; ?>" target="<?php echo $v['target']; ?>"> <?php echo $v['name']; ?></a>
								</li>
							    <?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
							<ul class="nav nav-inline nav-big nav-menu navbar-right">
								<li>
									<a class="bg-main" href="javascript:;">
										<spn><img src="<?php echo !empty($userinfo['userpic'])?$userinfo['userpic']: '/views/e/data/images/nouserpic.gif'; ?>" width="28" class="radius-circle"></spn> <?php echo session('enewsmember_username'); ?> <span class="downward"></span> </a>
									<ul class="drop-menu">
										<li>
											<a href="<?php echo url('index/login/logout'); ?>">退出</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="tpl-side left-sidebar layui-side layui-bg-black side-demo">
				<div class="layui-side-scroll">
					<ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="sidebars" id="nav-tree">
						<li class="layui-nav-item layui-nav-title">
							<a>管理菜单</a>
						</li>
						<li class="layui-nav-item">
							<a id="go-dashboard" href="<?php echo url('index/index/index'); ?>"><i class="fa fa-home"></i> 会员首页</a>
						</li>
						<li class="layui-nav-item">
							<a href="javascript:;" data-url="<?php echo url('index/system/clear'); ?>" id="clear-cache"><i class="fa fa-trash-o"></i> 清除缓存</a>
						</li>
						<?php if(is_array($menu) || $menu instanceof \think\Collection): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$vo): if(isset($vo['children'])): ?>
						<li class="layui-nav-item">
							<a href="javascript:;"><i class="<?php echo $vo['icon']; ?>"></i> <?php echo $vo['title']; ?></a>
							<?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection): if( count($vo['children'])==0 ) : echo "" ;else: foreach($vo['children'] as $key=>$v): ?>
							<dl class="layui-nav-child">
								<dd>
									<?php if(($v['ishttp']==0)): ?>
									<a class="tab-open" href="javascript:;" data-url="<?php echo url($v['name']); ?>" data-name="<?php echo $v['title']; ?>"> <?php echo $v['title']; ?></a>
									<?php else: ?>
									<a class="tab-open" href="javascript:;" data-url="<?php echo $v['name']; ?>" data-name="<?php echo $v['title']; ?>"> <?php echo $v['title']; ?></a>
									<?php endif; ?>
								</dd>
							</dl>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</li>
						<?php else: ?>
						<li class="layui-nav-item">
							<?php if(($v['ishttp']==1)): ?>
							<a href="<?php echo url($vo['name']); ?>"><i class="<?php echo $vo['icon']; ?>"></i> <?php echo $vo['title']; ?></a>
							<?php else: ?>
							<a href="<?php echo $vo['name']; ?>"><i class="<?php echo $vo['icon']; ?>"></i> <?php echo $vo['title']; ?></a>
							<?php endif; ?>			
						</li>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						<li class="layui-nav-item" style="height: 30px; text-align: center"></li>
					</ul>
				</div>
			</div>
			<div class="tpl-content-wrapper content-demo">
				<div class="view-body margin">
					<div class="layui-tab layui-tab-card page-tab" lay-filter="page-tab" id="page-content">
                <ul class="layui-tab-title">
                    <li class="layui-this">控制台</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <iframe class="tab-main" src="<?php echo url('index/index/main'); ?>"></iframe>
                    </div>
                </div>
            </div>
				</div>
				<div class="tpl-footer footer footer-demo">
					<div class="padding">
						<p>
							2016 &copy;
							<a href="/">
								后台管理系统
							</a>
						</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!--JS引用-->
			<script src="/public/js/layui.js"></script>
			<script src="/public/js/bottom.js"></script>
			<script src="/public/js/usercp.js"></script>
			
			<script>
				var GV = {
					current_controller: "admin/<?php echo $controller; ?>"
				};

				layui.config({
					base: '/public/js/'
				}).use('admin');
			</script>
			
	</body>

</html>