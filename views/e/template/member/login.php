<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='会员登录';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;会员登录";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<br>
  <table width="500" border="0" align="center" cellpadding="3" cellspacing="1" class="table table-bordered table-striped">
  <form name="form1" method="post" action="../doaction.php">
    <input class="input input-auto" type=hidden name=ecmsfrom value="<?=ehtmlspecialchars($_GET['from'])?>">
    <input class="input input-auto" type=hidden name=enews value=login>
	<input class="input input-auto" name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
    <tr class="header"> 
      <td height="25" colspan="2"><div align="center">会员登录<?=$tobind?' (绑定账号)':''?></div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="23%" height="25">用户名：</td>
      <td width="77%" height="25"><input class="input input-auto" name="username" type="text" id="username" size="30">
	  	<?php
		if($public_r['regacttype']==1)
		{
		?>
        &nbsp;&nbsp;<a href="../register/regsend.php" target="_blank">帐号未激活？</a>
		<?php
		}
		?>
		</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">密码：</td>
      <td height="25"><input class="input input-auto" name="password" type="password" id="password" size="30">
        &nbsp;&nbsp;<a href="../GetPassword/" target="_blank">忘记密码？</a></td>
    </tr>
	 <tr bgcolor="#FFFFFF">
      <td height="25">保存时间：</td>
      <td height="25">
	  <input class="input input-auto" name=lifetime type=radio value=0 checked>
        不保存
	    <input class="input input-auto" type=radio name=lifetime value=3600>
        一小时 
        <input class="input input-auto" type=radio name=lifetime value=86400>
        一天 
        <input class="input input-auto" type=radio name=lifetime value=2592000>
        一个月
<input class="input input-auto" type=radio name=lifetime value=315360000>
        永久 </td>
    </tr>
    <?php
	if($public_r['loginkey_ok'])
	{
	?>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">验证码：</td>
      <td height="25"><input class="input input-auto" name="key" type="text" id="key" size="6">
        <img src="../../ShowKey/?v=login" name="loginKeyImg" id="loginKeyImg" onclick="loginKeyImg.src='../../ShowKey/?v=login&t='+Math.random()" title="看不清楚,点击刷新"></td>
    </tr>
    <?php
	}	
	?>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"><input class="button" type="submit" name="Submit" value=" 登 录 ">&nbsp;&nbsp;&nbsp; <input class="input input-auto" type="button" name="button" value="马上注册" onclick="parent.location.href='../register/<?=$tobind?'?tobind=1':''?>';"></td>
    </tr>
	</form>
  </table>
<br>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>