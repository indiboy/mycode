<?php
namespace app\common\controller;

use think\auth\Auth;
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
class UcenterBase extends Controller {

    protected function _initialize() {
        parent::_initialize();

        $this->checkAuth();
        $this->getMenu();

        // 输出当前请求控制器（配合后台侧边菜单选中状态）
        $this->assign('controller', Loader::parseName($this->request->controller()));
    }

    /**
     * 权限检查
     * @return bool
     */
    protected function checkAuth() {

        if (!Session::has('enewsmember_userid')) {
            $this->redirect('index/login/index');
        }

        $module     = $this->request->module();
        $controller = $this->request->controller();
        $action     = $this->request->action();

        // 排除权限
        $not_check = ['index/Index/index', 'index/AuthGroup/getjson', 'index/System/clear'];

        if (!in_array($module . '/' . $controller . '/' . $action, $not_check)) {
            $auth     = new Auth();
            $enewsmember_userid = Session::get('enewsmember_userid');
            if (!$auth->check($module . '/' . $controller . '/' . $action, $enewsmember_userid) && $enewsmember_userid != 1) {
                $this->error('没有权限');
            }
        }
    }

    /**
     * 获取侧边栏菜单
     */
    protected function getMenu() {
        $menu     = [];
        $enewsmember_userid = Session::get('enewsmember_userid');
        $auth     = new Auth();
        $auth_rule_list = Db::name('auth_rule')->where('status', 1)->order(['sort' => 'desc', 'id' => 'asc'])->select();
        $userinfo = Db::name('enewsmemberadd')->find($enewsmember_userid);
        foreach ($auth_rule_list as $value) {
            if ($auth->check($value['name'], $enewsmember_userid) || $enewsmember_userid == 1) {
                $menu[] = $value;
            }
        }
		$nav =  Db::name('auth_nav')->where('status', 1)->order(['sort' => 'desc', 'id' => 'asc'])->select();
        $menu = !empty($menu) ? array2tree($menu) : [];
        $this->assign('userinfo', $userinfo);
		$this->assign('nav', $nav);
        $this->assign('menu', $menu);
    }
}