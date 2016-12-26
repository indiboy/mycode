<?php
namespace app\ucenter\model;

use think\Model;

class Login extends Model {

    protected $insert = ['registertime'];

    /**
     * 创建时间
     * @return bool|string
     */
    protected function setCreateTimeAttr() {
        return date('Y-m-d H:i:s');
    }
}