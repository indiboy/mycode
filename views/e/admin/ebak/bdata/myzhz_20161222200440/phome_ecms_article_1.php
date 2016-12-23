<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_article`;");
E_C("CREATE TABLE `phome_ecms_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
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
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `writer` char(30) NOT NULL DEFAULT '',
  `befrom` char(60) NOT NULL DEFAULT '',
  `newstext` char(50) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_article` values('1','55','0','1','0','0','','1','2','test','0','1','1','0','0','0','0','1355124447','1355124447','1','0','0','','/views/article/xiaoshuo/1.html','1','1','1','','历史上的父子宰相','1355124447','http://cache.mars.sina.com.cn/nd/vipbook//bookcover/tiny85/9/cover_9d10c808811a441e144e7a81f19ff337.jpg','','在清朝著名的康干盛世时期，中国安徽有一个非常有名气的家族，为大清王朝盛世的到来做出了重大的贡献，被人称誉为“五里三进士”、“隔河两状元”。','纪连海','','2012/1210/756251542d10f056296ba533ed4f5b45','0');");
E_D("replace into `phome_ecms_article` values('2','55','0','0','0','0','','2','2','test','0','0','1','0','0','0','0','1355124448','1355124448','1','0','0','','/views/article/xiaoshuo/2.html','1','1','1','','清末重臣：张之洞大传','1355124448','http://www.sinaimg.cn/book/nzt/history/cha/zzddz/U1000P112T78D6187F1709DT20080410142439.jpg','','19世纪30年代末，西方资本主义侵略中国的前夕，是清王朝统治达到极端黑暗的年代。道光皇帝上台，曾想着振兴一番。面对吏治败坏、武备废弛、农政不修的现实，他诏令各省兴复书院...','马东玉','','2012/1210/cf0078d77809a73b50180e81ac267083','0');");
E_D("replace into `phome_ecms_article` values('3','55','0','0','0','0','','3','2','test','0','1','1','0','0','0','0','1355124449','1355124449','1','0','0','','/views/article/xiaoshuo/3.html','1','1','1','','我的家','1355124449','http://www.sinaimg.cn/book/http/book.sina.com.cn/nzt/history/sal/wodejia/U2016P112T78D5143F1709DT20071203142040.jpg','','日本作家水上勉去年九月访问成都后，经上海回国。我在上海接待他，他告诉我他到过我的老家，看见一株枯树和空荡荡的庭院。他不知道是什么树。他抚摩着粗糙的树皮，想像过去的事情。','巴金','','2012/1210/8fdc40025cf81890cfa5dbe40b08c0bd','0');");
E_D("replace into `phome_ecms_article` values('4','55','0','6','0','0','','4','2','test','0','0','1','0','0','0','0','1355124450','1355124450','1','0','0','','/views/article/xiaoshuo/4.html','1','1','1','','晚清外交风云人物','1355124450','http://cache.mars.sina.com.cn/nd/vipbook//bookcover/tiny85/24/cover_6b3081eea2c4a49e100aa14a2ac4351d.jpg','','青春的末代帝国当下这个时代，当别人都忙着挣钱、忙着进行各种残酷的生存斗争时，你如果像《大话西游》里的唐僧那样呼喊“下雨了，大家要收衣服啦！”是不合时宜，会被人嗤笑的。','李扬帆','','2012/1210/7649051c4311b3200fe7821a63ed4bcf','0');");
E_D("replace into `phome_ecms_article` values('5','55','0','0','0','0','','5','2','test','0','0','0','0','0','0','0','1355124451','1355124451','1','0','0','','/views/article/xiaoshuo/5.html','1','1','1','','诺奖得主自传：影中漫步','1355124451','','','作者简介：多丽丝·莱辛，2007年诺贝尔文学奖获得者。1919年10月22日出生在伊朗，父母都是英国人。六岁时，随父母移居津巴布韦。','多丽丝·莱辛','','2012/1210/cf65ff0526ee53ec95093f6c5344bce4','0');");
E_D("replace into `phome_ecms_article` values('6','55','0','3','0','0','','6','2','test','0','0','0','0','0','0','0','1355124452','1355124452','1','0','0','','/views/article/xiaoshuo/6.html','1','1','1','','晚清重臣：曾国藩大传','1355124452','','','“曾国藩现象”的历史回顾,20世纪90年代初，中国出现了关心曾国藩的思想文化热潮。长篇小说《曾国藩》为读者抢购，弄得洛阳纸贵。《曾国藩家书》由出版商竞相出版，百姓排队购读。','马东玉','','2012/1210/04354bd49c04ba41c63fb3c02519172e','0');");
E_D("replace into `phome_ecms_article` values('7','56','0','0','0','0','','7','2','test','0','0','0','0','0','0','0','1355124453','1355124453','1','0','0','','/views/article/sanwen/7.html','1','1','1','','到底是上海人','1355124453','','',' 一年前回上海来，对于久违了的上海人的第一个印象是白与胖。在香港，广东人十有八九是黝黑瘦小的，印度人还要黑，马来人还要瘦。看惯了他们，上海人显得个个肥白如瓠。','张爱玲','','2012/1210/976aa99a96b2d142a78b7aa571a62d4e','0');");
E_D("replace into `phome_ecms_article` values('8','56','0','0','0','0','','8','2','test','0','0','0','0','0','0','0','1355124454','1355124454','1','0','0','','/views/article/sanwen/8.html','1','1','1','','洋人看京戏及其他','1355124454','','','用洋人看京戏的眼光来看看中国的一切，也不失为一桩有意昧的事。头上搭了竹竿，\r\n晾着小孩的开档裤；柜台上的玻璃缸中盛着“参须露酒”；这一家的扩音机里唱着梅兰芳...','张爱玲','','2012/1210/2105366fa3dc90e61c63ebe14bc02904','0');");
E_D("replace into `phome_ecms_article` values('9','56','0','0','0','0','','9','2','test','0','0','0','0','0','0','0','1355124455','1355124455','1','0','0','','/views/article/sanwen/9.html','1','1','1','','更衣记','1355124455','','','如果当初世代相传的衣服没有大批卖给收旧货的，一年一度六月里晒衣裳，该是一\r\n件辉煌热闹的事罢。你在竹竿与竹竿之间走过，两边拦着续罗绸缎的墙——','张爱玲','','2012/1210/72ba0f051b8c4eda17dad61ef96e1faf','0');");
E_D("replace into `phome_ecms_article` values('10','56','0','0','0','0','','10','2','test','0','1','0','0','0','0','0','1355124456','1355124456','1','0','0','','/views/article/sanwen/10.html','1','1','1','','公寓生活记趣','1355124456','','','读到“我欲乘风归去，又恐琼楼玉宇，高处不胜寒”的两句词，公寓房子上层的居\r\n民多半要感到毛骨惊然。屋子越高越冷。','张爱玲','','2012/1210/cca5e8611ba5f8fa4d95c4ba324661ea','0');");
E_D("replace into `phome_ecms_article` values('11','56','0','0','0','0','','11','2','test','0','1','0','0','0','0','0','1355124457','1355124457','1','0','0','','/views/article/sanwen/11.html','1','1','1','','夜营的喇叭','1355124457','','',' 晚上十点钟，我在灯下看书，离家不远的军营里的喇叭吹起了熟悉的调子。几个简\r\n单的音阶，缓缓的上去又下来，在这鼎沸的大城市里难得有这样的简单的心。','张爱玲','','2012/1210/32b23fb072b8468689aaf02abb699840','0');");
E_D("replace into `phome_ecms_article` values('12','56','0','1','0','0','','12','2','test','0','1','0','0','0','0','0','1355124458','1355124458','1','0','0','','/views/article/sanwen/12.html','1','1','1','','道路以目','1355124458','','','有个外国姑娘，到中国来了两年，故宫、长城、东方蒙特卡罗、东方威尼斯，都没\r\n瞻仰过，对于中国新文艺新电影似乎也缺乏兴趣，然而她特别赏识中国小孩，说：“真美呀”','张爱玲','','2012/1210/831edf79588dcf4e9d896b146b560af4','0');");
E_D("replace into `phome_ecms_article` values('13','57','0','1','0','0','','13','2','test','0','0','0','0','0','0','0','1355124459','1355124459','1','0','0','','/views/article/shige/13.html','1','1','1','','我微笑着走向生活','1355124459','','','我微笑着走向生活， \r\n　　无论生活以什么方式回敬我。 \r\n　　　 \r\n　　报我以平坦吗？ \r\n　　我是一条欢乐奔流的小河。 \r\n......','汪国真','','2012/1210/1a577647491829e080e1beed21b97d0e','0');");
E_D("replace into `phome_ecms_article` values('14','57','0','2','0','0','','14','2','test','0','1','0','0','0','0','0','1355124460','1355124460','1','0','0','','/views/article/shige/14.html','1','1','1','','再别康桥','1355124460','','','轻轻的我走了，\r\n    　正如我轻轻的来；\r\n    我轻轻的招手，\r\n    　作别西天的云彩。\r\n......','徐志摩','','2012/1210/8ceba0075291748f3fb1f652601a945f','0');");
E_D("replace into `phome_ecms_article` values('15','57','0','1','0','0','','15','2','test','0','0','0','0','0','0','0','1355124461','1355124461','1','0','0','','/views/article/shige/15.html','1','1','1','','断章','1355124461','','','你站在桥上看风景\r\n看风景人在桥上看你\r\n\r\n明月装饰了你的窗子\r\n你装饰了别人的梦','卞之琳','','2012/1210/d8b12d2c787d4db30a684056c51648c5','0');");
E_D("replace into `phome_ecms_article` values('16','57','0','1','0','0','','16','2','test','0','0','0','0','0','0','0','1355124462','1355124462','1','0','0','','/views/article/shige/16.html','1','1','1','','面朝大海，春暖花开','1355124462','','','从明天起，做一个幸福的人\r\n喂马，劈柴，周游世界\r\n从明天起，关心粮食和蔬菜\r\n我有一所房子，面朝大海，春暖花开\r\n......','海子','','2012/1210/3169dc2a3082642ddc4f84e5479f8cdf','0');");
E_D("replace into `phome_ecms_article` values('17','57','0','1','0','0','','17','2','test','0','0','0','0','0','0','0','1355124463','1355124463','1','0','0','','/views/article/shige/17.html','1','1','1','','远和近','1355124463','','','你，一会看我，一会看云。我觉得你看我时很远，你看云时很近','顾城','','2012/1210/bc338634ac1c5aa9bf516317606b00b4','0');");
E_D("replace into `phome_ecms_article` values('18','57','0','2','0','0','','18','2','test','0','0','0','0','0','0','0','1355124464','1355124464','1','0','0','','/views/article/shige/18.html','1','1','1','','回答','1355124464','','','卑鄙是卑鄙者的通行证， \r\n高尚是高尚者的墓志铭， \r\n看吧，在那镀金的天空中， \r\n飘满了死者弯曲的倒影。 \r\n...','北岛','','2012/1210/58bcb04ea86c0a15654648f49d738628','0');");

@include("../../inc/footer.php");
?>