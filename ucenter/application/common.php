<?php

/**
 * 数组层级缩进转换
 * @param array $array
 * @param int   $pid
 * @param int   $level
 * @return array
 */
function array2level($array,$pid=0,$id=0,$level=1) {        
    static $list = [];
    foreach($array as $v) {  
        if($v['pid'] == $id) {  
            $v['level'] = $level;
            $list[] = $v;
			array2level($array, $v['pid'],$v['id'], $level + 1);
        }  
    }  
    return $list;
}  

/**
 * 构建层级（树状）数组
 * @param array  $array 要进行处理的一维数组，经过该函数处理后，该数组自动转为树状数组
 * @param string $pid 父级ID的字段名
 * @param string $child_key_name 子元素键名
 * @return array|bool
 */
function array2tree(&$array, $pid = 'pid', $child_key_name = 'children') {
    $counter = array_children_count($array, $pid);
    if ($counter[0] == 0)
        return false;
    $tree = [];
    while (isset($counter[0]) && $counter[0] > 0) {
        $temp = array_shift($array);
        if (isset($counter[$temp['id']]) && $counter[$temp['id']] > 0) {
            array_push($array, $temp);
        } else {
            if ($temp[$pid] == 0) {
                $tree[] = $temp;
            } else {
                $array = array_child_append($array, $temp[$pid], $temp, $child_key_name);
            }
        }
        $counter = array_children_count($array, $pid);
    }

    return $tree;
}

/**
 * 子元素计数器
 * @param $array
 * @param $pid
 * @return array
 */
function array_children_count($array, $pid) {
    $counter = [];
    foreach ($array as $item) {
        $count = isset($counter[$item[$pid]]) ? $counter[$item[$pid]] : 0;
        $count++;
        $counter[$item[$pid]] = $count;
    }

    return $counter;
}

/**
 * 把元素插入到对应的父元素$child_key_name字段
 * @param        $parent
 * @param        $pid
 * @param        $child
 * @param string $child_key_name 子元素键名
 * @return mixed
 */
function array_child_append($parent, $pid, $child, $child_key_name) {
    foreach ($parent as &$item) {
        if ($item['id'] == $pid) {
            if (!isset($item[$child_key_name]))
                $item[$child_key_name] = [];
            $item[$child_key_name][] = $child;
        }
    }

    return $parent;
}

/**
 * 循环删除目录和文件
 * @param string $dir_name
 * @return bool
 */
function delete_dir_file($dir_name) {
    $result = false;
    if(is_dir($dir_name)){
        if ($handle = opendir($dir_name)) {
            while (false !== ($item = readdir($handle))) {
                if ($item != '.' && $item != '..') {
                    if (is_dir($dir_name . DS . $item)) {
                        delete_dir_file($dir_name . DS . $item);
                    } else {
                        unlink($dir_name . DS . $item);
                    }
                }
            }
            closedir($handle);
            if (rmdir($dir_name)) {
                $result = true;
            }
        }
    }

    return $result;
}

/**
 * 判断是否为手机访问
 * @return  boolean
 */
function is_mobile() {
    static $is_mobile;

    if (isset($is_mobile)) {
        return $is_mobile;
    }

    if (empty($_SERVER['HTTP_USER_AGENT'])) {
        $is_mobile = false;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false
              || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
              || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
              || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
              || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
              || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
              || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false
    ) {
        $is_mobile = true;
    } else {
        $is_mobile = false;
    }

    return $is_mobile;
}
//取得IP
function egetip(){
	if(getenv('HTTP_CLIENT_IP')&&strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown')) 
	{
		$ip=getenv('HTTP_CLIENT_IP');
	} 
	elseif(getenv('HTTP_X_FORWARDED_FOR')&&strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown'))
	{
		$ip=getenv('HTTP_X_FORWARDED_FOR');
	}
	elseif(getenv('REMOTE_ADDR')&&strcasecmp(getenv('REMOTE_ADDR'),'unknown'))
	{
		$ip=getenv('REMOTE_ADDR');
	}
	elseif(isset($_SERVER['REMOTE_ADDR'])&&$_SERVER['REMOTE_ADDR']&&strcasecmp($_SERVER['REMOTE_ADDR'],'unknown'))
	{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	$ip=RepPostVar(preg_replace("/^([\d\.]+).*/","\\1",$ip));
	return $ip;
}

//取得端口
function egetipport(){
	$ipport=(int)$_SERVER['REMOTE_PORT'];
	return $ipport;
}

//htmlspecialchars处理
function ehtmlspecialchars($val,$flags=ENT_COMPAT){
	global $ecms_config;
	if(PHP_VERSION>='5.4.0')
	{
		if($ecms_config['sets']['pagechar']=='utf-8')
		{
			$char='UTF-8';
		}
		else
		{
			$char='ISO-8859-1';
		}
		$val=htmlspecialchars($val,$flags,$char);
	}
	else
	{
		$val=htmlspecialchars($val,$flags);
	}
	return $val;
}

//addslashes处理
function eaddslashes($val,$ckmq=1){
	if($ckmq==1&&MAGIC_QUOTES_GPC)
	{
		return $val;
	}
	$val=addslashes($val);
	return $val;
}

//addslashes处理
function eaddslashes2($val,$ckmq=1){
	if($ckmq==1&&MAGIC_QUOTES_GPC)
	{
		return addslashes($val);
	}
	$val=addslashes(addslashes($val));
	return $val;
}

//stripSlashes处理
function estripSlashes($val,$ckmq=1){
	if($ckmq==1&&!MAGIC_QUOTES_GPC)
	{
		return $val;
	}
	$val=stripSlashes($val);
	return $val;
}

//stripSlashes处理
function estripSlashes2($val,$ckmq=1){
	if($ckmq==1&&!MAGIC_QUOTES_GPC)
	{
		return stripSlashes($val);
	}
	$val=stripSlashes(stripSlashes($val));
	return $val;
}

//变量正数型处理
function RepPIntvar($val){
	$val=intval($val);
	if($val<0)
	{
		$val=0;
	}
	return $val;
}

//参数处理函数
function RepPostVar($val){
	if($val!=addslashes($val))
	{
		exit();
	}
	CkPostStrChar($val);
	$val=str_replace("%","",$val);
	$val=str_replace(" ","",$val);
	$val=str_replace("\t","",$val);
	$val=str_replace("%20","",$val);
	$val=str_replace("%27","",$val);
	$val=str_replace("*","",$val);
	$val=str_replace("'","",$val);
	$val=str_replace("\"","",$val);
	$val=str_replace("/","",$val);
	$val=str_replace(";","",$val);
	$val=str_replace("#","",$val);
	$val=str_replace("--","",$val);
	$val=RepPostStr($val,1);
	$val=addslashes($val);
	return $val;
}

//参数处理函数2
function RepPostVar2($val){
	if($val!=addslashes($val))
	{
		exit();
	}
	CkPostStrChar($val);
	$val=str_replace("%","",$val);
	$val=str_replace("\t","",$val);
	$val=str_replace("%20","",$val);
	$val=str_replace("%27","",$val);
	$val=str_replace("*","",$val);
	$val=str_replace("'","",$val);
	$val=str_replace("\"","",$val);
	$val=str_replace("/","",$val);
	$val=str_replace(";","",$val);
	$val=str_replace("#","",$val);
	$val=str_replace("--","",$val);
	$val=RepPostStr($val,1);
	$val=addslashes($val);
	//FireWall
	FWClearGetText($val);
	return $val;
}

//处理提交字符
function RepPostStr($val,$ecms=0){
	$val=ehtmlspecialchars($val,ENT_QUOTES);
	if($ecms==0)
	{
		CkPostStrChar($val);
		$val=AddAddsData($val);
		//FireWall
		FWClearGetText($val);
	}
	return $val;
}

//处理提交字符2
function RepPostStr2($val){
	CkPostStrChar($val);
	$val=AddAddsData($val);
	//FireWall
	FWClearGetText($val);
	return $val;
}


//处理编码字符
function CkPostStrChar($val){
	if(substr($val,-1)=="\\")
	{
		exit();
	}
}



//截取字数
function esub($string,$length,$dot='',$rephtml=0){
	return sub($string,0,$length,false,$dot,$rephtml);
}

//取得随机数
function make_password($pw_length){
	$i='';
	$password1='';
	$low_ascii_bound=48;
	$upper_ascii_bound=122;
	$notuse=array(58,59,60,61,62,63,64,91,92,93,94,95,96);
	while($i<$pw_length)
	{
		if(PHP_VERSION<'4.2.0')
		{
			mt_srand((double)microtime()*1000000);
		}
		$randnum=mt_rand($low_ascii_bound,$upper_ascii_bound);
		if(!in_array($randnum,$notuse))
		{
			$password1=$password1.chr($randnum);
			$i++;
		}
	}
	return $password1;
}

//取得随机数(数字)
function no_make_password($pw_length){
	$i='';
	$password1='';
	$low_ascii_bound=48;
	$upper_ascii_bound=57;
	$notuse=array(58,59,60,61,62,63,64,73,79,91,92,93,94,95,96,108,111);
	while($i<$pw_length)
	{
		if(PHP_VERSION<'4.2.0')
		{
			mt_srand((double)microtime()*1000000);
		}
		$randnum=mt_rand($low_ascii_bound,$upper_ascii_bound);
		if(!in_array($randnum,$notuse))
		{
			$password1=$password1.chr($randnum);
			$i++;
		}
	}
	return $password1;
}

