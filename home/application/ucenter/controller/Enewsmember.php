<?php
namespace app\ucenter\controller;

use app\ucenter\model\Enewsmember as EnewsmemberModel;
use app\common\controller\UcenterBase;
use think\Config;
use think\Db;
/**
 * 用户管理
 * Class Enewsmember
 * @package app\ucenter\controller
 */
class Enewsmember extends UcenterBase {
 
    protected $enewsmember_model;

    protected function _initialize() {
        parent::_initialize();
        $this->enewsmember_model = new EnewsmemberModel();
    }
	
	public function profile()
    {
        return $this->hasOne('Enewsmemberadd','userid')->field('userid');;
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
		$enewsmember_list = 
		Db::view('enewsmember','userid,username,email,checked,registertime')
    		->view('enewsmemberadd','truename,phone,lasttime,lastip,loginnum,lastipport','enewsmember.userid=enewsmemberadd.userid')
    		->where($map)
			->order('userid DESC')
    		->paginate(15, false, ['page' => $page]);
        return $this->fetch('index', ['enewsmember_list' => $enewsmember_list, 'keyboard' => $keyboard]);
    }
	
	/**
     * 编辑用户
     * @param $userid
     * @return mixed
     */
    public function edit($userid) {
        $enewsmember = $this->enewsmember_model->find($userid);

        return $this->fetch('edit', ['enewsmember' => $enewsmember]);
    }
	
	/**
     * 更新用户
     * @param $userid
     */
    public function update($userid) {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = $this->validate($data, 'Enewsmember');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                $enewsmember           = $this->enewsmember_model->find($userid);
                $enewsmember->userid       = $userid;
                $enewsmember->checked   = $data['checked'];
                if ($enewsmember->save() !== false) {
                    $this->success('更新成功');
                } else {
                    $this->error('更新失败');
                }
            }
        }
    }
	
	
}
