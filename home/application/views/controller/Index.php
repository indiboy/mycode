<?php
namespace app\views\controller;

use app\common\controller\ViewsBase;
use think\Db;

class Index extends ViewsBase{
    public function index() {
        return $this->fetch();
    }
    public function lists() {
        return $this->fetch();
    }
    public function show($classid = '',$id = '',$page = '') {
        if (!$classid || !$id ){
            $this->error('来源错误！');
        }

        $mid=returnTable($classid,'modid');
        $tbname=returnTable($classid,'tbname');

        if(!$classid||!$id||!$mid||!$tbname||infoIsInTable($tbname))
        {
            $this->error('此信息不存在！');
        }

        $r = Db::name('ecms_'.$tbname)->where('id',$id)->find();
        if(!$r['id']||$classid!=$r['classid'])
        {
            $this->error('此信息不存在！');
        }

        //外部链接
        if($r['isurl'])
        {
            $titleurl=$r['titleurl'];
            Header("Location:$titleurl");
            exit();
        }

        //更新点击
        Db::name('ecms_'.$tbname)
            ->where('id', $id)
            ->setInc('onclick');
        $enewsmember = Db::name('enewsmember')->where('userid',$r['userid'])->find();
        $enewsmemberadd = Db::name('enewsmemberadd')->where('userid',$r['userid'])->find();
        $userinfo = array_merge($enewsmember,$enewsmemberadd);
        $phome_ecms_data_z = Db::name('ecms_'.$tbname)->where('id',$id)->find();
        $phome_ecms_data_f = Db::name('ecms_'.$tbname.'_data_'.$r['stb'])->where('id',$id)->find();
        $phome_ecms_data = array_merge($phome_ecms_data_z,$phome_ecms_data_f);
        return $this->fetch($tbname, ['phome_ecms_data' => $phome_ecms_data,'userinfo' => $userinfo]);
    }
}
