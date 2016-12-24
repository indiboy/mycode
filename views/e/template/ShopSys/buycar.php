<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$postword=$enews=='EditAddress'?'修改地址':'增加地址';
$public_diyr['pagetitle']=$postword;
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../../member/cp/>会员中心</a>&nbsp;>&nbsp;<a href='ListAddress.php'>配送地址列表</a>&nbsp;>&nbsp;".$postword;
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<?php
include('buycar/buycar_form.php');
?>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>