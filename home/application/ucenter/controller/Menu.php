<?php
namespace app\ucenter\controller;

use app\ucenter\model\AuthRule as AuthRuleModel;
use app\common\controller\UcenterBase;
use think\Db;

/**
 * 后台菜单
 * Class Menu
 * @package app\admin\controller
 */
class Menu extends UcenterBase {

    protected $auth_rule_model;

    protected function _initialize() {
        parent::_initialize();
        $this->auth_rule_model = new AuthRuleModel();
        $enewsmember_menu_list = $this->auth_rule_model->order(['sort' => 'ASC', 'id' => 'ASC'])->select();
        $enewsmember_menu_level_list = array2level($enewsmember_menu_list);

        $this->assign('enewsmember_menu_level_list', $enewsmember_menu_level_list);
    }

    /**
     * 后台菜单
     * @return mixed
     */
    public function index() {
        return $this->fetch();
    }

    /**
     * 添加菜单
     * @param string $pid
     * @return mixed
     */
    public function add($pid = '') {
        return $this->fetch('add', ['pid' => $pid]);
    }

    /**
     * 保存菜单
     */
    public function save() {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = $this->validate($data, 'Menu');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                if ($this->auth_rule_model->save($data)) {
                    $this->success('保存成功');
                } else {
                    $this->error('保存失败');
                }
            }
        }
    }

    /**
     * 编辑菜单
     * @param $id
     * @return mixed
     */
    public function edit($id) {
        $admin_menu = $this->auth_rule_model->find($id);

        return $this->fetch('edit', ['admin_menu' => $admin_menu]);
    }

    /**
     * 更新菜单
     * @param $id
     */
    public function update($id) {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = $this->validate($data, 'Menu');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                if ($this->auth_rule_model->save($data, $id) !== false) {
                    $this->success('更新成功');
                } else {
                    $this->error('更新失败');
                }
            }
        }
    }

    /**
     * 删除菜单
     * @param $id
     */
    public function delete($id) {
        $pid = AuthRuleModel::get(['pid' => $id]);
        if (!empty($pid)) {
            $this->error('此分类下存在子分类，不可删除');
        }
        if ($this->auth_rule_model->destroy($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
}
