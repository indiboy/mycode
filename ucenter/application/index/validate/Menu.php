<?php
namespace app\index\validate;

use think\Validate;

class Menu extends Validate {
    protected $rule = [
        'bclassid'   => 'require',
        'classname' => 'require',
        'name'  => 'require',
        'myorder'  => 'require|number'
    ];

    protected $message = [
        'bclassid.require'   => '请选择上级菜单',
        'classname.require' => '请输入菜单名称',
        'name.require'  => '请输入控制器方法',
        'myorder.require'  => '请输入排序',
        'myorder.number'   => '排序只能填写数字'
    ];
}