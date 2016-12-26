<?php
namespace app\common\controller;

use think\Loader;
use think\Cache;
use think\Controller;
use think\Db;
use think\Session;

/**
 * 后台公用基础控制器
 * Class UcenterBase
 * @package app\common\controller
 */
class AdminBase extends Controller {

    protected function _initialize() {
        parent::_initialize();

        $this->checkAdmin();
        $this->getAdminMenu();
        $this->assign('controller', Loader::parseName($this->request->controller()));
    }

    /**
     * 权限检查
     * @return bool
     */
    protected function checkAdmin() {
        if (!Session::has('enewsuser_userid')) {
            $this->redirect('admin/login/index');
        }
    }

    /**
     * 获取侧边栏菜单
     */
    protected function getAdminMenu() {
        $adminmenu     = [];
        $enewsuser_userid = Session::get('enewsuser_userid');
        $admin_rule_list = Db::name('admin_rule')->where('status', 1)->order(['id' => 'asc', 'sort' => 'asc'])->select();
        $userinfo = Db::name('enewsuser')->find($enewsuser_userid);
        foreach ($admin_rule_list as $value) {
            if ($enewsuser_userid == 1) {
                $adminmenu[] = $value;
            }
        }
        $admin_nav =  Db::name('admin_nav')->where('status', 1)->order(['sort' => 'asc', 'id' => 'asc'])->select();
        $adminmenu = !empty($adminmenu) ? array2tree($adminmenu) : [];
        $this->assign('userinfo', $userinfo);
        $this->assign('admin_nav', $admin_nav);
        $this->assign('adminmenu', $adminmenu);
    }
}