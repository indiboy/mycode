<?php
//密码加密
function eDoMemberPw($password, $salt) {
	$pw = md5(md5($password) . $salt);
	return $pw;
}

//验证密码
function eDoCkMemberPw($oldpw,$pw,$salt,$pwtype){
    $istrue=0;
    if($pwtype==0)//单重md5
    {
        $oldpw=md5($oldpw);
        if($oldpw==$pw)
        {
            $istrue=1;
        }
    }
    elseif($pwtype==1)//明码
    {
        if($oldpw==$pw)
        {
            $istrue=1;
        }
    }
    elseif($pwtype==3)//16位md5
    {
        $oldpw=substr(md5($oldpw),8,16);
        if($oldpw==$pw)
        {
            $istrue=1;
        }
    }
    else//双重md5
    {
        $oldpw=md5(md5($oldpw).$salt);
        if($oldpw==$pw)
        {
            $istrue=1;
        }
    }
    return $istrue;
}

function EmptyEcmsCookie(){
			esetcookie("mlusername","",0);
			esetcookie("mluserid","",0);
			esetcookie("mlgroupid","",0);
			esetcookie("mlrnd","",0);
			esetcookie("mlauth","",0);
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