<?php
namespace app\ucenter\controller;

use app\ucenter\model\AuthCart as AuthCartModel;
use app\common\controller\UcenterBase;
use think\Db;


/**
 * 导航管理
 * Class AuthNav
 * @package app\admin\controller
 */
class AuthCart extends UcenterBase{

    protected $auth_cart_model;

    protected function _initialize()
    {
        parent::_initialize();
        $this->auth_cart_model = new AuthCartModel();
        $map = [];
        $map['status'] = 1;
        $cart_list =
            Db::view('auth_cart','id,,classid,status,buy_num')
                ->view('ecms_shop','title,ftitle,titlepic,tprice,price','auth_cart.id=ecms_shop.id')
                ->where($map)
                ->order('update_time DESC');
        $cart_level_list = array2level($cart_list);
        $this->assign('cart_level_list', $cart_level_list);
    }

    /**
     * 购物车管理
     * @return mixed
     */
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 提交购物车
     * @return mixed
     */
    public function save() {
        if ($this->request->isPost()) {
            $data            = $this->request->post();
            $validate_result = $this->validate($data, 'AuthCart');

            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                if ($this->auth_cart_model->save($data)) {
                    $this->success('保存成功');
                } else {
                    $this->error('保存失败');
                }
            }
        }
    }

    /**
     * 删除购物车商品
     * @return mixed
     */
    public function delete($id) {
        if ($this->auth_cart_model->destroy($id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
}