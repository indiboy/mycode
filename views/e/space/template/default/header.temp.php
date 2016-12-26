<?php
if (!defined('InEmpireCMS')) {
	exit();
}
//公告
$spacegg = '';
if ($addur['spacegg']) {
	$spacegg = '<div class="panel margin-bottom">
	<div class="panel-head">
	<h3 class="text-big">公告</h3>
    </div>
	<div class="panel-body">' . $addur['spacegg'] . '</div>
</div>';
}
//导航菜单
$dhmenu = '';
$modsql = $empire -> query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
while ($modr = $empire -> fetch($modsql)) {
	$dhmenu .= "<li><a href=\"list.php?userid=$userid&mid=$modr[mid]\">" . $modr[qmname] . "</a> </li>";
}
?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?=$spacename ?> - 官方网站,郑州妈妈首选育儿、情感、生活等交流互动平台</title>
		<meta content="<?=$spacename ?>" name="keywords" />
		<meta content="<?=$spacename ?>" name="description" />
		<meta name="renderer" content="webkit" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/public/pintuer/pintuer.css">
		<link rel="stylesheet" href="/public/layui/css/layui.css">
		<link rel="stylesheet" href="/public/css/css.css">
		<link rel="stylesheet" href="/public/css/usercp.css">
		<script src="/public/pintuer/jquery.js"></script>
		<script src="/public/layui/lay/dest/layui.all.js"></script>
		<script src="/public/pintuer/pintuer.js"></script>
		<!--[if lt IE 9]>
		<script src="/public/js/respond.min.js"></script>
		<script src="/public/js/html5shiv.min.js"></script>
		<![endif]-->
		<script src="/public/js/header.js"></script>
	</head>

	<body>
			<div class="container">
				<div class="line">
					<div class="x12" style="background: url(<?=$covers ?>) top center no-repeat;">
				<div class="clearfix"></div>
				<div class="media margin-large media-y">
	<a href="#" class="badge-corner">
		<img src="<?=$userpic ?>" class="radius-circle img-border" width="120" height="120" />
		<span class="badge bg-red"><?=$level_r[$groupid][groupname]?></span>
	</a>
	<div class="media-body">
		<h2 class="text-large"><?=$truename ?></h2>
	</div>
</div>
			</div>
			</div>
			</div>
			<div class="container">
				<div class="navbar navbar-big bg-red bg-inverse radius-none">
					<div class="navbar-head">
						<button class="button bg icon-navicon" data-target="#navbar-big2">
										</button>
						<a href="index.php?userid=<?=$userid ?>">
							<img class="logo" src="/public/images/logo-white.png">
						</a>
					</div>
					<div class="navbar-body nav-navicon" id="navbar-big2">
						<ul class="nav nav-inline nav-menu nav-big">
							<li>
								<a href="index.php?userid=<?=$userid ?>">空间首页</a>
							</li>
							<?=$dhmenu ?>
								<li>
									<a href="UserInfo.php?userid=<?=$userid ?>">个人资料</a>
								</li>
								<li>
									<a href="gbook.php?userid=<?=$userid ?>">留言板</a>
								</li>
						</ul>
						<div class="navbar-text navbar-right hidden-s">
							<button type="button" class="button bg-white">
												按钮</button>
						</div>
					</div>
				</div>
				<ul class="bread bg radius-none">您现在的位置：
					<?=$url ?>
				</ul>
			</div>

			<div class="container">
				<div class="line-big">
					<div class="xl12 xs12 xm6 xb4">
						<div class="panel margin-bottom">
							<div class="panel-head">
								<h3 class="text-big">管理面板</h3></div>
								<div class="panel-body">
							<table class="table table-bordered text-center table-striped">
								<tr>
									<td>
										<a href="../member/friend/add/?fname=<?=$username ?>" target="_blank">加为好友</a>
									</td>
									<td>
										<a href="../member/msg/AddMsg/?username=<?=$username ?>" target="_blank">发短消息</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="UserInfo.php?userid=<?=$userid ?>">用户资料</a>
									</td>
									<td>
										<a href="../member/cp">管理面板</a>
									</td>
								</tr>
							</table>
							</div>
						</div>
						<div class="panel margin-bottom">
							<div class="panel-body text-big">
								访问统计：<?=$addur[viewstats] ?>
							</div>
						</div>

					</div>
					<div class="xl12 xs12 xm6 xb8">