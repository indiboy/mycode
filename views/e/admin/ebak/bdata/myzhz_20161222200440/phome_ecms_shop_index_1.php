<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_shop_index`;");
E_C("CREATE TABLE `phome_ecms_shop_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_shop_index` values('1','46','1','1355124446','1355124446','1355124446','1');");
E_D("replace into `phome_ecms_shop_index` values('2','46','1','1355124447','1355124447','1355124447','1');");
E_D("replace into `phome_ecms_shop_index` values('3','46','1','1355124448','1355124448','1355124448','1');");
E_D("replace into `phome_ecms_shop_index` values('4','46','1','1355124449','1355124449','1355124449','1');");
E_D("replace into `phome_ecms_shop_index` values('5','46','1','1355124450','1355124450','1355124450','1');");
E_D("replace into `phome_ecms_shop_index` values('6','46','1','1355124451','1355124451','1355124451','1');");
E_D("replace into `phome_ecms_shop_index` values('7','47','1','1355124452','1355124452','1355124452','1');");
E_D("replace into `phome_ecms_shop_index` values('8','47','1','1355124453','1355124453','1355124453','1');");
E_D("replace into `phome_ecms_shop_index` values('9','47','1','1355124454','1355124454','1355124454','1');");
E_D("replace into `phome_ecms_shop_index` values('10','47','1','1355124455','1355124455','1355124455','1');");
E_D("replace into `phome_ecms_shop_index` values('11','47','1','1355124456','1355124456','1355124456','1');");
E_D("replace into `phome_ecms_shop_index` values('12','47','1','1355124457','1355124457','1355124457','1');");
E_D("replace into `phome_ecms_shop_index` values('13','48','1','1355124458','1355124458','1355124458','1');");
E_D("replace into `phome_ecms_shop_index` values('14','48','1','1355124459','1355124459','1355124459','1');");
E_D("replace into `phome_ecms_shop_index` values('15','48','1','1355124460','1355124460','1355124460','1');");
E_D("replace into `phome_ecms_shop_index` values('16','48','1','1355124461','1355124461','1355124461','1');");
E_D("replace into `phome_ecms_shop_index` values('17','48','1','1355124462','1355124462','1355124462','1');");
E_D("replace into `phome_ecms_shop_index` values('18','48','1','1355124463','1355124463','1355124463','1');");
E_D("replace into `phome_ecms_shop_index` values('19','49','1','1355124464','1355124464','1355124464','1');");
E_D("replace into `phome_ecms_shop_index` values('20','49','1','1355124465','1355124465','1355124465','1');");
E_D("replace into `phome_ecms_shop_index` values('21','49','1','1355124466','1355124466','1355124466','1');");
E_D("replace into `phome_ecms_shop_index` values('22','49','1','1355124467','1355124467','1355124467','1');");
E_D("replace into `phome_ecms_shop_index` values('23','49','1','1355124468','1355124468','1355124468','1');");
E_D("replace into `phome_ecms_shop_index` values('24','49','1','1355124469','1355124469','1355124469','1');");

@include("../../inc/footer.php");
?>