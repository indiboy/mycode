<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:94:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\auth_nav\index.html";i:1482420936;s:84:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\main.html";i:1482420935;}*/ ?>
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
			
<link href="/public/treetable/jquery.treetable.css" rel="stylesheet" type="text/css" />
<link href="/public/treetable/jquery.treetable.theme.default.css" rel="stylesheet" type="text/css" />
<div class="layout">
	<!--tab标签-->
	<div class="layui-tab layui-tab-brief">
		<div class="padding border-bottom">
			<div class="button-toolbar">
				<div class="button-group">
					<button type="button" class="button border-green icon-home" disabled="disabled"> 导航管理</button>
					<a class="button border-green icon-plus" href="<?php echo url('index/auth_nav/add'); ?>"> 添加导航</a>
				</div>
			</div>
		</div>
		<div class="layui-tab-content">
			<div class="layui-tab-item layui-show">
				<div class="table-responsive">
					<table class="table table-hover table-bordered" id="example-basic">
						<thead>
							<tr>
								<th>栏目名称</th>
								<th>ID</th>
								<th>排序</th>
								<th>链接</th>
								<th>访问</th>
								<th>栏目管理</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($nav_level_list) || $nav_level_list instanceof \think\Collection): if( count($nav_level_list)==0 ) : echo "" ;else: foreach($nav_level_list as $key=>$vo): ?> <?php echo $vo['pid']==0 ? '
							<tr data-tt-id="'.$vo['id'].'">' : '
								<tr data-tt-id="'.$vo['id'].'" data-tt-parent-id="'.$vo['pid'].'">'; ?>

									<td><?php echo $vo['name']; ?></td>
									<td><?php echo $vo['id']; ?></td>
									<td><?php echo $vo['sort']; ?></td>
									<td><?php echo $vo['target']; ?></td>
									<td><?php echo $vo['status']; ?></td>
									<td>
										<a href="<?php echo url('index/auth_nav/add',['pid'=>$vo['id']]); ?>" class="layui-btn layui-btn-mini">添加子栏目</a>
										<a href="<?php echo url('index/auth_nav/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-normal layui-btn-mini">编辑</a>
										<a href="<?php echo url('index/auth_nav/delete',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini ajax-delete">删除</a>
									</td>
								</tr>
								<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>
<script src="/public/treetable/jquery.treetable.js"></script>
<script>
	$("#example-basic").treetable({
		expandable: true
	});
</script>

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