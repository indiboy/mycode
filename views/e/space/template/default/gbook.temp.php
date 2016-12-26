<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//位置
$url="$spacename &gt; 留言";
include("header.temp.php");
$viewuid=(int)getcvar('mluserid');
$adminmenu='';
if($viewuid==$userid)
{
	$adminmenu="<a href='../member/mspace/gbook.php' target='_blank'>管理留言</a>";
}
?>
<?=$spacegg?>
<table class="table table-bordered table-striped">
  <tr>
    <td>
    	<h3 class="text-big">留言板 <small><?=$adminmenu?></small></h3>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"> 
	<?php
	while($r=$empire->fetch($sql))
	{
		if($r['uid'])
		{
			$r['uname']="<b><a href='../space/?userid=$r[uid]' target='_blank'>$r[uname]</a></b>";
		}
		//管理菜单
		$adminlink='';
		$ip='';
		if($adminmenu)
		{
			$ip=' IP: '.$r[ip];
			$adminlink="[<a href='#ecms' onclick=\"window.open('../member/mspace/ReGbook.php?gid=$r[gid]','','width=600,height=380,scrollbars=yes');\">回复</a>]&nbsp;&nbsp;[<a href='../member/mspace/?enews=DelMemberGbook&gid=$r[gid]' onclick=\"return confirm('确认要删除?');\">删除</a>]";
		}
		$gbuname=$r[uname]." <small>留言于 ".$r[addtime]."</small>";
		//私密
		if($r['isprivate'])
		{
			if($adminmenu||($r[uid]&&$viewuid==$r[uid]))
			{
				$r['gbtext']="<font color='blue'>[悄悄话] ".$r['gbtext']."</font>";
			}
			else
			{
				$r['gbtext']='[悄悄话隐藏]';
			}
		}
	?>
		<table class="table table-bordered table-striped">
        <tr> 
          <td>
          	<h3 class="text-big"><?=$gbuname?> <small><?=$adminlink?></small></h3>
          </td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="25" style='word-break:break-all'>
		  	<?=nl2br($r['gbtext'])?>
			<?
			if($r['retext'])
			{
			?>
			<table class="table table-bordered table-striped">
            <tr> 
            <td width='100%' bgcolor='#FFFFFF' style='word-break:break-all'> 
             <?=nl2br($r['retext'])?>
            </td>
            </tr>
            </table>
			<?
			}
			?>
		  </td>
        </tr>
      </table>
		<br>
	<?php
	}
	?>
	<div class="padding">
    <ul class="pagination pagination-group">
    <?=$returnpage ?>
    </ul>
    </div>
	</td>
  </tr>
</table>
<br>
<table class="table table-bordered table-striped">
  <tr> 
    <td><b class="text-big">添加留言</b></td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFFF">
      <table width="100%" border="0" cellspacing="1" cellpadding="3">
	  <form name="addgbook" method="post" action="../member/mspace/index.php">
	  <input type="hidden" name="userid" value="<?=$userid?>">
	  <input type="hidden" name="enews" value="AddMemberGbook">
        <tr> 
          <td width="16%">昵称：</td>
          <td width="84%">
          	<div class="form-group">
		<div class="field">
			<div class="input-group">
				<span class="addon">
            <label><input name="isprivate" type="checkbox" id="isprivate" value="1"> 私密</label></span>
				<input name="uname" class="input" type="text" id="uname" value="<?=RepPostStr(getcvar('mlusername'),1)?>">
			</div>
		</div>
	</div>
              </td>
        </tr>
        <tr> 
          <td valign="top">内容：</td>
          <td><textarea name="gbtext" class="input" cols="60" rows="5" id="gbtext"></textarea></td>
        </tr>
        <tr> 
          <td>验证码：</td>
            <td> 
            	<div class="form-group">
		<div class="field">
			<div class="input-group">
				<input name="key" class="input input-auto" type="text" /><span class="addon"><img src="<?=$public_r[newsurl]?>e/ShowKey/?v=spacegb" name="spacegbKeyImg" id="spacegbKeyImg" onclick="spacegbKeyImg.src='<?=$public_r[newsurl]?>e/ShowKey/?v=spacegb&t='+Math.random()" title="看不清楚,点击刷新" /></span>
			</div>
		</div>
	</div>
</td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td><input type="submit" class="button border-dot" name="Submit" value="发表留言"></td>
        </tr>
		</form>
      </table></td>
  </tr>
</table>
<?php
include("footer.temp.php");
?>
