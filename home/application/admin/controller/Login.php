<?php
namespace app\admin\controller;

use think\Config;
use think\Controller;
use think\Db;
use think\Session;
use think\Cookie;
/**
 * 后台登录
 * Class Login
 * @package app\index\controller
 */
class Login extends Controller {
    /**
     * 后台登录
     * @return mixed
     */
    public function index() {
        return $this->fetch();
    }
	

    /**
     * 登录验证
     * @return string
     */
    public function login() {
        if($this->request->isPost()){
            $data            = $this->request->only(['username', 'password', 'lifetime', 'ecmsfrom', 'verify']);
            $validate_result = $this->validate($data, 'Login');
            if ($validate_result !== true) {
                $this->error($validate_result);
            } else {
                $where['username'] = $data['username'];
                $enewsuser = Db::name('enewsuser')->field('userid,groupid,username,checked,loginnum,loginnum,password,salt,salt2')->where($where)->find();
                $ch_password=DoEmpireCMSAdminPassword($data['password'],$enewsuser['salt'],$enewsuser['salt2']);
                if (!empty($enewsuser)) {
                    if ($enewsuser['checked'] == 1) {
                        $this->error('当前用户已禁用');
                    }elseif($enewsuser['password']!=$ch_password) {
                        $this->error('密码错误');
                    }else {
                        $rnd=make_password(20);//取得随机密
						Db::name('enewsuser')
						    ->where('userid',$enewsuser['userid'])
						    ->update(['rnd' => $rnd,'groupid'=>$enewsuser['groupid']]);
						$lifetime=(int)$data['lifetime'];
						$logincookie=0;
						if($lifetime)
						{
						   $logincookie=time()+$lifetime;
						}
						Session::set('enewsuser_userid', $enewsuser['userid']);
                        Session::set('enewsuser_groupid', $enewsuser['groupid']);
						Session::set('enewsuser_username', $enewsuser['username']);
						Session::set('enewsuser_rnd', $rnd);
						Session::set('expire', $logincookie);
						Session::set('returnurl', $data['ecmsfrom']);

                        Db::name('enewsuser')->update(
                            [
                                'userid' => $enewsuser['userid'],
                                'lasttime' => time(),
                                'lastip' => egetip(),
                                'lastipport' => egetipport(),
                                'loginnum' => $enewsuser['loginnum']+1
                            ]
                        );
						
						$returnurl = Cookie::get('returnurl');
						if(!$returnurl){
							$returnurl = 'admin/index/index';
						}
                        $this->success('登录成功', $returnurl);
                    }
                } else {
                    $this->error('用户名或密码错误');
                }
            }
        }
    }

    /**
     * 退出登录
     */
    public function logout() {
        Session::delete('enewsuser_userid');
        Session::delete('enewsuser_groupid');
		Session::delete('enewsuser_username');
        Session::delete('enewsuser_rnd');
		Session::delete('expire');
        $this->success('退出成功', 'admin/login/index');
    }
}