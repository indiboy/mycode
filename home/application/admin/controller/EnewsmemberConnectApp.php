<?php
namespace app\admin\controller;

use app\admin\model\EnewsmemberConnectApp as EnewsmemberConnectAppModel;
use app\common\controller\AdminBase;
use think\Db;

/**
 * 邮件发送
 * Class EnewsmemberConnectApp
 * @package app\admin\controller
 */
class EnewsmemberConnectApp extends AdminBase{
    protected $enewsmember_connect_app;

    protected function _initialize()
    {
        parent::_initialize();
        $this->enewsmember_connect_app = new EnewsmemberConnectAppModel();
        $enewsmember_connect_app_list = $this->enewsmember_connect_app->order([ 'id' => 'ASC'])->select();
        $enewsmember_connect_app_level_list = $enewsmember_connect_app_list;

        $this->assign('enewsmember_connect_app_level_list', $enewsmember_connect_app_level_list);
    }

    /**
     * 邮件模板
     * @return mixed
     */
    public function index()
    {
        return $this->fetch();
    }
}
