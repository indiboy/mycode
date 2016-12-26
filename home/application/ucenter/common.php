<?php
//密码加密
function eDoMemberPw($password, $salt) {
	$pw = md5(md5($password) . $salt);
	return $pw;
}

//验证密码
function eDoCkMemberPw($oldpw, $pw, $salt) {
	$istrue = 0;
	$oldpw = md5(md5($oldpw) . $salt);
	if ($oldpw == $pw) {
		$istrue = 1;
	}
	return $istrue;
}
function EmptyEcmsCookie(){
			$set1=esetcookie("mlusername","",0);
			$set2=esetcookie("mluserid","",0);
			$set3=esetcookie("mlgroupid","",0);
			$set4=esetcookie("mlrnd","",0);
			$set5=esetcookie("mlauth","",0);
}
//设置COOKIE
function esetcookie($var,$val,$life=0,$ecms=0){
	$varpre=empty($ecms)?Config('cookie.ckvarpre'):Config('cookie.ckadminvarpre');
	return setcookie($varpre.$var,$val,$life,Config('cookie.path'),Config('cookie.domain'));
}
						
//返回cookie
function getcvar($var,$ecms=0){
	$tvar=empty($ecms)?Config('cookie.ckvarpre').$var:Config('cookie.ckadminvarpre').$var;
	return $_COOKIE[$tvar];
}