<?php
//验证密码
function DoEmpireCMSAdminPassword($password,$salt,$salt2){
    $pw=md5($salt2.'E!m^p-i(r#e.C:M?S'.md5(md5($password).$salt).'d)i.g^o-d'.$salt);
    return $pw;
}