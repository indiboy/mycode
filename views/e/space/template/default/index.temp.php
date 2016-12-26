<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//位置
$url="$spacename &gt; 首页";
include("header.temp.php");
$registertime=eReturnMemberRegtime($ur['registertime'],"Y-m-d H:i:s");
//oicq
if($addur['oicq'])
{
	$addur['oicq']="<a href='http://wpa.qq.com/msgrd?V=1&amp;Uin=".$addur['oicq']."&amp;Site=".$public_r['sitename']."&amp;Menu=yes' target='_blank'><img src='http://wpa.qq.com/pa?p=1:".$addur['oicq'].":4'  border='0' alt='QQ' />".$addur['oicq']."</a>";
}
//简介
$usersay=$addur['saytext']?$addur['saytext']:'暂无简介';
$usersay=RepFieldtextNbsp(stripSlashes($usersay));
?>
<?=$spacegg?>
<div class="panel margin-bottom">
	<div class="panel-head">
	<h3 class="text-big">个人介绍</h3>
	</div>
	<div class="panel-body">
	<?=nl2br($usersay)?>
	</div>
</div>
<div class="panel">
	<div class="panel-head">
	<h3 class="text-big">详细信息</h3>
	</div>
	<div class="panel-body">
	<table class="table table-bordered table-striped">
        <tr> 
          <td width="18%">用户名</td>
          <td width="82%"> 
            <?=$username?>
          </td>
        </tr>
        <tr> 
          <td>会员等级</td>
          <td> 
            <?=$level_r[$ur['groupid']]['groupname']?>
          </td>
        </tr>
        <tr> 
          <td>注册时间</td>
          <td> 
            <?=$registertime?>
          </td>
        </tr>
        <tr> 
          <td>联系邮箱</td>
          <td><a href="mailto:<?=$ur['email']?>"> 
            <?=$ur['email']?>
            </a></td>
        </tr>
        <tr> 
          <td>姓名</td>
          <td> 
            <?=$addur[truename]?>
          </td>
        </tr>
        <tr> 
          <td>联系电话</td>
          <td> 
            <?=$addur[mycall]?>
          </td>
        </tr>
        <tr> 
          <td>手机</td>
          <td> 
            <?=$addur[phone]?>
          </td>
        </tr>
        <tr> 
          <td>OICQ</td>
          <td> 
            <?=$addur[oicq]?>
          </td>
        </tr>
        <tr> 
          <td>MSN</td>
          <td> 
            <?=$addur[msn]?>
          </td>
        </tr>
        <tr> 
          <td>网站</td>
          <td> <a href="<?=$addur[homepage]?>" target="_blank"> 
            <?=$addur[homepage]?>
            </a> </td>
        </tr>
        <tr> 
          <td>联系地址</td>
          <td> 
            <?=$addur[address]?>
            &nbsp;&nbsp;&nbsp; 邮编 
            <?=$addur[zip]?>
          </td>
        </tr>
      </table>
	</div>
</div>
<?php
include("footer.temp.php");
?>