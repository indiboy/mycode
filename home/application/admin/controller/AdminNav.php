<?php
namespace app\admin\controller;

use app\admin\model\AdminNav as AdminNavModel;
use app\common\controller\AdminBase;
use think\Db;


/**
 * 导航管理
 * Class AuthNav
 * @package app\admin\controller
 */
class AdminNav extends AdminBase {

    protected $admin_nav_model;

    protected function _initialize() {
        parent::_initialize();
        $this->admin_nav_model = new AdminNavModel();
        $admin_nav_list        = $this->admin_nav_model->order(['sort' => 'DESC', 'id' => 'ASC'])->select();
        $admin_nav_level_list  = array2level($admin_nav_list);

        $this->assign('admin_nav_level_list', $admin_nav_level_list);
    }

    /**
     * 导航管理
     * @return mixed
     */
    public function index() {
        return $this->fetch();
    }

    /**
     * 添加导航
     * @param string $pid
     * @return mixed
     */
    public function add($pid = '') {
        return $this->fetch('add', ['pid' => $pid]);
    }

    /**
     * 保存导航
     */
    public function save() {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = $this->validate($data, 'AuthNav');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                if ($this->admin_nav_model->save($data)) {
                    $this->success('保存成功');
                } else {
                    $this->error('保存失败');
                }
            }
        }
    }

    /**
     * 编辑导航
     * @param $id
     * @return mixed
     */
    public function edit($id) {
        $nav = $this->admin_nav_model->find($id);

        return $this->fetch('edit', ['nav' => $nav]);
    }

    /**
     * 更新导航
     * @param $id
     */
    public function update($id) {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = $this->validate($data, 'AuthNav');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                if ($this->admin_nav_model->save($data, $id) !== false) {
                    $this->success('更新成功');
                } else {
                    $this->error('更新失败');
                }
            }
        }
    }

    /**
     * 删除导航
     * @param $id
     */
    public function delete($id) {
        $pid = AuthNavModel::get(['pid' => $id]);
        if (!empty($pid)) {
            $this->error('此分类下存在子分类，不可删除');
        }
        if ($this->admin_nav_model->destroy($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
}