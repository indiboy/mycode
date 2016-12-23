<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_photo`;");
E_C("CREATE TABLE `phome_ecms_photo` (
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
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `picsay` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_photo` values('1','52','0','29','0','0','','13551244391','1','admin','0','1','1','0','0','0','0','1355124443','1355124443','1','0','0','','/views/photo/mingxing/13551244391.html','1','1','1','刘若英','刘若英[图集]','1355124443','/views/testdata/demopic/photo/lry/s5.jpg','','刘若英图集');");
E_D("replace into `phome_ecms_photo` values('2','53','0','8','0','0','','13551244392','1','admin','0','1','1','0','0','0','0','1355124444','1355124444','1','0','0','','/views/photo/fengjing/13551244392.html','1','1','1','北海道','日本北海道空气中的淡淡的花香','1355124444','/views/testdata/demopic/photo/dt/s1.jpg','/views/testdata/demopic/photo/dt/1.jpg','　　学生时代的最后一个暑假，终于踏上了梦想中的北海道。 　　听说北海道的滑雪，也听说北海道的海鲜。但是在那9天的摄影旅程中，却让我见到了北海道的另一种美丽。这个东方的普罗旺斯，花团锦簇的艳丽花海，高低起伏的丘陵地，整片的熏衣草花园，就连空气中也都充满了淡淡的花香。不管从哪个角度看，这里都宛如人间仙境一般。北海道的夏天常常会下雨，但雨过彩虹更加增添了童话般的气息。难怪前日本摄影大师前田真山在退休后会想要住在北海道。');");
E_D("replace into `phome_ecms_photo` values('3','53','0','3','0','0','','13551244393','1','admin','0','0','1','0','0','0','0','1355124445','1355124445','1','0','0','','/views/photo/fengjing/13551244393.html','1','1','1','马尔代夫','马尔代夫[单图]','1355124445','/views/testdata/demopic/photo/dt/s2.jpg','/views/testdata/demopic/photo/dt/2.jpg','　　一样是细软的沙滩，一样是清澈的海水，一样是透明的阳光，一样是花环，一样是笑靥……即使有这么多的相同，撒落在苍茫大海上千万个岛屿，却依旧各有美丽、各有性格。 　　你的心中，怎样的岛屿才是最美丽浪漫的？是南太平洋的热带风情、还是浓浓缱绻的爱琴海风？快跟随我们一起畅游吧！ ');");
E_D("replace into `phome_ecms_photo` values('4','53','0','2','0','0','','13551244394','1','admin','0','1','1','0','0','0','0','1355124446','1355124446','1','0','0','','/views/photo/fengjing/13551244394.html','1','1','1','海岛','全球最浪漫海岛[图集]','1355124446','/views/testdata/demopic/photo/lmhd/titlepic.jpg','','全球最浪漫海岛简介');");
E_D("replace into `phome_ecms_photo` values('5','54','0','0','0','0','','13551244395','1','admin','0','1','1','0','0','0','0','1355124447','1355124447','1','0','0','','/views/photo/dongman/13551244395.html','1','1','1','火影忍者','火影忍者[单图]','1355124447','/views/testdata/demopic/photo/dt/s3.jpg','/views/testdata/demopic/photo/dt/3.jpg','火影忍者');");
E_D("replace into `phome_ecms_photo` values('6','52','0','3','0','0','','13551244396','1','admin','0','1','1','0','0','0','0','1355124448','1355124448','1','0','0','','/views/photo/mingxing/13551244396.html','1','1','1','刘德华','刘德华[图集]','1355124448','/views/testdata/demopic/photo/ldh/s1.jpg','','刘德华[图集]');");
E_D("replace into `phome_ecms_photo` values('7','52','0','16','0','0','','13551244397','1','admin','0','1','1','0','0','0','0','1355124449','1355124449','1','0','0','','/views/photo/mingxing/13551244397.html','1','1','1','宋慧乔','宋慧乔[图集]','1355124449','/views/testdata/demopic/photo/shq/titlepic.jpg','','宋慧乔[图集]');");

@include("../../inc/footer.php");
?>