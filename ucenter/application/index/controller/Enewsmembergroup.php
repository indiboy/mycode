<?php
namespace app\index\controller;

use app\index\model\Enewsmembergroup as EnewsmembergroupModel;
use app\index\model\AuthRule as AuthRuleModel;
use app\common\controller\UcenterBase;

/**
 * 权限组
 * Class Enewsmembergroup
 * @package app\admin\controller
 */
class Enewsmembergroup extends UcenterBase {
    protected $enewsmembergroup_model;
    protected $auth_rule_model;

    protected function _initialize() {
        parent::_initialize();
        $this->enewsmembergroup_model = new EnewsmembergroupModel();
        $this->auth_rule_model  = new AuthRuleModel();
    }

    /**
     * 权限组
     * @return mixed
     */
    public function index() {
        $enewsmembergroup_list = $this->enewsmembergroup_model->select();

        return $this->fetch('index', ['enewsmembergroup_list' => $enewsmembergroup_list]);
    }

    /**
     * 添加权限组
     * @return mixed
     */
    public function add() {
        return $this->fetch();
    }

    /**
     * 保存权限组
     */
    public function save() {
        if ($this->request->isPost()) {
            $data = $this->request->post();

            if ($this->enewsmembergroup_model->save($data) !== false) {
                $this->success('保存成功');
            } else {
                $this->error('保存失败');
            }
        }
    }

    /**
     * 编辑权限组
     * @param $groupid
     * @return mixed
     */
    public function edit($groupid) {
        $enewsmembergroup = $this->enewsmembergroup_model->find($groupid);

        return $this->fetch('edit', ['enewsmembergroup' => $enewsmembergroup]);
    }

    /**
     * 授权
     * @param $groupid
     * @return mixed
     */
    public function auth($groupid) {
        return $this->fetch('auth', ['groupid' => $groupid]);
    }

    /**
     * AJAX获取规则数据
     * @param $groupid
     * @return mixed
     */
    public function getJson($groupid) {
        $enewsmembergroup_data = $this->enewsmembergroup_model->find($groupid)->toArray();
        $auth_rules      = explode(',', $enewsmembergroup_data['rules']);
		$auth_rule_list  = $this->auth_rule_model->field('id,pid,title')->select();
		
		foreach ($auth_rule_list as $key => $value) {
            in_array($value['id'], $auth_rules) && $auth_rule_list[$key]['checked'] = true;
        }
		
        return $auth_rule_list;
    }

    /**
     * 更新权限组规则
     * @param $groupid
     * @param $auth_rule_ids
     */
    public function updateAuthGroupRule($groupid='1', $auth_rule_ids = '') {
        if ($this->request->isPost()) {
            if ($groupid) {
                $group_data['groupid']    = $groupid;
                $group_data['rules'] = is_array($auth_rule_ids) ? implode(',', $auth_rule_ids) : '';

                if ($this->enewsmembergroup_model->save($group_data, $groupid) !== false) {
                    $this->success('授权成功');
                } else {
                    $this->error('授权失败');
                }
            }
        }
    }
}