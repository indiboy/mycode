<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_photo_data_1`;");
E_C("CREATE TABLE `phome_ecms_photo_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `filesize` varchar(10) NOT NULL DEFAULT '',
  `picsize` varchar(20) NOT NULL DEFAULT '',
  `picfbl` varchar(20) NOT NULL DEFAULT '',
  `picfrom` varchar(120) NOT NULL DEFAULT '',
  `morepic` mediumtext NOT NULL,
  `num` tinyint(4) NOT NULL DEFAULT '0',
  `width` varchar(12) NOT NULL DEFAULT '',
  `height` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_photo_data_1` values('1','52','','0','4','0','0','','','','','','/views/testdata/demopic/photo/lry/s1.jpg::::::/views/testdata/demopic/photo/lry/1.jpg::::::\r\n/views/testdata/demopic/photo/lry/s2.jpg::::::/views/testdata/demopic/photo/lry/2.jpg::::::\r\n/views/testdata/demopic/photo/lry/s3.jpg::::::/views/testdata/demopic/photo/lry/3.jpg::::::\r\n/views/testdata/demopic/photo/lry/s4.jpg::::::/views/testdata/demopic/photo/lry/4.jpg::::::\r\n/views/testdata/demopic/photo/lry/s5.jpg::::::/views/testdata/demopic/photo/lry/5.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('2','53','','0','3','0','0','','30 KB','500*337','','21cn','','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('3','53','','0','3','0','0','','30 KB','500*375','','21cn','','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('4','53','','0','4','0','0','','','','','','/views/testdata/demopic/photo/lmhd/s1.jpg::::::/views/testdata/demopic/photo/lmhd/1.jpg::::::\r\n/views/testdata/demopic/photo/lmhd/s2.jpg::::::/views/testdata/demopic/photo/lmhd/2.jpg::::::\r\n/views/testdata/demopic/photo/lmhd/s3.jpg::::::/views/testdata/demopic/photo/lmhd/3.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('5','54','','0','3','0','0','','224 KB','1024*768','','未知','','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('6','52','','0','4','0','0','','','','','','/views/testdata/demopic/photo/ldh/s1.jpg::::::/views/testdata/demopic/photo/ldh/1.jpg::::::\r\n/views/testdata/demopic/photo/ldh/s2.jpg::::::/views/testdata/demopic/photo/ldh/2.jpg::::::\r\n/views/testdata/demopic/photo/ldh/s3.jpg::::::/views/testdata/demopic/photo/ldh/3.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('7','52','','0','4','0','0','','','','','','/views/testdata/demopic/photo/shq/s1.jpg::::::/views/testdata/demopic/photo/shq/1.jpg::::::\r\n/views/testdata/demopic/photo/shq/s2.jpg::::::/views/testdata/demopic/photo/shq/2.jpg::::::\r\n/views/testdata/demopic/photo/shq/s3.jpg::::::/views/testdata/demopic/photo/shq/3.jpg::::::','3','','');");

@include("../../inc/footer.php");
?>