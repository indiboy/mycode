<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:97:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\enewsmember\index.html";i:1482427492;s:84:"D:\UPUPW_AP5.6\vhosts\api.hzh.com\ucenter\public/../application/index\view\main.html";i:1482420935;}*/ ?>
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
				</div>
			</div>
		</div>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">

                <form class="layui-form layui-form-pane" action="<?php echo url('index/enewsmember/index'); ?>" method="get">
                    <div class="layui-inline">
                        <label class="layui-form-label">关键词</label>
                        <div class="layui-input-inline">
                            <input type="text" name="keyboard" value="<?php echo $keyboard; ?>" placeholder="请输入关键词" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-inline">
                        <button class="layui-btn">搜索</button>
                    </div>
                </form>
                <hr>

                <table class="layui-table">
                    <thead>
                    <tr>
                        <th style="width: 30px;">ID</th>
                        <th>用户名</th>
                        <th>手机</th>
                        <th>邮箱</th>
                        <th>状态</th>
                        <th>创建时间</th>
                        <th>最后登录时间</th>
                        <th>最后登录IP</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($enewsmember_list) || $enewsmember_list instanceof \think\Collection): if( count($enewsmember_list)==0 ) : echo "" ;else: foreach($enewsmember_list as $key=>$vo): ?>
                    <tr>
                        <td><?php echo $vo['userid']; ?></td>
                        <td><?php echo $vo['username']; ?></td>
                        <td><?php echo $vo['phone']; ?></td>
                        <td><?php echo $vo['email']; ?></td>
                        <td><?php echo $vo['checked']==1 ? '<span class="layui-btn layui-btn-mini layui-btn-normal">启用</span>' : '<span class="layui-btn layui-btn-mini layui-btn-danger">禁用</span>'; ?></td>
                        <td><?php echo date("Y-m-d H:i:s",$vo['registertime']); ?></td>
                        <td><?php echo date("Y-m-d H:i:s",$vo['lasttime']); ?></td>
                        <td><?php echo $vo['lastip']; ?>:<?php echo $vo['lastipport']; ?></td>
                        <td>
                            <a href="<?php echo url('index/enewsmember/edit',['userid'=>$vo['userid']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini">禁止用户</a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <!--分页-->
                <?php echo $enewsmember_list->render(); ?>
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