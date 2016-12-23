<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_info_data_1`;");
E_C("CREATE TABLE `phome_ecms_info_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `mycontact` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_info_data_1` values('1','11','','1','9','0','0','','test@phome.net','qq123123','');");
E_D("replace into `phome_ecms_info_data_1` values('2','11','','1','9','0','0','','test@phome.net','qq123123','');");
E_D("replace into `phome_ecms_info_data_1` values('3','11','','0','9','0','0','','test@phome.net','qq123123','');");
E_D("replace into `phome_ecms_info_data_1` values('4','12','','1','9','0','0','','test@phome.net','sdddddddd','');");
E_D("replace into `phome_ecms_info_data_1` values('5','12','','1','9','0','0','','@asdf.com','ssssss','');");
E_D("replace into `phome_ecms_info_data_1` values('6','12','','1','9','0','0','','00@asdf.com','sfwff','sfwrg');");
E_D("replace into `phome_ecms_info_data_1` values('7','14','','1','9','0','0','','@bcd.com','ddddswe','deeeeeeeee');");
E_D("replace into `phome_ecms_info_data_1` values('8','15','','1','9','0','0','','domg@','ddddddddddd','seeeeeeee');");
E_D("replace into `phome_ecms_info_data_1` values('9','15','','1','9','0','0','','00@asdf.com','ddweeeeeeee','degfsg');");
E_D("replace into `phome_ecms_info_data_1` values('10','18','','1','9','0','0','','@bcd.com','ddddswe','0000');");
E_D("replace into `phome_ecms_info_data_1` values('11','18','','1','9','0','0','','00@asdf.com','sdgggggggg','deggggggg');");
E_D("replace into `phome_ecms_info_data_1` values('12','18','','1','9','0','0','','00@asdf.com','ddddddddddd','0000');");
E_D("replace into `phome_ecms_info_data_1` values('13','19','','1','9','0','0','','00@asdf.com','ddddswe','degfsg');");
E_D("replace into `phome_ecms_info_data_1` values('14','19','','1','9','0','0','','000','dddd','ddddddddd');");
E_D("replace into `phome_ecms_info_data_1` values('15','19','','1','9','0','0','','00@asdf.com','ddddddddddd','degfsg');");
E_D("replace into `phome_ecms_info_data_1` values('16','20','','1','9','0','0','','00@asdf.com','ddddddddddd','degfsg');");
E_D("replace into `phome_ecms_info_data_1` values('17','20','','1','9','0','0','','00@asdf.com','ddweeeeeeee','deggggggg');");
E_D("replace into `phome_ecms_info_data_1` values('18','20','','1','9','0','0','','111@bcd.com','ddddswe','deeeeeeeee');");
E_D("replace into `phome_ecms_info_data_1` values('19','20','','1','9','0','0','','busua@dua.dd','qq123123','degfsg');");
E_D("replace into `phome_ecms_info_data_1` values('20','23','','1','9','0','0','','busua@dua.dd','qq123123','ddddddddd');");
E_D("replace into `phome_ecms_info_data_1` values('21','23','','1','9','0','0','','111@bcd.com','ddweeeeeeee','deeeeeeeee');");
E_D("replace into `phome_ecms_info_data_1` values('22','23','','1','9','0','0','','00@asdf.com','ddddddddddd','deeeeeeeee');");
E_D("replace into `phome_ecms_info_data_1` values('23','23','','1','9','0','0','','busua@dua.dd','ddddswe','degfsg');");
E_D("replace into `phome_ecms_info_data_1` values('24','23','','1','9','0','0','','busua@dua.dd','ddddswe','0000');");
E_D("replace into `phome_ecms_info_data_1` values('25','25','','1','9','0','0','','00@asdf.com','dddd','deeeeeeeee');");
E_D("replace into `phome_ecms_info_data_1` values('26','25','','1','9','0','0','','111@bcd.com','ddddddddddd','deeeeeeeee');");
E_D("replace into `phome_ecms_info_data_1` values('27','25','','1','9','0','0','','111@bcd.com','ddweeeeeeee','degfsg');");
E_D("replace into `phome_ecms_info_data_1` values('28','25','','1','9','0','0','','00@asdf.com','ddddddddddd','0000');");
E_D("replace into `phome_ecms_info_data_1` values('29','25','','1','9','0','0','','000','ddddddddddd','deeeeeeeee');");
E_D("replace into `phome_ecms_info_data_1` values('30','26','','1','9','0','0','','000','ddddddddddd','ddddddddd');");
E_D("replace into `phome_ecms_info_data_1` values('31','28','','1','9','0','0','','00@asdf.com','ddddswe','ddddddddd');");
E_D("replace into `phome_ecms_info_data_1` values('32','28','','1','9','0','0','','00@asdf.com','ddddswe','ddddddddd');");
E_D("replace into `phome_ecms_info_data_1` values('33','28','','1','9','0','0','','@bcd.com','ddddswe','ddddddddd');");
E_D("replace into `phome_ecms_info_data_1` values('34','28','','1','9','0','0','','busua@dua.dd','ddddswe','ddddddddd');");
E_D("replace into `phome_ecms_info_data_1` values('35','29','','1','9','0','0','','doamgd@fff','dddd','deeeeeeeee');");
E_D("replace into `phome_ecms_info_data_1` values('36','29','','1','9','0','0','','lo@.cc','ddweeeeeeee','dkuabg');");
E_D("replace into `phome_ecms_info_data_1` values('37','29','','1','9','0','0','','busddua@dua.dd','ddddd','dddddddddd');");
E_D("replace into `phome_ecms_info_data_1` values('38','31','','1','9','0','0','','daeddd@1233','ddfweg','degryhh');");
E_D("replace into `phome_ecms_info_data_1` values('39','31','','1','9','0','0','','00@asdf.com','ddddd','deeeeeeeee');");
E_D("replace into `phome_ecms_info_data_1` values('40','31','','1','9','0','0','','00@asdf.com','ddddd','deggggggg');");
E_D("replace into `phome_ecms_info_data_1` values('41','12','','1','9','0','0','','00@asdf.com','sfwff','sfwrg');");

@include("../../inc/footer.php");
?>