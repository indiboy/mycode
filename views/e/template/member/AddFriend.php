<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']=$word;
$url="<a href=../../../../>首页</a>&nbsp;>&nbsp;<a href=../../cp/>会员中心</a>&nbsp;>&nbsp;<a href=../../friend/?cid=".$fcid.">好友列表</a>&nbsp;>&nbsp;".$word;
require(ECMS_PATH.'e/template/incfile/header.php');
?> 
        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="table table-bordered table-striped">
          <form name="form1" method="post" action="../../doaction.php">
            <tr class="header"> 
              <td height="25" colspan="2"><?=$word?></td>
            </tr>
            <tr> 
              <td width="17%" height="25" bgcolor="#FFFFFF">用户名: </td>
              <td width="83%" bgcolor="#FFFFFF"><input class="input input-auto" name="fname" type="text" id="fname" value="<?=$fname?>">
                (*)</td>
            </tr>
            <tr> 
              <td height="25" bgcolor="#FFFFFF">所属分类：</td>
              <td bgcolor="#FFFFFF"><select class="input input-auto" name="cid">
                  <option value="0">不设置</option>
                  <?=$select?>
                </select>
                [<a href="../FriendClass/" target="_blank">管理分类</a>]</td>
            </tr>
            <tr> 
              <td height="25" bgcolor="#FFFFFF">备注：</td>
              <td bgcolor="#FFFFFF"><input class="input input-auto" name="fsay" type="text" id="fname3" value="<?=stripSlashes($r[fsay])?>" size="38"></td>
            </tr>
            <tr> 
              <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF"><input class="button" type="submit" name="Submit" value="提交">
                <input class="button" type="reset" name="Submit2" value="重置">
                <input class="input input-auto" name="enews" type="hidden" id="enews" value="<?=$enews?>">
                <input class="input input-auto" name="fid" type="hidden" id="fid" value="<?=$fid?>">
                <input class="input input-auto" name="fcid" type="hidden" id="fcid" value="<?=$fcid?>">
                <input class="input input-auto" name="oldfname" type="hidden" id="oldfname" value="<?=$r[fname]?>"></td>
            </tr>
          </form>
        </table>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>