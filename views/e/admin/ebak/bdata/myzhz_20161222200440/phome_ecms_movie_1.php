<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_movie`;");
E_C("CREATE TABLE `phome_ecms_movie` (
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
  `movietype` varchar(16) NOT NULL DEFAULT '',
  `company` varchar(200) NOT NULL DEFAULT '',
  `movietime` varchar(20) NOT NULL DEFAULT '',
  `player` varchar(255) NOT NULL DEFAULT '',
  `playadmin` varchar(255) NOT NULL DEFAULT '',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `filesize` varchar(16) NOT NULL DEFAULT '',
  `star` tinyint(1) NOT NULL DEFAULT '0',
  `moviefen` int(11) NOT NULL DEFAULT '0',
  `moviesay` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_movie` values('1','42','0','2','0','0','','1','2','test','0','0','1','0','0','0','0','1355124445','1355124445','1','0','0','','/views/movie/dongzuo/1.html','1','1','1','战狼传说','战狼传说','1355124445','http://img.v197.56.com/images/11/15/wgdzfi56olo56i56.com_zhajm_120868431090x.jpg','港台影视','','','甄子丹','','.rmvb','','2','0','粤语无字幕 ');");
E_D("replace into `phome_ecms_movie` values('2','42','0','0','0','0','','2','2','test','0','1','1','0','0','0','0','1355124446','1355124446','1','0','0','','/views/movie/dongzuo/2.html','1','1','1','少林寺','少林寺','1355124446','http://img.v139.56.com/images/25/29/fireaticei56olo56i56.com_zhajm_120936095856x.jpg','港台影视','','','李连杰','','.rmvb','','2','0','李连杰 国语 ');");
E_D("replace into `phome_ecms_movie` values('3','42','0','1','0','0','','3','2','test','0','0','1','0','0','0','0','1355124447','1355124447','1','0','0','','/views/movie/dongzuo/3.html','1','1','1','企业战士','企业战士','1355124447','http://img.v140.56.com/images/3/9/caobianchuani56olo56i56.com_zhajm_120972579930.jpg','海外影视','','','','','.rmvb','','2','0','法国动作片 ');");
E_D("replace into `phome_ecms_movie` values('4','42','0','6','0','0','','4','2','test','0','1','1','0','0','0','0','1355124448','1355124448','1','0','0','','/views/movie/dongzuo/4.html','1','1','1','黄飞鸿之壮志凌云','黄飞鸿之壮志凌云','1355124448','http://img.v162.56.com/images/14/12/specter11i56olo56i56.com_zhajm_121015653757x.jpg','港台影视','','','李连杰','','.rmvb','','2','0','动作片 ');");
E_D("replace into `phome_ecms_movie` values('5','42','0','0','0','0','','5','2','test','0','0','1','0','0','0','0','1355124449','1355124449','1','0','0','','/views/movie/dongzuo/5.html','1','1','1','','企业战士(2)','1355124449','http://img.v140.56.com/images/7/20/caobianchuani56olo56i56.com_zhajm_120972735554.jpg','海外影视','','','','','','','2','0','法国动作片 ');");
E_D("replace into `phome_ecms_movie` values('6','42','0','32','0','0','','6','2','test','0','0','1','0','0','0','0','1355124450','1355124450','1','0','0','','/views/movie/dongzuo/6.html','1','1','1','','刀剑笑','1355124450','http://img.v41.56.com/images/19/18/tingting8564i56olo56i56.com_sc_1184246439_249.jpg','港台影视','','','','','','','2','0','刀剑笑 刘德华');");
E_D("replace into `phome_ecms_movie` values('7','43','0','1','0','0','','7','2','test','0','1','1','0','0','0','0','1355124451','1355124451','1','0','0','','/views/movie/aiqing/7.html','1','1','1','','乱世佳人','1355124451','http://img.v42.56.com/images/0/19/plp_1987i56olo56i56.com_zhajm_120771946758x.jpg','海外影视','','','','','.rmvb','','2','0','一部旷世巨片');");
E_D("replace into `phome_ecms_movie` values('8','43','0','1','0','0','','8','2','test','0','1','1','0','0','0','0','1355124452','1355124452','1','0','0','','/views/movie/aiqing/8.html','1','1','1','','罗马假日','1355124452','http://img.v197.56.com/images/4/20/youaredogi56olo56i56.com_zhajm_120917959799x.jpg','港台影视','','','','','.rmvb','','2','0','公主出使意大利');");
E_D("replace into `phome_ecms_movie` values('9','43','0','1','0','0','','9','2','test','0','1','1','0','0','0','0','1355124453','1355124453','1','0','0','','/views/movie/aiqing/9.html','1','1','1','','泰坦尼克号','1355124453','http://img.v21.56.com/images/24/27/linw56i56olo56i56.com_zhajm_1171968763_487.jpg','海外影视','','','','','.rmvb','','2','0','灾难毁灭前的爱情');");
E_D("replace into `phome_ecms_movie` values('10','43','0','2','0','0','','10','2','test','0','1','1','0','0','0','0','1355124454','1355124454','1','0','0','','/views/movie/aiqing/10.html','1','1','1','','西雅图夜未眠','1355124454','http://img.v163.56.com/images/17/22/jian-jiai56olo56i56.com_sc_119165531014.jpg','海外影视','','','','','.rmvb','','2','0','爱情跟默契有关');");
E_D("replace into `phome_ecms_movie` values('11','43','0','0','0','0','','11','2','test','0','0','1','0','0','0','0','1355124455','1355124455','1','0','0','','/views/movie/aiqing/11.html','1','1','1','','霸王别姬','1355124455','http://img.v41.56.com/images/27/15/zhangchaojun.2006i56olo56i56.com_sc_11875178710.jpg','港台影视','','','','','.rmvb','','2','0','张丰毅 张国荣 巩俐  ');");
E_D("replace into `phome_ecms_movie` values('12','43','0','3','0','0','','12','2','test','0','0','1','0','0','0','0','1355124456','1355124456','1','0','0','','/views/movie/aiqing/12.html','1','1','1','','我的野蛮女友','1355124456','http://img.v152.56.com/images/19/18/i56olo56i56.com_zhajm_1176401661_407.jpg','日韩影视','','','','','.rmvb','','2','0','浪漫爱情! ');");
E_D("replace into `phome_ecms_movie` values('13','44','0','1','0','0','','13','2','test','0','0','1','0','0','0','0','1355124457','1355124457','1','0','0','','/views/movie/xiju/13.html','1','1','1','','大话西游之月光宝盒','1355124457','http://img.v198.56.com/images/25/27/pfshii56olo56i56.com_sc_118959187737.jpg','港台影视','','','','','.rmvb','','2','0','月光宝盒');");
E_D("replace into `phome_ecms_movie` values('14','44','0','0','0','0','','14','2','test','0','0','1','0','0','0','0','1355124458','1355124458','1','0','0','','/views/movie/xiju/14.html','1','1','1','','大话西游之月光宝盒02','1355124458','http://img.v198.56.com/images/26/13/pfshii56olo56i56.com_sc_118959016912.jpg','港台影视','','','','','.rmvb','','2','0','月光宝盒');");
E_D("replace into `phome_ecms_movie` values('15','44','0','0','0','0','','15','2','test','0','0','1','0','0','0','0','1355124459','1355124459','1','0','0','','/views/movie/xiju/15.html','1','1','1','','大话西游之月光宝盒03','1355124459','http://img.v198.56.com/images/21/23/pfshii56olo56i56.com_sc_118958849669.jpg','港台影视','','','','','.rmvb','','2','0','月光宝盒');");
E_D("replace into `phome_ecms_movie` values('16','44','0','0','0','0','','16','2','test','0','0','1','0','0','0','0','1355124460','1355124460','1','0','0','','/views/movie/xiju/16.html','1','1','1','','大话西游之月光宝盒04','1355124460','http://img.v198.56.com/images/5/15/pfshii56olo56i56.com_sc_118958717160.jpg','港台影视','','','','','.rmvb','','2','0','大话西游');");
E_D("replace into `phome_ecms_movie` values('17','44','0','0','0','0','','17','2','test','0','0','1','0','0','0','0','1355124461','1355124461','1','0','0','','/views/movie/xiju/17.html','1','1','1','','大话西游之月光宝盒05','1355124461','http://img.v163.56.com/images/22/20/pfshii56olo56i56.com_sc_118957770146.jpg','港台影视','','','','','.rmvb','','2','0','大话西游');");
E_D("replace into `phome_ecms_movie` values('18','44','0','0','0','0','','18','2','test','0','0','1','0','0','0','0','1355124462','1355124462','1','0','0','','/views/movie/xiju/18.html','1','1','1','','大话西游之月光宝盒06','1355124462','http://img.v163.56.com/images/17/19/pfshii56olo56i56.com_sc_118957654828.jpg','港台影视','','','','','.rmvb','','2','0','大话西游');");
E_D("replace into `phome_ecms_movie` values('19','45','0','0','0','0','','19','2','test','0','0','1','0','0','0','0','1355124463','1355124463','1','0','0','','/views/movie/lianxuju/19.html','1','1','1','','三国演义01','1355124463','http://img.v152.56.com/images/9/12/woshiwulai00i56olo56i56.com_zhajm_1176439727_85.jpg','大陆影视','','','','','.rmvb','','2','0','三国演义01');");
E_D("replace into `phome_ecms_movie` values('20','45','0','0','0','0','','20','2','test','0','0','1','0','0','0','0','1355124464','1355124464','1','0','0','','/views/movie/lianxuju/20.html','1','1','1','','三国演义02','1355124464','http://img.v152.56.com/images/9/12/woshiwulai00i56olo56i56.com_zhajm_1176439769_705.jpg','港台影视','','','','','.rmvb','','2','0','三国演义02');");
E_D("replace into `phome_ecms_movie` values('21','45','0','0','0','0','','21','2','test','0','0','1','0','0','0','0','1355124465','1355124465','1','0','0','','/views/movie/lianxuju/21.html','1','1','1','','三国演义03','1355124465','http://img.v152.56.com/images/9/12/woshiwulai00i56olo56i56.com_zhajm_1176439805_509.jpg','大陆影视','','','','','','','2','0','三国演义03 ');");
E_D("replace into `phome_ecms_movie` values('22','45','0','1','0','0','','22','2','test','0','0','1','0','0','0','0','1355124466','1355124466','1','0','0','','/views/movie/lianxuju/22.html','1','1','1','','三国演义04','1355124466','http://img.v152.56.com/images/29/17/woshiwulai00i56olo56i56.com_zhajm_1176439839_727.jpg','大陆影视','','','','','.rmvb','','2','0','三国演义04');");
E_D("replace into `phome_ecms_movie` values('23','45','0','0','0','0','','23','2','test','0','0','1','0','0','0','0','1355124467','1355124467','1','0','0','','/views/movie/lianxuju/23.html','1','1','1','','三国演义05','1355124467','http://img.v152.56.com/images/5/6/woshiwulai00i56olo56i56.com_zhajm_1176442192_465.jpg','大陆影视','','','','','.rmvb','','2','0','三国演义05');");
E_D("replace into `phome_ecms_movie` values('24','45','0','1','0','0','','24','2','test','0','0','1','0','0','0','0','1355124468','1355124468','1','0','0','','/views/movie/lianxuju/24.html','1','1','1','','三国演义06','1355124468','http://img.v152.56.com/images/9/12/woshiwulai00i56olo56i56.com_zhajm_1176443377_629.jpg','大陆影视','','','','','.rmvb','','2','0','三国演义06');");

@include("../../inc/footer.php");
?>