<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_movie_data_1`;");
E_C("CREATE TABLE `phome_ecms_movie_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `playdk` varchar(30) NOT NULL DEFAULT '',
  `playtime` varchar(20) NOT NULL DEFAULT '',
  `downpath` mediumtext NOT NULL,
  `playerid` smallint(6) NOT NULL DEFAULT '0',
  `onlinepath` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_movie_data_1` values('1','42','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v197_/c30_/11_/15_/wgdzf_/zhajm_120868431090x_/5344000_/0_/33190659.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('2','42','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v139_/c37_/25_/29_/fireatice_/zhajm_120936095856x_/5728000_/0_/33737178.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('3','42','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v140_/c37_/3_/9_/caobianchuan_/zhajm_120972579930_/663000_/0_/34043119.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('4','42','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v42_/c27_/9_/25_/ldxy_zr_/zhajm_121014630873x_/4058000_/0_/34390897.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('5','42','','0','6','0','0','','','','','0','1::::::http://www.56.com/n_v140_/c37_/7_/20_/caobianchuan_/zhajm_120972735554_/663000_/0_/34044799.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('6','42','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v166_/c33_/11_/4_/fireatice_/zhajm_120980636297x_/5095000_/0_/34111813.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('7','43','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v197_/c27_/2_/8_/wangtian8810_/zhajm_120739093088x_/13232000_/0_/32192534.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('8','43','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v197_/c34_/4_/20_/youaredog_/zhajm_120917959799x_/3504000_/0_/33581802.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('9','43','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v155_/c29_/22_/27_/huanghongbo1979_com_/zhajm_119711567541x_/11714000_/0_/24682270.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('10','43','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v162_/c29_/22_/29_/haoweide2007_/zhajm_119712015723x_/3533000_/0_/24686836.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('11','43','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v48_/c31_/20_/24_/beyond126915_/zhajm_119703281654x_/5534000_/0_/24603653.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('12','43','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v48_/c31_/18_/27_/huzaibing88_/zhajm_119711194575x_/3897000_/0_/24677934.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('13','44','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v198_/c24_/25_/27_/pfshi_/sc_118959187737_/900000_/0_/18604460.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('14','44','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v198_/c24_/26_/13_/pfshi_/sc_118959016912_/901000_/0_/18603069.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('15','44','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v198_/c24_/21_/23_/pfshi_/sc_118958849669_/901000_/0_/18601773.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('16','44','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v198_/c24_/5_/15_/pfshi_/sc_118958717160_/901000_/0_/18600687.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('17','44','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v163_/c25_/22_/20_/pfshi_/sc_118957770146_/845000_/0_/18597066.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('18','44','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v163_/c25_/17_/19_/pfshi_/sc_118957654828_/845000_/0_/18596095.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('19','45','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v152_/c11_/9_/12_/woshiwulai00_/zhajm_1176439727_85_/2609215_/0_/13227313.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('20','45','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v152_/c11_/9_/12_/woshiwulai00_/zhajm_1176439769_705_/2461640_/0_/13227328.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('21','45','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v152_/c11_/9_/12_/woshiwulai00_/zhajm_1176439805_509_/2575797_/0_/13227339.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('22','45','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v152_/c16_/29_/17_/woshiwulai00_/zhajm_1176439839_727_/380735_/0_/13227345.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('23','45','','0','6','0','0','','','','','0','1::::::http://www.56.com/n_v152_/c16_/5_/6_/woshiwulai00_/zhajm_1176442192_465_/2437510_/0_/13227981.swf::::::0::::::0::::::');");
E_D("replace into `phome_ecms_movie_data_1` values('24','45','','0','6','0','0','','','','','3','1::::::http://www.56.com/n_v152_/c16_/9_/12_/woshiwulai00_/zhajm_1176443377_629_/2602083_/0_/13228356.swf::::::0::::::0::::::');");

@include("../../inc/footer.php");
?>