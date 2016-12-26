<?php

use think\Db;

function infoIsInTable($tbname){
    $intb = Db::name('enewstable')->where('tbname',$tbname)->value('intb');
    return $intb==1?true:false;
}
function returnTable($classid,$dofield){
    $mid = Db::name('enewsclass')->where('classid',$classid)->value('modid');
    $tbname = Db::name('enewstable')->where('mid',$mid)->value('tbname');
    return $dofield=='modid'?$mid:$tbname;
}