<?php
namespace app\ucenter\validate;

use think\Validate;

class Enewsmember extends Validate {
    protected $rule = [
        'username'         => 'require|unique:user',
        'password'         => 'confirm:confirm_password',
        'confirm_password' => 'confirm:password',
        'mycall'           => 'number|length:11',
        'email'            => 'email',
        'checked'           => 'require',
    ];

    protected $message = [
        'username.require'         => '请输入用户名',
        'username.unique'          => '用户名已存在',
        'password.confirm'         => '两次输入密码不一致',
        'confirm_password.confirm' => '两次输入密码不一致',
        'mycall.number'            => '手机号格式错误',
        'mycall.length'            => '手机号长度错误',
        'email.email'              => '邮箱格式错误',
        'checked.require'           => '请选择状态'
    ];
}