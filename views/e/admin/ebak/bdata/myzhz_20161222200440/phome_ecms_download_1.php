<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_download`;");
E_C("CREATE TABLE `phome_ecms_download` (
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
  `softfj` varchar(255) NOT NULL DEFAULT '',
  `language` varchar(16) NOT NULL DEFAULT '',
  `softtype` varchar(16) NOT NULL DEFAULT '',
  `softsq` varchar(16) NOT NULL DEFAULT '',
  `star` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `filesize` varchar(16) NOT NULL DEFAULT '',
  `softsay` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_download` values('1','38','0','0','0','0','','1','2','test','0','0','0','0','0','0','0','1355124442','1355124442','1','0','0','','/views/download/system/1.html','1','1','1','WinRAR','WinRAR 3.71 官方简体中文版','1355124442','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国外软件','共享软件','2','.exe','1215 KB','流行好用的压缩工具，支持鼠标拖放及外壳扩展，完美支持 ZIP 档案，内置程序可以解开 CAB、ARJ、LZH、TAR、GZ、ACE、UUE、BZ2、JAR、ISO 等多种类型的压缩文件；具有估计压缩功能，你可以在压缩文件之前得到用 ZIP 和 RAR 两种压缩工具各三种压缩方式下的大概压缩率；具有历史记录和收藏夹功能；压缩率相当高，而资源占用相对较少、固定压缩、多媒体压缩和多卷自释放压缩是大多压缩工具所不具备的；使用非常简单方便，配置选项不多，仅在资源管理器中就可以完成你想做的工作；对于 ZIP 和 RAR 的自释放档案文件( DOS 和 WINDOWS 格式均可)，点击属性就可以轻易知道此文件的压缩属性，如果有注释，还能在属性中查看其内容。新版更加强了 NT/2000 在信息安全和数据流方面的功能，并对不同的需要保存不同的压缩配置。 \r\n');");
E_D("replace into `phome_ecms_download` values('2','38','0','0','0','0','','2','2','test','0','0','0','0','0','0','0','1355124443','1355124443','1','0','0','','/views/download/system/2.html','1','1','1','输入法','搜狗拼音输入法 3.3 正式版','1355124443','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','免费软件','2','.exe','11382KB',' 搜狗拼音输入法是当前网上最流行、用户好评率最高、功能最强大的拼音输入法，并且承诺永久免费、绝无插件。\r\n          搜狗输入法与传统输入法不同的是，采用了搜索引擎技术，是第二代的输入法。由于采用了搜索引擎技术，输入速度有了质的飞跃，在词库的广度、词语的准确度上，搜狗输入法都远远领先于其他输入法。同时，搜狗输入法以输入法领域内前所未有的速度，在10个月内发布了10个版本。几乎每一个版本都进行了多项重大改进。搜狗输入法诞生于2006年6月。经过一年多的飞速发展，搜狗输入法目前在词库、智能组词、高级功能、易用性设计、外观上都全面超过了其他所有输入法。\r\n');");
E_D("replace into `phome_ecms_download` values('3','38','0','0','0','0','','3','2','test','0','0','0','0','0','0','0','1355124444','1355124444','1','0','0','','/views/download/system/3.html','1','1','1','输入法','万能五笔输入法平台 7.45','1355124444','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','免费软件','2','.exe','14813 KB','万能五笔EXE外挂7.45版输入法平台：你会五笔，打五笔；你会拼音，打拼音；会英语打英语；不会拼音不会英语，打笔画,你想什么就打什么，而且是一种优先选择五笔字型高速输入为主的快速输入法，各种输入法随意使用，无需转换，随心所欲，易学好用。\r\n');");
E_D("replace into `phome_ecms_download` values('4','38','0','0','0','0','','4','2','test','0','0','0','0','0','0','0','1355124445','1355124445','1','0','0','','/views/download/system/4.html','1','1','1','Adobe','Adobe Reader 8.1.2 简体中文版','1355124445','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国外软件','共享软件','2','.exe','40767 KB','PDF (Portable Document Format) 文件格式是电子发行文档的事实上的标准，Adobe Acrobat Reader 是一个查看、阅读和打印 PDF 文件的最佳工具。而且它是免费的。新版增加了两个 Acrobat plugs-ins (Acrobat Search and AutoIndx)，它可以在硬盘、CD 和局域网中搜索用 Acrobat Catalog tool 创建了索引文件的多个 PDF 文件。');");
E_D("replace into `phome_ecms_download` values('5','38','0','0','0','0','','5','2','test','0','0','0','0','0','0','0','1355124446','1355124446','1','0','0','','/views/download/system/5.html','1','1','1','','超级兔子魔法设置','1355124446','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','共享软件','2','.exe','20957 KB','超级兔子是一个完整的系统维护工具，可能清理你大多数的文件、注册表里面的垃圾，同时还有强力的软件卸载功能，专业的卸载可以清理一个软件在电脑内的所有记录。 \r\n\r\n超级兔子共有9大组件，可以优化、设置系统大多数的选项，打造一个属于自己的Windows。超级兔子上网精灵具有IE修复、IE保护、恶意程序检测及清除工能，还能防止其它人浏览网站，阻挡色情网站，以及端口的过滤。 \r\n');");
E_D("replace into `phome_ecms_download` values('6','38','0','10','0','1','','6','2','test','0','0','0','0','0','0','0','1355124447','1355124447','1','0','0','','/views/download/system/6.html','1','1','1','编辑软件','UltraEdit-32 14.00a+2 官方简体中文版','1355124447','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国外软件','共享软件','2','.zip','11460 KB',' IDM Computer Solutions公司出品的著名文本编辑器UltraEdit发布了最新的10.0版本，相应的官方汉化版也已经推出。 这款功能强大的文本编辑器，可以编辑文字、Hex、ASCII码，可以取代记事本，内建英文单字检查、C++ 及 VB 指令突显，可同时编辑多个文件，而且即使开启很大的文件速度也不会慢。最新版本的软件修正了老版本存在的一些Bug，并新增了对安全FTP（SFTP）的支持，整合了CSE HTML Validator，增添了新的宏命令等二十余项新功能。');");
E_D("replace into `phome_ecms_download` values('7','39','0','0','0','0','','7','2','test','0','0','0','0','0','0','0','1355124448','1355124448','1','0','0','','/views/download/netsoft/7.html','1','1','1','浏览器','傲游(Maxthon) 浏览器 1.6.2 build 60 增强版','1355124448','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','共享软件','2','.exe','2015 KB','游 [Maxthon] 浏览器 是一款基于 IE 内核的、多功能、个性化多页面浏览器。 它允许在同一窗口内打开任意多个页面， 减少浏览器对系统资源的占用率， 提高网上冲浪的效率。 同时它又能有效防止恶意插件， 阻止各种弹出式， 浮动式广告，加强网上浏览的安全。 Maxthon 支持各种外挂工具及 IE 插件， 使你在 Maxthon 中可以充分利用所有的网上资源， 享受上网冲浪的乐趣。\r\n');");
E_D("replace into `phome_ecms_download` values('8','39','0','0','0','0','','8','2','test','0','1','1','0','0','0','0','1355124449','1355124449','1','0','0','','/views/download/netsoft/8.html','1','1','1','下载工具','快车FlashGet 2.0 简体中文版','1355124449','/views/testdata/demopic/download/flashget.jpg','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','免费软件','2','.exe','6834 KB','快车2.0采用基于业界领先的MHT和P4S下载技术，完全改变了传统下载方式，下载速度是普通下载的8-10倍以上，跨越了HTTP、FTP、BT等常见协议和多种流媒体协议，快车2.0沿用了1系列UDCT技术全面保护您的硬盘；还有\\\\\"安全中心\\\\\"-嵌入式一键杀毒为您的下载保驾护航。\r\n');");
E_D("replace into `phome_ecms_download` values('9','39','0','0','0','0','','9','2','test','0','1','1','0','0','0','0','1355124450','1355124450','1','0','0','','/views/download/netsoft/9.html','1','1','1','QQ','腾讯QQ2008 贺岁版','1355124450','/views/testdata/demopic/download/qq.jpg','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','免费软件','2','.exe','24624 KB','腾讯QQ是深圳市腾讯计算机系统有限公司开发的一款基于Internet的即时通信（IM）软件。QQ界面如下图所示。腾讯QQ支持在线聊天、视频电话、点对点断点续传文件、共享文件、网络硬盘、自定义面板、QQ邮箱等多种功能。并可与移动通讯终端等多种通讯方式相连。您可以使用QQ方便、实用、高效的和朋友联系，而这一切都是免费的。 \r\n');");
E_D("replace into `phome_ecms_download` values('10','39','0','0','0','0','','10','2','test','0','0','0','0','0','0','0','1355124451','1355124451','1','0','0','','/views/download/netsoft/10.html','1','1','1','FTP','CuteFTP Pro 8.2.0 Build 04.01.2008.1','1355124451','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','英文','国外软件','共享软件','2','.exe','8174 KB','CuteFTP Pro是一个全新的商业级FTP客户端程序，其加强的文件传输系统能够完全满足今天的商家们的应用需求。这里文件通过构建于SSL或SSH2安全认证的客户机/服务器系统进行传输，为VPN、WAN、Extranet开发管理人员提供最经济的解决方案！企业再不需要为了一套安全的数据传输系统而进行破费了。此外，CuteFTP Pro还提供了Sophisticated Scripting、目录同步、自动排程、同时多站点连接、多协议支持（FTP、SFTP、HTTP、HTTPS）、智能覆盖、整合的HTML编辑器等功能特点以及更加快速的文件传输系统。 \r\n');");
E_D("replace into `phome_ecms_download` values('11','39','0','0','0','0','','11','2','test','0','0','0','0','0','0','0','1355124452','1355124452','1','0','0','','/views/download/netsoft/11.html','1','1','1','FTP','FlashFXP 3.6.0 Build 1240 Final','1355124452','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','汉化软件','共享软件','2','.exe','3108 KB','FlashFXP 是一个功能强大的 FXP/FTP 软件，融合了一些其他优秀FTP软件的优点，如像 CuteFTP 一样可以比较文件夹，支持彩色文字显示；像 BpFTP 支持多文件夹选择文件，能够缓存文件夹；像 LeapFTP 一样的外观界面，甚至设计思路也差相仿佛。支持文件夹(带子文件夹)的文件传送、删除；支持上传、下载及第三方文件续传；可以跳过指定的文件类型，只传送需要的文件；可以自定义不同文件类型的显示颜色；可以缓存远端文件夹列表，支持FTP代理及 Socks 3&4；具有避免空闲功能，防止被站点踢出；可以显示或隐藏“隐藏”属性的文件、文件夹；支持每个站点使用被动模式等。\r\n');");
E_D("replace into `phome_ecms_download` values('12','39','0','2','0','0','','12','2','test','0','0','0','0','0','0','0','1355124453','1355124453','1','0','0','','/views/download/netsoft/12.html','1','1','1','浏览器','腾讯TT浏览器(Tencent Traveler) 4.0','1355124453','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','免费软件','2','.exe','3010 KB','“腾讯TT”是一款多页面浏览器，具有亲切、友好的用户界面，提供多种皮肤供用户根据个人喜好使用，另外TT更是新增了多项人性化的特色功能，使上网冲浪变的更加轻松自如、省时省力：\r\n\r\n． 智能屏蔽一键开通 ． 最近浏览一键找回 \r\n． 多页面一键打开 ． 浏览记录一键清除 \r\n． 多种皮肤随心变换 ． 多线程高速旋风下载 \r\n');");
E_D("replace into `phome_ecms_download` values('13','40','0','0','0','0','','13','2','test','0','0','0','0','0','0','0','1355124454','1355124454','1','0','0','','/views/download/safe/13.html','1','1','1','杀毒','瑞星杀毒软件2008下载版（免费半年）','1355124454','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','共享软件','2','.exe','67106 KB','瑞星杀毒软件2008下载版，全功能免费使用半年！\r\n瑞星杀毒软件2008下载版是基于新一代虚拟机脱壳引擎、采用三层主动防御策略开发的新一代信息安全产品。瑞星08独创的“帐号保险柜”基于“主动防御”构架开发，可保护上百种流行软件的帐号，包括70 多款热门网游，30多种股票、网上银行类软件，QQ 、MSN等常用聊天工具及下载软件等。同时，瑞星08采用\\\\\"木马强杀\\\\\"、\\\\\"病毒DNA 识别\\\\\"、\\\\\"主动防御\\\\\"、\\\\\"恶意行为检测\\\\\"等大量核心技术，可有效查杀目前各种加壳、混合型及家族式木马病毒共约70万种。');");
E_D("replace into `phome_ecms_download` values('14','40','0','0','0','0','','14','2','test','0','0','0','0','0','0','0','1355124455','1355124455','1','0','0','','/views/download/safe/14.html','1','1','1','杀毒','金山毒霸2008杀毒套装','1355124455','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','免费软件','2','.exe','35413 KB','新功能增加以及产品改善：\r\n\r\n金山毒霸2008免费赠送37天病毒库升级服务。三月功能更新：\r\n\r\n1、发布针对机器狗的自保护驱动：\r\n发布针对机器狗的自保护驱动，使毒霸相关程序不会受机器狗的破坏,保障带毒环境下成功安装毒霸。\r\n\r\n2、发布上报模块：\r\n金山毒霸2008杀毒套装发布上报模块，增强系统安全。\r\n\r\n3、上报服务器调整：\r\n调整上报服务器，提高上报效率效率。\r\n');");
E_D("replace into `phome_ecms_download` values('15','40','0','0','0','0','','15','2','test','0','0','0','0','0','0','0','1355124456','1355124456','1','0','0','','/views/download/safe/15.html','1','1','1','防火墙','瑞星个人防火墙2008下载版（免费90天）','1355124456','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','免费软件','2','.exe','17243 KB','瑞星个人防火墙2008下载版，全功能免费试用90天！\r\n瑞星个人防火墙2008下载版针对目前流行的黑客攻击、钓鱼网站、网络色情等做了针对性的优化，采用未知木马识别、家长保护、反网络钓鱼、多账号管理、上网保护、模块检查、可疑文件定位、网络可信区域设置、IP攻击追踪等技术，可以帮助用户有效抵御黑客攻击、网络诈骗等安全风险。\r\n\r\n');");
E_D("replace into `phome_ecms_download` values('16','40','0','0','0','0','','16','2','test','0','0','0','0','0','0','0','1355124457','1355124457','1','0','0','','/views/download/safe/16.html','1','1','1','防火墙','傲盾DDoS防火墙 6.0 服务器安装版','1355124457','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','共享软件','2','.exe','8575 KB',' 此免费版本最大并发连接数8000,防护40M每秒DDOS + CC攻击 + UDP攻击,无时间限制. 防护各种SYN DDOS攻击,碎片攻击，UDP， ICMP，IGMP等flood攻击,空连接,SF各种漏洞攻击,DB系列漏洞攻击,CC,CC变种 ,代理攻击,肉鸡攻击,网络僵尸,教主,M2，等攻击。 \r\n    该免费版本完全满足网游站点,中小型WEB站点,BBS站点的安全需要.为您修筑一道不能被逾越的安全防线. \r\n');");
E_D("replace into `phome_ecms_download` values('17','40','0','0','0','0','','17','2','test','0','0','0','0','0','0','0','1355124458','1355124458','1','0','0','','/views/download/safe/17.html','1','1','1','杀毒','Norton Antivirus 2008 官方简体中文版','1355124458','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国外软件','共享软件','2','.exe','57136 KB','Symantec最新推出的诺顿防病毒软件2008（Norton AntiVirus）简体中文版，此版本保持了上一代产品的优势外，重新改写了80％的源代码，资源占用得到极大的改善，内存占用有效地控制在了10M－15M，全新后台扫描功能只占用很小的资源，可以在扫描的同时不影响您做自己的事情。');");
E_D("replace into `phome_ecms_download` values('18','40','0','0','0','0','','18','2','test','0','0','0','0','0','0','0','1355124459','1355124459','1','0','0','','/views/download/safe/18.html','1','1','1','防火墙','天网防火墙 3.0.0.1014 build0220 个人版','1355124459','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','共享软件','2','.exe','4339 KB','天网防火墙个人版（简称为天网防火墙）是由天网安全实验室研发制作给个人计算机使用的网络安全工具。它根据系统管理者设定的安全规则（Security Rules）把守网络，提供强大的访问控制、应用选通、信息过滤等功能。它可以帮你抵挡网络入侵和攻击，防止信息泄露，保障用户机器的网络安全。天网防火墙把网络分为本地网和互联网，可以针对来自不同网络的信息，设置不同的安全方案，它适合于任何方式连接上网的个人用户。\r\n');");
E_D("replace into `phome_ecms_download` values('19','41','0','0','0','0','','19','2','test','0','1','1','0','0','0','0','1355124460','1355124460','1','0','0','','/views/download/media/19.html','1','1','1','音频播放','千千静听 5.1.0 简体中文版','1355124460','/views/testdata/demopic/download/ttplayer.jpg','/WinNT/2000/XP/Win9X/Me/Unix/Linux','简体中文','国产软件','共享软件','2','.exe','2598 KB','千千静听是一款完全免费的音乐播放软件，集播放、音效、转换、歌词等众多功能于一身。其小巧精致、操作简捷、功能强大的特点，深得用户喜爱，被网友评为中国十大优秀软件之一，并且成为目前国内最受欢迎的音乐播放软件。\r\n    千千静听拥有自主研发的全新音频引擎，支持DirectSound、Kernel Streaming和ASIO等高级音频流输出方式、64比特混音、AddIn插件扩展技术，具有资源占用低、运行效率高，扩展能力强等特点。');");
E_D("replace into `phome_ecms_download` values('20','41','0','1','0','1','','20','2','test','0','0','0','0','0','0','0','1355124461','1355124461','1','0','0','','/views/download/media/20.html','1','1','1','音频播放','酷我歌词 1.2.1','1355124461','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','共享软件','2','.exe','1334 KB','酷我歌词是一款小巧精致的软件。它帮助您在欣赏音乐的时候进行歌词的同步展示。动听的歌曲，打动您的不只是旋律，如果有歌词在同步展示，岂不更加美妙！无论您是在欣赏歌曲还是在练习歌唱，酷我歌词都将丰富您的音乐体验，使您的数字音乐生活更加惬意。\r\n');");
E_D("replace into `phome_ecms_download` values('21','41','0','0','0','0','','21','2','test','0','0','0','0','0','0','0','1355124462','1355124462','1','0','0','','/views/download/media/21.html','1','1','1','视频播放','暴风影音3.5','1355124462','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','共享软件','2','.exe','35601 KB','暴风影音 ——全球领先的万能播放软件\r\n针对不同用户的“文件属性+系统环境”进行单独分析，首创千万级用户 “一对一贴心服务”。\r\n---------------------\r\n支持最新Vista操作系统\r\n---------------------\r\n极致万能    新增58种，总计支持429种格式\r\n- 新增:高清格式  支持高清硬件加速，全高清文件CPU占用10%以下\r\n- 新增:MKV格式   可进行多音频、多字幕的自由切换\r\n- 新增:硬件格式  支持最多数量的手持硬件设备视频文件');");
E_D("replace into `phome_ecms_download` values('22','41','0','1','0','0','','22','2','test','0','1','1','0','0','0','0','1355124463','1355124463','1','0','0','','/views/download/media/22.html','1','1','1','视频播放','Windows Media Player 11','1355124463','/views/testdata/demopic/download/media.jpg','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国外软件','免费软件','2','.exe','25174 KB','Windows Media Player 11 for Windows XP 为数字媒体提供无以伦比的选择和灵活性。使用它可以轻松管理计算机上的数字音乐库、数字照片库和数字视频库，并可以将它们同步到各种便携设备上，以便您可以随时随地欣赏它们。');");
E_D("replace into `phome_ecms_download` values('23','41','0','1','0','0','','23','2','test','0','0','0','0','0','0','0','1355124464','1355124464','1','0','0','','/views/download/media/23.html','1','1','1','视频播放','超级解霸','1355124464','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','共享软件','2','.exe','19963 KB','超级解霸3500.2.1全新Vsita 增强版 解霸系列软件最新版\r\n具有全编码格式以及影音互动的全面解决方案\r\n支持格式众多，新增50多种格式支持\r\n感受专业的播放\r\n超强纠错，高清影视——独门DIRECTDVD CD/CD技术，HDFT增益滤波高清影像技术\r\n最体贴的音频技术\r\n1、独创两声道环绕技术，可用一对普通音箱实现7.1环绕音场效果。\r\n2、SPDIF输出技术，支持AC-3硬解码系统，令家庭影院超强震撼。\r\n3、从影音文件分离声音数据，轻松把卡拉OK制成CD或MP3，还可随意提取电视电影主题曲。\r\n4、特有音箱软接线技术，不必插插拔拔，即可左右逢源。\r\n5、多种视频格式的自由声道控制。\r\n化腐朽为神奇，使模糊变清晰\r\n——独创领先国际的、使模糊图像变得更加清晰的、革命性的新技术\r\n');");
E_D("replace into `phome_ecms_download` values('24','41','0','0','0','0','','24','2','test','0','0','0','0','0','0','0','1355124465','1355124465','1','0','0','','/views/download/media/24.html','1','1','1','视频播放','MPCGo 2.5','1355124465','','/Win9X/Me/WinNT/2000/XP/Unix/Linux','简体中文','国产软件','免费软件','2','.exe','1744 KB','独有特点:\r\n1．主播放程序自动更新\r\n2．解码器模块自动更新  错容技术:\r\n3．多种播放器同时安装自动选择解码\r\n4．对影音文件进行自动修复  解码优化:\r\n5．多种解码器技术参数微调配合\r\n6．多解码器智能选择,减少资源消耗 ');");

@include("../../inc/footer.php");
?>