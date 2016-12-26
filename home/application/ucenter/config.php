<?php
//配置文件
return [
//会员系统相关配置
'member'  => [
        'pwtype'  => 2,
        //密码保存形式,0为md5,1为明码,2为双重加密,3为16位md5
		'saltnum'  => 6,
		//SALT随机码字符数
    ],
];