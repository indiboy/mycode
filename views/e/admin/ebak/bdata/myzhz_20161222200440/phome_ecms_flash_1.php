<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_flash`;");
E_C("CREATE TABLE `phome_ecms_flash` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` varchar(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titleurl` varchar(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` varchar(80) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` varchar(120) NOT NULL DEFAULT '',
  `flashwriter` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `star` tinyint(1) NOT NULL DEFAULT '0',
  `filesize` varchar(16) NOT NULL DEFAULT '',
  `flashurl` varchar(255) NOT NULL DEFAULT '',
  `width` varchar(12) NOT NULL DEFAULT '',
  `height` varchar(12) NOT NULL DEFAULT '',
  `flashsay` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_flash` values('1','50','0','2','0','0','','1','2','test','0','0','1','0','0','0','0','1355124444','1355124444','1','0','0','','/views/flash/youxi/1.html','1','1','1','','可爱小洋装','1355124444','http://flash.tom.com/uploadfiles/s/shadow00390/1209544062_16667.gif','','','2','','http://img.flash.tom.com/flashlink/flash_swf/s/shadow00390/1209544062_99965.swf','600','450','互动游戏 ');");
E_D("replace into `phome_ecms_flash` values('2','50','0','5','0','0','','2','2','test','0','1','1','0','0','0','0','1355124445','1355124445','1','0','0','','/views/flash/youxi/2.html','1','1','1','','火炬手','1355124445','http://flash.tom.com/uploadfiles/p/ptt_piedra/1208396648_52987.jpg','','','2','','http://img.flash.tom.com/flashlink/flash_swf/p/ptt_piedra/1208396648_89568.swf','600','800','互动游戏');");
E_D("replace into `phome_ecms_flash` values('3','50','0','1','0','0','','3','2','test','0','0','1','0','0','0','0','1355124446','1355124446','1','0','0','','/views/flash/youxi/3.html','1','1','1','','果蔬连连看','1355124446','http://flash.tom.com/uploadfiles/m/mzdweb/1205755101_35781.gif','','','2','','http://img.flash.tom.com/flashlink/flash_swf/m/mzdweb/1205755101_79098.swf','600','450','互动游戏');");
E_D("replace into `phome_ecms_flash` values('4','50','0','0','0','0','','4','2','test','0','1','1','0','0','0','0','1355124447','1355124447','1','0','0','','/views/flash/youxi/4.html','1','1','1','','万花筒','1355124447','http://flash.tom.com/uploadfiles/y/y--two/1198564039_91464.gif','','','2','','http://img.flash.tom.com/flashlink/flash_swf/y/y--two/1198564039_12913.swf','600','450','互动游戏');");
E_D("replace into `phome_ecms_flash` values('5','50','0','2','0','0','','5','2','test','0','0','1','0','0','0','0','1355124448','1355124448','1','0','0','','/views/flash/youxi/5.html','1','1','1','','无忧的八戒','1355124448','http://flash.tom.com/uploadfiles/s/s_pool/1068453286_53260.jpg','','','2','','http://img.flash.tom.com/flashlink/flash_swf/s/s_pool/1068453286_69490.swf','600','450','互动游戏');");
E_D("replace into `phome_ecms_flash` values('6','50','0','7','0','0','','6','2','test','0','0','1','0','0','0','0','1355124449','1355124449','1','0','0','','/views/flash/youxi/6.html','1','1','1','','考验记忆力','1355124449','http://flash.tom.com/uploadfiles/x/xiaoyingtao2003/1184728175_78342.gif','','','2','','http://img.flash.tom.com/flashlink/flash_swf/x/xiaoyingtao2003/1184728175_22413.swf','600','450','互动游戏');");
E_D("replace into `phome_ecms_flash` values('7','51','0','0','0','0','','7','2','test','0','0','1','0','0','0','0','1355124450','1355124450','1','0','0','','/views/flash/yinle/7.html','1','1','1','','星语星愿','1355124450','http://flash.tom.com/uploadfiles/f/fv9521/1209790962_52399.jpg','','','2','','http://img.flash.tom.com/flashlink/flash_swf/f/fv9521/1209790962_71796.swf','600','450','FLASH MTV ');");
E_D("replace into `phome_ecms_flash` values('8','51','0','1','0','0','','8','2','test','0','1','1','0','0','0','0','1355124451','1355124451','1','0','0','','/views/flash/yinle/8.html','1','1','1','','等一分钟','1355124451','http://img.v48.56.com/images/10/29/hufan2005i56olo56i56.com_1178434797_88.jpg','','','2','','http://www.56.com/n_v166_/c33_/17_/8_/lfhkyolori_/zhajm_120291096317_/308903_/0_/29019309.swf','600','450','FLASH MTV');");
E_D("replace into `phome_ecms_flash` values('9','51','0','2','0','0','','9','2','test','0','1','1','0','0','0','0','1355124452','1355124452','1','0','0','','/views/flash/yinle/9.html','1','1','1','','青花瓷','1355124452','http://img.v197.56.com/images/11/14/pkn4b4i56olo56i56.com_zhajm_11949782631.jpg','','','2','','http://www.56.com/n_v197_/c31_/11_/14_/pkn4b4_/zhajm_11949782631_/229825_/0_/22874795.swf','600','450','FLASH MTV');");
E_D("replace into `phome_ecms_flash` values('10','51','0','1','0','0','','10','2','test','0','1','1','0','0','0','0','1355124453','1355124453','1','0','0','','/views/flash/yinle/10.html','1','1','1','','梅花三弄 古筝Flash音乐','1355124453','http://img.v138.56.com/images/10/6/qiuwenhani56olo56i56.com_zhajm_119331232075.jpg','','','2','','http://www.56.com/n_v138_/c29_/10_/6_/qiuwenhan_/zhajm_119331232075_/186000_/0_/21382991.swf','600','450','FLASH MV');");
E_D("replace into `phome_ecms_flash` values('11','51','0','1','0','0','','11','2','test','0','1','1','0','0','0','0','1355124454','1355124454','1','0','0','','/views/flash/yinle/11.html','1','1','1','','葬花吟 古筝Flash音乐','1355124454','http://img.v155.56.com/images/11/25/qiuwenhani56olo56i56.com_zhajm_11931312011.jpg','','','2','','http://www.56.com/n_v155_/c29_/11_/25_/qiuwenhan_/zhajm_11931312011_/300000_/0_/21238031.swf','600','450','FLASH MV');");
E_D("replace into `phome_ecms_flash` values('12','51','0','2','0','0','','12','2','test','0','0','1','0','0','0','0','1355124455','1355124455','1','0','0','','/views/flash/yinle/12.html','1','1','1','','高山流水','1355124455','http://img.v157.56.com/images/12/10/zhanghj545i56olo56i56.com_zhajm_120418479874.jpg','','','2','','http://www.56.com/n_v166_/c28_/9_/18_/qingqinjushi_/120927790476x_/195000_/0_/33669876.swf','600','450','FLASH MV');");

@include("../../inc/footer.php");
?>