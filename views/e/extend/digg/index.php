<?php
require ("../../class/connect.php");
$id = (int)$_GET['id'];
$classid = (int)$_GET['classid'];
$userid = (int)getcvar('mluserid');
if ($id && $classid) {
	include ("../../class/db_sql.php");
	include ("../../data/dbcache/class.php");
	$link = db_connect();
	$empire = new mysqlquery();
	$editor = 1;
	//验证用户是否登陆
	if (!$userid) {
		$arr = array('status' => 0, 'message' => "您尚未登陆！");
		echo json_encode($arr);
		die ;
	}
	//验证栏目是否存在
	if (empty($class_r[$classid][tbname])) {
		//$doajax==1?ajax_printerror('','','ErrorUrl',1):printerror('ErrorUrl','',1);
		$arr = array('status' => 0, 'message' => "栏目不存在！");
		echo json_encode($arr);
		die ;
	}
	//验证信息是否存在
	$num = $empire -> gettotal("select count(*) as total from {$dbtbpre}ecms_" . $class_r[$classid][tbname] . " where id='$id' and classid='$classid' limit 1");
	if (empty($num)) {
		$arr = array('status' => 0, 'message' => "信息不存在！");
		echo json_encode($arr);
		die ;
	}

	//验证是否顶过
	$num1 = $empire -> gettotal("select count(*) as total from {$dbtbpre}enewsdiggips where id='$id' and classid='$classid' and userid='$userid' limit 1");
	if ($num1) {
		$arr = array('status' => 0, 'message' => "您已经顶过或者踩过该信息！");
		echo json_encode($arr);
		die ;
	}

	//增加顶踩数
	$dotop = (int)$_GET['dotop'];
	$f = 'diggtop';
	$n = '+1';
	if ($dotop) {
		$mess = '谢谢您的支持！';
	} else {
		if ($fnum == 2) {
			$f = 'diggdown';
		} else {
			$n = '-1';
		}
		$mess = '你踩了一下';
	}
	$sql = $empire -> query("update {$dbtbpre}ecms_" . $class_r[$classid][tbname] . " set " . $f . "=" . $f . $n . " where id='$id'");

	//插入顶踩数据到数据库
	$ip = egetip();
	$usql = $empire -> query("insert into {$dbtbpre}enewsdiggips(id,classid,ips,userid,dotop) values('$id','$classid','$ip','$userid','$dotop');");

	if ($sql) {
		$arr = array('status' => 1, 'message' => $mess);
		echo json_encode($arr);
		die ;
	} else {
		$arr = array('status' => 0, 'message' => "数据库操作错误！");
		echo json_encode($arr);
		die ;
	}
} else {
	$arr = array('status' => 0, 'message' => "参数传递错误！");
	echo json_encode($arr);
	die ;
}
?>