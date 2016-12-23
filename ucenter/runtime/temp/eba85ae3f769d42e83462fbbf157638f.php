<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:90:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\menu\index.html";i:1482420937;s:84:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\main.html";i:1482420935;}*/ ?>
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
			
<link href="/public/treetable/jquery.treetable.css" rel="stylesheet" ishttp="text/css" />
<link href="/public/treetable/jquery.treetable.theme.default.css" rel="stylesheet" ishttp="text/css" />
<div class="layout">
	<!--tab标签-->
	<div class="padding border-bottom">
			<div class="button-toolbar">
				<div class="button-group">
            		<a class="button border-green icon-home" href="<?php echo url('index/menu/index'); ?>"> 后台菜单</a>
            		<a class="button border-green icon-plus" href="<?php echo url('index/menu/add'); ?>"> 添加菜单</a>
				</div>
			</div>
		</div>
	<div class="table-responsive">
		<table class="table table-hover table-bordered" id="example-basic">
			<thead>
				<tr>
					<th>菜单名称</th>
                        <th>ID</th>
                        <th>排序</th>
                        <th>控制器方法</th>
                        <th>控制器类型</th>
                        <th>状态</th>
                        <th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($enewsmember_menu_level_list) || $enewsmember_menu_level_list instanceof \think\Collection): if( count($enewsmember_menu_level_list)==0 ) : echo "" ;else: foreach($enewsmember_menu_level_list as $key=>$vo): ?> <?php echo $vo['pid']==0 ? '
				<tr data-tt-id="'.$vo['id'].'">' : '
					<tr data-tt-id="'.$vo['id'].'" data-tt-parent-id="'.$vo['pid'].'">'; ?>

						<td><?php echo $vo['title']; ?></td>
						<td><?php echo $vo['id']; ?></td>
						<td><?php echo $vo['sort']; ?></td>
						<td><?php echo $vo['name']; ?></td>
						<td><?php echo $vo['ishttp']==0 ? '控制器' : '外链'; ?></td>
						<td><?php echo $vo['status']==1 ? '显示' : '隐藏'; ?></td>
						<td>
							<a href="<?php echo url('index/menu/add',['pid'=>$vo['id']]); ?>" class="layui-btn layui-btn-mini">添加子栏目</a>
							<a href="<?php echo url('index/menu/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-normal layui-btn-mini">编辑</a>
							<a href="<?php echo url('index/menu/delete',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini ajax-delete">删除</a>
						</td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
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