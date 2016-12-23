<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='取回密码';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;取回密码";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<br>
<table width="500" border="0" align="center" cellpadding="3" cellspacing="1" class="table table-bordered table-striped">
  <form name="GetPassForm" method="POST" action="../doaction.php">
    <tr class="header"> 
      <td height="25" colspan="2"><div align="center">重设密码</div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="23%" height="25">用户名</td>
      <td width="77%"><?=$username?></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">新密码</td>
      <td><input class="input input-auto" name="newpassword" type="password" id="newpassword" size="38"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">重复新密码</td>
      <td><input class="input input-auto" name="renewpassword" type="password" id="renewpassword" size="38"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp; </td>
      <td> <input class="button" type="submit" name="button" value="修改">
        <input class="input input-auto" name="enews" type="hidden" id="enews" value="DoGetPassword">
        <input class="input input-auto" name="id" type="hidden" id="id" value="<?=$r[id]?>">
        <input class="input input-auto" name="tt" type="hidden" id="tt" value="<?=$r[tt]?>">
        <input class="input input-auto" name="cc" type="hidden" id="cc" value="<?=$r[cc]?>"></td>
    </tr>
  </form>
</table>
<br>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>