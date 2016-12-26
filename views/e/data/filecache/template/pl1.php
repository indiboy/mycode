<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?=$pagetitle?> 信息评论 - 官方网站,郑州妈妈首选育儿、情感、生活等交流互动平台</title>
		<meta name="keywords" content="<?=$pagetitle?> 信息评论" />
		<meta name="description" content="<?=$pagetitle?> 信息评论" />
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
<div class="line-big">
<div class="xs12 xm12 xb12">
<div class="panel bg-white margin-bottom">
  <div class="panel-head"><h2 class="text-big">评论：<a href="<?=$titleurl?>" target="_blank"><?=$title?></a> <small><a href="#tosaypl"><strong><font color="#FF0000">我也评两句</font></strong></a></small></h2></div>
  <div class="panel-body">
<form class="form-inline" action="../enews/index.php" method="post" name="infopfenform">
    <input type="hidden" name="enews" value="AddInfoPfen" />
    <input type="hidden" name="classid" value="<?=$classid?>" />
    <input type="hidden" name="id" value="<?=$id?>" />
<div class="form-group">
    <div class="field text-center">
<div class="button-group radio">
  <label class="button"><input name="fen" value="1" type="radio">1分</label>
  <label class="button"><input name="fen" value="2" type="radio">2分</label>
  <label class="button active"><input name="fen" value="3" type="radio" checked="checked">3分</label>
  <label class="button"><input name="fen" value="4" type="radio">4分</label>
  <label class="button"><input name="fen" value="5" type="radio">5分</label>
</div>
</div>
</div>
<div class="form-group">
<div class="form-button"><button class="button button-block" type="submit">提交</button></div>
</div>
<div class="form-button"><button class="button button-block" type="submit">平均得分:<strong><span id="pfendiv"><?=$pinfopfen?></span></strong> 分，共有 <strong><?=$infopfennum?></strong>人参与评论！</button></div>
 </div>
</form>
</div>
</div>
<div class="xs12 xm12 xb12">
<div class="panel bg-white margin-bottom">
  <div class="panel-head">网友评论</div>
  <div class="panel-body">

<?php
while($r=$empire->fetch($sql))
{
	$plusername=$r[username];
	if(empty($r[username]))
	{
		$plusername=$fun_r['nomember'];
	}
	if($r[userid])
	{
		$plusername="<a href='$public_r[newsurl]e/space/?userid=$r[userid]' target='_blank'>$r[username]</a>";
	}
	$saytime=date('Y-m-d H:i:s',$r['saytime']);
	//ip
	$sayip=ToReturnXhIp($r[sayip]);
	$saytext=RepPltextFace(stripSlashes($r['saytext']));//替换表情
	$includelink=" onclick=\"javascript:document.saypl.repid.value='".$r[plid]."';document.saypl.saytext.focus();\"";
?>
 
<div class="panel margin-bottom">
  <div class="panel-body">
<div class="media media-x">
  <a class="float-left" href="/views/e/space/?userid=<?=$r[userid]?>">
    <img src="<?=$addr[userpic]?>" class="img-border radius-circle" width="50" height="50" alt="访问<?=$addr[truename]?> 的空间">
  </a>
  <div class="media-body">
<blockquote class="padding">
<h4 class="margin-small-bottom"><small>本站网友</small> <?=$addr[truename]?> <small>发表于 <?=$saytime?>  <a href="JavaScript:makeRequest('/e/pl/doaction.php?enews=DoForPl&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=1&doajax=1&ajaxarea=zcpldiv<?=$r[plid]?>','EchoReturnedText','GET','');"> <span class="icon-thumbs-o-up text-main"></span> 支持 (<span id="zcpldiv<?=$r[plid]?>"><?=$r[zcnum]?></span>)</a> <a href="JavaScript:makeRequest('/e/pl/doaction.php?enews=DoForPl&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=0&doajax=1&ajaxarea=fdpldiv<?=$r[plid]?>','EchoReturnedText','GET','');"> <span class="icon-thumbs-o-down text-dot"></span> 反对 (<span id="fdpldiv<?=$r[plid]?>"><?=$r[fdnum]?></span>)</a>  <a href="/views/e/pl/?classid=<?=$r[classid]?>&id=<?=$r[id]?>&plid=<?=$r[plid]?>" target="_blank"> <span class="icon-comments text-main"></span> (去盖楼)</a>  <a href="javascript:;"  onclick="javascript:document.saypl.repid.value='<?=$r[plid]?>';document.saypl.saytext.focus();"> <span class="icon-reply text-sub"></span> (回复)</a> </small> </h4>
<?=$saytext?>
</blockquote>
    </div>
</div> </div>
</div>
  
<?
}
?>
 
 </div>
<div class="panel-foot">
<ul class="pagination pagination-group pagination-small">
<?php
$plid=(int)$_GET['plid'];
$listpage="<?=$listpage?>";
$listpage=str_replace("?>", "", $listpage);
$listpage=str_replace("<?=", "", $listpage);
if(empty($plid))
	{

	echo	$listpage;
	}
	else{
	echo	"<li><a href=\"#tosaypl\">欢迎参与盖楼！</a></li>";
	}
?>
</ul>
</div>
</div>
</div>

<div class="xs12 xm12 xb12">
<div class="panel bg-white margin-bottom">
  <div class="panel-head"><strong>发表评论</strong> <span class="float-right"><a href="/views/e/pl/?classid=<?=$classid?>&amp;id=<?=$id?>">共有<span><script type="text/javascript" src="/views/e/public/ViewClick/?classid=<?=$classid?>&id=<?=$id?>&down=2"></script></span>条评论</a></span></div>
  <div class="panel-body" id="tosaypl"><form action="/views/e/pl/doaction.php" method="post" name="saypl" class="form-x" id="saypl">
  <div class="form-group">
    <div class="label"><label for="saytext">评论内容</label></div>
    <div class="field">
      <textarea name="saytext" class="input" rows="3" cols="50" placeholder="请输入评论内容" id="saytext"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="label"><label for="saytext">验证码</label></div>
    <div class="field">
<div class="input-group">
      <input name="key" type="text" class="input" size="30" />
<span class="addon"><img src="/views/e/ShowKey/?v=pl" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/views/e/ShowKey/?v=pl&t='+Math.random()" title="看不清楚,点击刷新" /></span>
</div>
    </div>
  </div>

  <div class="form-button"><div class="form-inline">
  <div class="form-group"><button class="button button-block" type="submit">提交评论</button></div>
<script src="/views/e/extend/loginjs/"></script>
</div>
</div>
<input type="hidden" class="input" id="password" name="password" size="30" placeholder="请输入密码">
<input name="nomember" type="hidden" id="nomember" value="1" checked="checked" />
<input name="guestpic" type="hidden" id="guestpic" />
<input name="id" type="hidden" id="id" value="<?=$id?>" />
<input name="classid" type="hidden" id="classid" value="<?=$classid?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="<?=(int)$_GET['plid'];?>" />
<input type="hidden" name="ecmsfrom" value="/views/e/pl/?classid=<?=$classid?>&id=<?=$id?>">
</form>
<script>
$(function(){
  $('#nickname').on('click', function(){
    nickname();
  });
  });
 </script></div>
</div>
</div>

</div>
</div>
<br />
<div class="layout copyright text-center padding-big text-small">版权所有 不知何网</div>
<script src="/public/js/layui.js"></script>
<script src="/public/js/bottom.js"></script>
</body>
</html>