<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//分类id
$bid=(int)$_GET['bid'];
$gbr=$empire->fetch1("select bid,bname,groupid from {$dbtbpre}enewsgbookclass where bid='$bid'");
if(empty($gbr['bid']))
{
	printerror("EmptyGbook","",1);
}
//权限
if($gbr['groupid'])
{
	include("../../member/class/user.php");
	$user=islogin();
	include("../../data/dbcache/MemberLevel.php");
	if($level_r[$gbr[groupid]][level]>$level_r[$user[groupid]][level])
	{
		echo"<script>alert('您的会员级别不足(".$level_r[$gbr[groupid]][groupname].")，没有权限提交信息!');history.go(-1);</script>";
		exit();
	}
}
esetcookie("gbookbid",$bid,0);
$bname=$gbr['bname'];
$search="&bid=$bid";
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=$public_r['gb_num'];//每页显示条数
$page_line=10;//每页显示链接数
$offset=$start+$page*$line;//总偏移量
$totalnum=(int)$_GET['totalnum'];
if($totalnum>0)
{
	$num=$totalnum;
}
else
{
	$totalquery="select count(*) as total from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
	$num=$empire->gettotal($totalquery);//取得总条数
}
$search.="&totalnum=$num";
$query="select lyid,name,email,`mycall`,lytime,lytext,retext from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
$query=$query." order by lyid desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['saygbook'];
?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?=$bname?> - 官方网站,郑州妈妈首选育儿、情感、生活等交流互动平台</title>
		<meta name="keywords" content="<?=$bname?>" />
		<meta name="description" content="<?=$bname?>" />
		<meta name="renderer" content="webkit" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/public/pintuer/pintuer.css">
		<link rel="stylesheet" href="/public/layui/css/layui.css">
		<link rel="stylesheet" href="/public/css/css.css">
		<script src="/public/pintuer/jquery.js"></script>
		<script src="/public/layui/lay/dest/layui.all.js"></script>
		<script src="/public/pintuer/pintuer.js"></script>
		<script src="/public/js/ajax.js"></script>
		<!--[if lt IE 9]>
		<script src="/public/js/respond.min.js"></script>
		<script src="/public/js/html5shiv.min.js"></script>
		<![endif]-->
		<script src="/public/js/header.js"></script>
	</head>

	<body>
		<div class="layout navbar navbar-big bg-red bg-inverse doc-header">
	<div class="container">
		<div class="line">
			<div class="xs3 xm3 xb2">
				<div class="navbar-head">
					<button class="button bg icon-navicon" data-target="#navbar-big2">
										</button>
					<a href="/">
						<img src="/public/images/logo.png" alt="大河妈妈网" class="logo" />
					</a>
				</div>

			</div>
			<div class="xl12 xs9 xm9 xb10">
				<div class="navbar-body nav-navicon" id="navbar-big2">
					<ul class="nav nav-inline nav-menu nav-big text-right">
															<li class="">
								<a href="/reads/" class="">
									阅读								</a>
							</li>
																		<li class="">
								<a href="/meiwen/" class="">
									美文								</a>
							</li>
																		<li class="">
								<a href="/cartoon/" class="">
									动画								</a>
							</li>
																		<li class="">
								<a href="/television/" class="">
									影视								</a>
							</li>
																		<li class="">
								<a href="/photo/" class="">
									图片								</a>
							</li>
																		<li class="">
								<a href="/download/" class="">
									下载								</a>
							</li>
																		<li class="">
								<a href="/taobao/" class="">
									淘宝								</a>
							</li>
																		<li class="">
								<a href="/shop/" class="">
									商城								</a>
							</li>
												</ul>
				</div>
				<ul class="nav nav-inline nav-big nav-menu navbar-right">
					<script>
						document.write('<script src="/views/e/member/login/loginjs.php?t=' + Math.random() + '"><' + '/script>');
					</script>
				</ul>
			</div>
		</div>
	</div>
</div>
<br />
		<div class="container">
			<div class="line">
				<div class="x12">
					<ul class="bread bg">
						现在的位置：
						<a href=../../../>
						首页</a>&nbsp;>&nbsp;<?=$bname?>
					</ul>
					
<?
while($r=$empire->fetch($sql))
{
	$r['retext']=nl2br($r[retext]);
	$r['lytext']=nl2br($r[lytext]);
?>

					<div class="panel margin-bottom">
						<div class="panel-head">
							<h3 class="text-big"><small>发布者: </small> <?=$r[name]?> <small>发布于 <?=$r[lytime]?></small></h3>
						</div>
						<div class="panel-body">
							<div>
								<?=$r[lytext]?>
							</div>
							
<?
if($r[retext])
{
?>

							<div class="panel margin-top">
								<div class="panel-body">
									<span class="text-red">管理员回复：</span><?=$r[retext]?>
								</div>
							</div>
							
<?
}
?>
						</div>
					</div>
					
<?
}
?>

					<ul class="pagination pagination-group">
						<?=$listpage?>
					</ul>
					<form action="../../enews/index.php" method="post" name="form1" id="form1">
						<table  class="table table-bordered table-striped">
							<tr class="header">
								<td colspan="2"><h3 class="text-big">请您留言:</h3></td>
							</tr>
							<tr bgcolor="#FFFFFF">
								<td width="200">姓名:</td>
								<td>
									<input name="name" class="input" type="text" id="name" />
								</td>
							</tr>
							<tr bgcolor="#FFFFFF">
								<td>联系邮箱:</td>
								<td>
									<input name="email" type="text" class="input" id="email" />
								</td>
							</tr>
							<tr bgcolor="#FFFFFF">
								<td>联系电话:</td>
								<td>
									<input name="mycall" type="text" class="input" id="mycall" />
								</td>
							</tr>
							<tr bgcolor="#FFFFFF">
								<td>留言内容(*):</td>
								<td>									<textarea name="lytext" cols="60" class="input" rows="12" id="lytext"></textarea></td>
							</tr>
							<tr bgcolor="#FFFFFF">
								<td>&nbsp;</td>
								<td>
									<input type="submit" class="button border-dot" name="Submit3" value="提交" />
									<input type="reset" name="Submit22" class="button border-dot" value="重置" />
									<input name="enews" type="hidden" id="enews" value="AddGbook" />
								</td>
							</tr>
						</table>
					</form></td>
					</tr>
					</table>
				</div>
			</div>
		</div>
		<br />
<div class="layout copyright text-center padding-big text-small">版权所有 不知何网</div>
		<script src="/public/js/layui.js"></script>
		<script src="/public/js/bottom.js"></script>
	</body>

</html>
<?php
db_close();
$empire=null;
?>