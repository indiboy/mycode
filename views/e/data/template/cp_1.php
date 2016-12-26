<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?=defined('empirecms')?$public_diyr[pagetitle]:'用户控制面板'?> - 官方网站,郑州妈妈首选育儿、情感、生活等交流互动平台</title>
		<meta name="keywords" content="<?=defined('empirecms')?$public_diyr[pagetitle]:'用户控制面板'?>" />
		<meta name="description" content="<?=defined('empirecms')?$public_diyr[pagetitle]:'用户控制面板'?>" />
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
</head>

<body>
	<div class="dhui-layout dhui-layout-admin">
			<div class="tpl-header header header-demo">
				<div class="float-left tpl-header-logo">
					<a href="javascript:;"><img src="/public/images/usercp_logo.png" alt=""></a>
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
							
<?php
		  $lguserid=intval(getcvar('mluserid'));//登陆用户ID
		  $lgusername=RepPostVar(getcvar('mlusername'));//登陆用户
		  $lggroupid=intval(getcvar('mlgroupid'));//会员组ID
		  if($lggroupid)	//登陆会员显示菜单
		  {
		  ?>
	<ul class="nav nav-inline nav-menu nav-big">
								<li class="active">
									<a href="<?=$public_r['newsurl'] ?>">网站首页</a>
								</li>
								<li>
									<a href="<?=$public_r['newsurl'] ?>e/member/cp/">会员中心</a>
								</li>
								<li>
									<a href="<?=$public_r['newsurl'] ?>e/member/list/">会员列表</a>
								</li>
								<li>
									<a href="<?=$public_r['newsurl'] ?>e/space/?userid=<?=$tmgetuserid ?>">我的空间</a>
								</li>
								<li>
									<a href="<?=$public_r['newsurl'] ?>e/member/msg/">站内消息</a>
								</li>
								<li>
									<a href="<?=$public_r['newsurl'] ?>e/member/fava/">收藏夹</a>
								</li>

							</ul>
							<ul class="nav nav-inline nav-big nav-menu navbar-right">
					<script>document.write('<script src="/views/e/member/login/loginjs.php?t=' + Math.random() + '"><' + '/script>');</script>
				</ul>
	<?php
	}
	else	//游客
	{
	?>
	<ul class="nav nav-inline nav-menu nav-big">
								<li class="active">
									<a href="<?=$public_r['newsurl'] ?>">网站首页</a>
								</li>
								<li>
									<a href="<?=$public_r['newsurl'] ?>e/member/cp/">会员中心</a>
								</li>
								<li>
									<a href="<?=$public_r['newsurl'] ?>e/member/list/">会员列表</a>
								</li>
							</ul>
							<ul class="nav nav-inline nav-big nav-menu navbar-right">
					<script>document.write('<script src="/views/e/member/login/loginjs.php?t=' + Math.random() + '"><' + '/script>');</script>
				</ul>

			
	<?php
	}
	?>
							
						</div>
					</div>
				</div>
			</div>
			<div class="tpl-side left-sidebar layui-side layui-bg-black side-demo">
				<div class="layui-side-scroll">
					<ul class="layui-nav layui-nav-tree site-demo-nav">
<?php
		  $lguserid=intval(getcvar('mluserid'));//登陆用户ID
		  $lgusername=RepPostVar(getcvar('mlusername'));//登陆用户
		  $lggroupid=intval(getcvar('mlgroupid'));//会员组ID
		  if($lggroupid)	//登陆会员显示菜单
		  {
		  ?>
      <li id="domenumember" class="layui-nav-item layui-nav-itemed">
        <a href="javascript:;">帐号</a>
          <dl class="layui-nav-child">
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/EditInfo/">修改资料</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/EditInfo/EditSafeInfo.php">修改安全信息</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/my/">帐号状态</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/fava/">收藏夹</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/friend/">好友列表</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/memberconnect/ListBind.php">绑定外部登录</a></dd>
          </dl>
      </li>
      <li id="domenumsg" class="layui-nav-item">
        <a href="javascript:;">站内消息</a>
          <dl class="layui-nav-child">
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/msg/AddMsg/?enews=AddMsg">发送消息</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/msg/">消息列表</a></dd>
          </dl>
      </li>
      <li id="domenuinfo" class="layui-nav-item">
        <a href="javascript:;">投稿</a>
          <dl class="layui-nav-child">
			<?php
			//输出可管理的模型
			$tmodsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
			while($tmodr=$empire->fetch($tmodsql))
			{
				$fontb="";
				$fontb1="";
				if($tmodr['mid']==$tgetmid)
				{
					$fontb="<b>";
					$fontb1="</b>";
				}
			?>
                <dd><a href="<?=$public_r['newsurl'] ?>e/DoInfo/ListInfo.php?mid=<?=$tmodr['mid'] ?>"><?=$fontb ?>管理<?=$tmodr[qmname] ?><?=$fontb1 ?></a></dd>
			<?php
			}
			?>
          </dl>        
      </li>     
      <li id="domenuspace" class="layui-nav-item">
        <a href="javascript:;">会员空间</a>
          <dl class="layui-nav-child">
                <dd><a href="<?=$public_r['newsurl'] ?>e/space/?userid=<?=$tmgetuserid ?>">预览空间</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/mspace/SetSpace.php">设置空间</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/mspace/ChangeStyle.php">选择模板</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/mspace/gbook.php">管理留言</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/mspace/feedback.php">管理反馈</a></dd>
          </dl>
      </li>
      <li id="domenupay" class="layui-nav-item">
         <a href="javascript:;">财务</a>
          <dl class="layui-nav-child">
                <dd><a href="<?=$public_r['newsurl'] ?>e/payapi/">在线支付</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/buygroup/">在线充值</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/card/">点卡充值</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/buybak/">点卡充值记录</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/member/downbak/">下载消费记录</a></dd>
          </dl>
      </li>
      <li id="domenushop" class="layui-nav-item">
        <a href="javascript:;">商城</a>
          <dl class="layui-nav-child">
                <dd><a href="<?=$public_r['newsurl'] ?>e/ShopSys/ListDd/">我的订单</a></dd>
                <dd><a href="#ecms" onclick="window.open('<?=$public_r['newsurl'] ?>e/ShopSys/buycar/','','width=680,height=500,scrollbars=yes,resizable=yes');">我的购物车</a></dd>
                <dd><a href="<?=$public_r['newsurl'] ?>e/ShopSys/address/ListAddress.php">管理配送地址</a></dd>
          </dl>
      </li>
      <li id="domenuloginout" class="layui-nav-item">
	  <a href="<?=$public_r['newsurl'] ?>e/member/doaction.php?enews=exit" onclick="return confirm('确认要退出?');">退出</a></li>
	<?php
	}
	else	//游客
	{
	?>
	<li id="domenumember" class="layui-nav-item layui-nav-itemed">
	<a href="javascript:;">帐号</a>
		<dl class="layui-nav-child">
				<dd><a href="<?=$public_r['newsurl'] ?>e/member/login/">会员登录</a></dd>
				<dd><a href="<?=$public_r['newsurl'] ?>e/member/register/">注册帐号</a></dd>
		</dl>
	</li>
	<li id="domenuinfo" class="layui-nav-item">
	<a href="javascript:;">投稿</a>
		<dl class="layui-nav-child">
		<?php
		//输出可管理的模型
		$tmodsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
		while($tmodr=$empire->fetch($tmodsql))
		{
			$fontb="";
			$fontb1="";
			if($tmodr['mid']==$tgetmid)
			{
				$fontb="<b>";
				$fontb1="</b>";
			}
		?>
			<dd><a href="<?=$public_r['newsurl'] ?>e/DoInfo/ChangeClass.php?mid=<?=$tmodr['mid'] ?>"><?=$fontb ?>发布<?=$tmodr[qmname] ?><?=$fontb1 ?></a></dd>
		<?php
		}
		?>
		</dl>
	</li>
	<li id="domenushop" class="layui-nav-item">
	 <a href="javascript:;">商城</a>
	 <dl class="layui-nav-child">
			<dd><a href="<?=$public_r['newsurl'] ?>e/ShopSys/buycar/">我的购物车</a></dd>
			</dl>
	</li>
	<?php
	}
	?>

						<li class="layui-nav-item" style="height: 30px; text-align: center"></li>
					</ul>

				</div>
			</div>
			<div class="tpl-content-wrapper  content-demo">
				<div class="view-body margin">
<ul class="bread bg">现在的位置：<?=$url?></ul>
