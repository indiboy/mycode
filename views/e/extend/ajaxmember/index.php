<?php
//随机从file.txt文本文件中读取一行出来
$file = 'username.txt'; //文件位置; 
//是否存在
if(file_exists($file)){ 
$data = file($file); //将文件存放在一个数组中; 
$num = count($data); //条数; 
$id = mt_rand(0,$num-1); //随机数字; 
$username = chop($data[$id]); //显示第几行数据,并去除空格; 
}
header("Content-type:text/html;charset=utf-8");
echo $username; 
?>