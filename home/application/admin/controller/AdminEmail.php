<?php
namespace app\admin\controller;

use app\admin\model\AdminEmail as AdminEmailModel;
use app\common\controller\AdminBase;
use think\Db;
use mailer\tp5\Mailer;

/**
 * 邮件发送
 * Class Email
 * @package app\admin\controller
 */
class AdminEmail extends AdminBase {
    protected $admin_email_model;

    protected function _initialize() {
        parent::_initialize();
        $this->admin_email_model = new AdminEmailModel();
        $admin_email_list        = $this->admin_email_model->order(['sort' => 'DESC', 'id' => 'ASC'])->select();
        $admin_email_level_list  = array2level($admin_email_list);

        $this->assign('admin_email_level_list', $admin_email_level_list);
    }

    /**
     * 邮件模板
     * @return mixed
     */
    public function index() {
        return $this->fetch();
    }

    /**
     * 邮件测试
     * @return mixed
     */
    public function test() {
        return $this->fetch();
    }

    /**
     * 邮件测试
     * @return mixed
     */
    public function dotest() {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = true;

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                $mailer = Mailer::instance();
                $mailer->from('tianpian0805@gmail.com', 'yuan1994')
                    ->to('your-mail@domain.com')
                    ->subject('纯文本测试')
                    ->text('欢迎您使用Tp Mailer')
                    ->send();
            }
        }
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
            $validate_result = $this->validate($data, 'AdminEmail');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                if ($this->admin_email_model->save($data)) {
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
        $email = $this->admin_email_model->find($id);

        return $this->fetch('edit', ['email' => $email]);
    }

    /**
     * 更新导航
     * @param $id
     */
    public function update($id) {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = $this->validate($data, 'AdminEmail');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                if ($this->admin_email_model->save($data, $id) !== false) {
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
        $pid = AdminEmailModel::get(['pid' => $id]);
        if (!empty($pid)) {
            $this->error('此分类下存在子分类，不可删除');
        }
        if ($this->admin_email_model->destroy($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

}