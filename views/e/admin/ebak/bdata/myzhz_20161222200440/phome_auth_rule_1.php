<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_auth_rule`;");
E_C("CREATE TABLE `phome_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL DEFAULT '' COMMENT '规则名称',
  `title` varchar(20) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ishttp` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  `pid` smallint(5) unsigned NOT NULL COMMENT '父级ID',
  `icon` varchar(50) DEFAULT '' COMMENT '图标',
  `sort` tinyint(4) unsigned NOT NULL COMMENT '排序',
  `condition` char(100) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COMMENT='规则表'");
E_D("replace into `phome_auth_rule` values('5','index/Menu/default','菜单管理','1','0','1','0','fa fa-bars','0','');");
E_D("replace into `phome_auth_rule` values('6','index/Menu/index','后台菜单','1','0','1','5','','0','');");
E_D("replace into `phome_auth_rule` values('7','index/Menu/add','添加菜单','1','0','0','6','','0','');");
E_D("replace into `phome_auth_rule` values('8','index/Menu/save','保存菜单','1','0','0','6','','0','');");
E_D("replace into `phome_auth_rule` values('9','index/Menu/edit','编辑菜单','1','0','0','6','','0','');");
E_D("replace into `phome_auth_rule` values('10','index/Menu/update','更新菜单','1','0','0','6','','0','');");
E_D("replace into `phome_auth_rule` values('11','index/Menu/delete','删除菜单','1','0','0','6','','0','');");
E_D("replace into `phome_auth_rule` values('12','index/AuthNav/index','导航管理','1','0','1','5','','0','');");
E_D("replace into `phome_auth_rule` values('16','index/Enewsmember/default','用户管理','1','0','1','0','fa fa-users','0','');");
E_D("replace into `phome_auth_rule` values('17','index/Enewsmember/index','普通用户','1','0','1','16','','0','');");
E_D("replace into `phome_auth_rule` values('19','index/Enewsmembergroup/index','权限组','1','0','1','16','','0','');");
E_D("replace into `phome_auth_rule` values('31','index/Enewsmembergroup/add','添加权限组','1','0','0','19','','0','');");
E_D("replace into `phome_auth_rule` values('32','index/Enewsmembergroup/save','保存权限组','1','0','0','19','','0','');");
E_D("replace into `phome_auth_rule` values('33','index/Enewsmembergroup/edit','编辑权限组','1','0','0','19','','0','');");
E_D("replace into `phome_auth_rule` values('34','index/Enewsmembergroup/update','更新权限组','1','0','0','19','','0','');");
E_D("replace into `phome_auth_rule` values('35','index/Enewsmembergroup/delete','删除权限组','1','0','0','19','','0','');");
E_D("replace into `phome_auth_rule` values('36','index/Enewsmembergroup/auth','授权','1','0','0','19','','0','');");
E_D("replace into `phome_auth_rule` values('37','index/Enewsmembergroup/updateAuthGroupRule','更新权限组规则','1','0','0','19','','0','');");
E_D("replace into `phome_auth_rule` values('39','index/AuthNav/add','添加导航','1','0','0','12','','0','');");
E_D("replace into `phome_auth_rule` values('40','index/AuthNav/save','保存导航','1','0','0','12','','0','');");
E_D("replace into `phome_auth_rule` values('41','index/AuthNav/edit','编辑导航','1','0','0','12','','0','');");
E_D("replace into `phome_auth_rule` values('42','index/AuthNav/update','更新导航','1','0','0','12','','0','');");
E_D("replace into `phome_auth_rule` values('43','index/AuthNav/delete','删除导航','1','0','0','12','','0','');");
E_D("replace into `phome_auth_rule` values('44','index/Enewsmember/add','添加用户','1','0','0','17','','0','');");
E_D("replace into `phome_auth_rule` values('45','index/Enewsmember/save','保存用户','1','0','0','17','','0','');");
E_D("replace into `phome_auth_rule` values('46','index/Enewsmember/edit','编辑用户','1','0','0','17','','0','');");
E_D("replace into `phome_auth_rule` values('47','index/Enewsmember/update','更新用户','1','0','0','17','','0','');");
E_D("replace into `phome_auth_rule` values('48','index/Enewsmember/delete','删除用户','1','0','0','17','','0','');");

@include("../../inc/footer.php");
?>