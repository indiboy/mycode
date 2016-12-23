<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='增加收藏夹';
$url="<a href=../../../../>首页</a>&nbsp;>&nbsp;<a href=../../cp/>会员中心</a>&nbsp;>&nbsp;<a href=../../fava/>收藏夹</a>&nbsp;>&nbsp;增加收藏夹";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<br>
        <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" class="table table-bordered table-striped">
          <form name="form1" method="POST" action="../../doaction.php">
            <tr class="header"> 
              <td height="25"><div align="center"> 
                  <input class="input input-auto" name="enews" type="hidden" id="enews" value="AddFava">
                  增加收藏夹 
                  <input class="input input-auto" name="from" type="hidden" id="from2" value="<?=$from?>">
                  <input class="input input-auto" name="classid" type="hidden" id="classid2" value="<?=$classid?>">
                  <input class="input input-auto" name="id" type="hidden" id="id2" value="<?=$id?>">
                  [<a href="../FavaClass/" target="_blank">增加收藏分类</a>] </div></td>
            </tr>
            <tr> 
              <td height="25" bgcolor="#FFFFFF"><div align="center">收藏页面：<a href='<?=$titleurl?>' target=_blank><?=stripSlashes($r[title])?></a></div></td>
            </tr>
            <tr> 
              <td height="25" bgcolor="#FFFFFF"><div align="center">选择收藏分类: 
                  <select class="input input-auto" name="cid" id="select">
                    <option value="0">不设置</option>
                    <?=$select?>
                  </select>
                </div></td>
            </tr>
            <tr> 
              <td height="25" bgcolor="#FFFFFF"><div align="center"> 
                  <input class="button" type="submit" name="Submit" value="收藏">
                  &nbsp;&nbsp; 
                  <input class="input input-auto" type="button" name="Submit2" value="返回" onclick="javascript:history.go(-1)">
                </div></td>
            </tr>
          </form>
        </table>
        <br>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>