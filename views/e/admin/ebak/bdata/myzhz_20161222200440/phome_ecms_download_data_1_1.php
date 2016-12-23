<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_download_data_1`;");
E_C("CREATE TABLE `phome_ecms_download_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `softwriter` varchar(30) NOT NULL DEFAULT '',
  `homepage` varchar(80) NOT NULL DEFAULT '',
  `demo` varchar(120) NOT NULL DEFAULT '',
  `downpath` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_download_data_1` values('1','38','','0','2','0','0','','未知','http://','http://','下载地址1::::::http://www.winrar.com.cn/download/wrar371sc.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('2','38','','0','2','0','0','','','http://','http://','下载地址1::::::http://ime.sogou.com/dl/sogou_pinyin_33_3852.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('3','38','2','0','2','0','0','','','http://','http://','下载地址1::::::http://wbsoft.wn51.com/wnwb_745.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('4','38','','0','2','0','0','','','http://','http://','下载地址1::::::http://ardownload.adobe.com/pub/adobe/reader/win/8.x/8.1.2/chs/AdbeRdr812_zh_CN.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('5','38','','0','2','0','0','','','http://','http://','下载地址1::::::http://download.pctutu.com/soft/sr200804.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('6','38','','0','2','0','0','','','http://','http://','下载地址1::::::http://www.ultraedit.com/files/ue_chinese.zip::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('7','39','','0','2','0','0','','','http://','http://','下载地址1::::::http://maxthon.cachefly.net/mx_1.6.2.60cn.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('8','39','','0','2','0','0','','','http://','http://','下载地址1::::::http://down5.flashget.com/fgcn_101.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('9','39','','0','2','0','0','','','http://','http://','下载地址1::::::http://dl_dir.qq.com/qqfile/qq/QQ2008Spring/QQ2008Spring.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('10','39','','0','2','0','0','','','http://','http://','下载地址1::::::http://installer.globalscape.com/pub/cuteftppro/cuteftppro.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('11','39','10','0','2','0','0','','','http://','http://','下载地址1::::::http://www.hrtsea.com/soft/FlashFXP_3.6.0.1240_SC.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('12','39','7','0','2','0','0','','','http://','http://','下载地址1::::::http://dl_dir.qq.com/qqfile/tt/tt4.0setup.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('13','40','','0','2','0','0','','','http://','http://','下载地址1::::::http://download.rising.com.cn/Middle/RavolHJ.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('14','40','13','0','2','0','0','','','http://','http://','下载地址1::::::http://kad.www.duba.net/down/DUBA080429_NEWHUA_48_2.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('15','40','','0','2','0','0','','','http://','http://','下载地址1::::::http://download.rising.com.cn/Middle/RfwolHJ.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('16','40','15','0','2','0','0','','','http://','http://','下载地址1::::::http://data.aodun.com.cn/demo/aodunkfwdemo.rar::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('17','40','14,13','0','2','0','0','','','http://','http://','下载地址1::::::http://liveupdate.symantec.com/upgrade/NAV081500CS.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('18','40','16,15','0','2','0','0','','','http://','http://','下载地址1::::::http://pfw.sky.net.cn/tmp/SkynetPFW_Trial_Release_v3.0_Build0220_huajun.EXE::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('19','41','','0','2','0','0','','','http://','http://','下载地址1::::::http://wwwct.ttplayer.com/download/ttpsetup.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('20','41','','0','2','0','0','','','http://','http://','下载地址1::::::http://down.koowo.com/kuwo009.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('21','41','','0','2','0','0','','','http://','http://','下载地址1::::::http://dl.baofeng.com/storm3/Storm3_193.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('22','41','','0','2','0','0','','','http://','http://','下载地址1::::::http://download.microsoft.com/download/3/9/6/39691B06-7BFA-4736-89E4-2738E6023B6C/wmp11-windowsxp-x86-zh-cn.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('23','41','','0','2','0','0','','','http://','http://','下载地址1::::::http://www.haojie.cn/download/setup_3500.exe::::::0::::::0::::::');");
E_D("replace into `phome_ecms_download_data_1` values('24','41','','0','2','0','0','','','http://','http://','下载地址1::::::http://60.28.128.173/StormXSetup.exe::::::0::::::0::::::');");

@include("../../inc/footer.php");
?>