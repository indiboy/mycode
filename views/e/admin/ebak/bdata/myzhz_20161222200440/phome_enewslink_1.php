<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslink`;");
E_C("CREATE TABLE `phome_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslink` values('1','帝国软件','http://www.phome.net/img/link/empirecms.gif','http://www.phome.net','2006-09-13 14:28:57','0','88','31','_blank','0','','帝国软件','1','0','0');");
E_D("replace into `phome_enewslink` values('2','帝国软件','http://www.phome.net/img/link/empirecms.gif','http://www.phome.net','2006-09-13 14:30:14','0','88','31','_blank','0','','帝国软件','1','0','0');");
E_D("replace into `phome_enewslink` values('3','帝国软件','http://www.phome.net/img/link/empirecms.gif','http://www.phome.net','2006-09-13 14:30:32','0','88','31','_blank','0','','帝国软件','1','0','0');");
E_D("replace into `phome_enewslink` values('4','帝国软件','http://www.phome.net/img/link/empirecms.gif','http://www.phome.net','2006-09-13 14:30:50','0','88','31','_blank','0','','帝国软件','1','0','0');");
E_D("replace into `phome_enewslink` values('5','帝国软件','http://www.phome.net/img/link/empirecms.gif','http://www.phome.net','2006-09-13 14:31:50','0','88','31','_blank','0','','帝国软件','1','0','0');");
E_D("replace into `phome_enewslink` values('6','帝国软件','http://www.phome.net/img/link/empirecms.gif','http://www.phome.net','2006-09-13 14:32:07','0','88','31','_blank','0','','帝国软件','1','0','0');");
E_D("replace into `phome_enewslink` values('7','帝国软件','http://www.phome.net/img/link/empirecms.gif','http://www.phome.net','2006-09-13 14:32:24','0','88','31','_blank','0','','帝国软件','1','0','0');");
E_D("replace into `phome_enewslink` values('8','帝国CMS官方网站','','http://www.phome.net','2008-05-08 18:13:24','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('9','帝国CMS官方论坛','','http://bbs.phome.net','2008-05-08 18:15:41','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('10','帝国站长工具','','http://www.dotool.cn','2008-05-08 18:15:56','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('11','帝国CMS模板下载','','http://www.phome.net/zy/template/','2008-05-08 18:18:35','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('12','帝国CMS教程','','http://bbs.phome.net/listthread-35-cms-page-0.html','2008-05-08 18:19:19','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('13','帝国备份王下载','','http://www.phome.net/ebak2010/','2008-05-08 18:19:55','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('14','帝国CMS用户案例','','http://www.phome.net/EmpireCMS/UserSite/','2008-05-08 18:22:11','0','88','31','_blank','0','','','1','0','0');");

@include("../../inc/footer.php");
?>