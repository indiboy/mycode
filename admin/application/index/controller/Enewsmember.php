<?php
namespace app\index\controller;

use app\index\model\Enewsmember as EnewsmemberModel;
use app\common\controller\UcenterBase;
use think\Config;
use think\Db;
/**
 * 用户管理
 * Class AdminUser
 * @package app\index\controller
 */
class Enewsmember extends UcenterBase {

    protected function _initialize() {
        parent::_initialize();
        $this->enewsmember_model = new EnewsmemberModel();
    }

    /**
     * 用户管理
     * @param string $keyboard
     * @param int    $page
     * @return mixed
     */
    public function index($keyboard = '', $page = 1) {
        $map = [];
        if ($keyboard) {
            $map['username|email'] = ['like', "%{$keyboard}%"];
        }
        $enewsmember_list = $this->enewsmember_model->where($map)->order('userid DESC')->paginate(15, false, ['page' => $page]);
         return $this->fetch('index', ['enewsmember_list' => $enewsmember_list, 'keyboard' => $keyboard]);
    }

    /**
     * 添加用户
     * @return mixed
     */
    public function add() {
        return $this->fetch();
    }

    /**
     * 保存用户
     */
    public function save() {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = $this->validate($data, 'Enewsmember');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                $data['password'] = md5($data['password'] . Config::get('salt'));
                if ($this->enewsmember_model->allowField(true)->save($data)) {
                    $this->success('保存成功');
                } else {
                    $this->error('保存失败');
                }
            }
        }
    }

    /**
     * 编辑用户
     * @param $userid
     * @return mixed
     */
    public function edit($userid) {
        $enewsmember = $this->enewsmember_model->find($userid);

        return $this->fetch('edit', ['user' => $enewsmember]);
    }

    /**
     * 更新用户
     * @param $userid
     */
    public function update($userid) {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = $this->validate($data, 'User');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                $enewsmember           = $this->enewsmember_model->find($userid);
                $enewsmember->id       = $userid;
                $enewsmember->username = $data['username'];
                $enewsmember->mobile   = $data['mobile'];
                $enewsmember->email    = $data['email'];
                $enewsmember->status   = $data['status'];
                if (!empty($data['password']) && !empty($data['confirm_password'])) {
                    $enewsmember->password = md5($data['password'] . Config::get('salt'));
                }
                if ($enewsmember->save() !== false) {
                    $this->success('更新成功');
                } else {
                    $this->error('更新失败');
                }
            }
        }
    }

    /**
     * 删除用户
     * @param $userid
     */
    public function delete($userid) {
        if ($this->enewsmember_model->destroy($userid)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
}
