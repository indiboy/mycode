<?php
namespace app\ucenter\validate;

use think\Validate;

class Enewsmember extends Validate {
    protected $rule = [
        'userid'         => 'require',
        'checked'           => 'require',
    ];

    protected $message = [
        'userid.require'         => '参数传递错误',
        'checked.require'           => '请选择状态'
    ];
}