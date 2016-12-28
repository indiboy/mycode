<?php
namespace app\ucenter\controller;

use think\Config;
use think\Controller;
use think\Db;
use think\Session;
use think\Cookie;
/**
 * 后台登录
 * Class Login
 * @package app\ucenter\controller
 */
class Register extends Controller {
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
    public function egister() {
        if($this->request->isPost()){
            $data            = $this->request->only(['username', 'password', 'lifetime', 'ecmsfrom', 'verify']);
            $validate_result = $this->validate($data, 'Login');r
            $where['username'] = $data['username'];
            $enewsmember = Db::name('enewsmember')->field('userid,password,salt')->where($where)->find();
            $ch_password=eDoCkMemberPw($data['password'],$enewsmember['password'],$enewsmember['salt'],2);
            if ($validate_result !== true) {
                $this->error($validate_result);
            }else if(!$ch_password) {
                $this->error('密码错误');
            } else {
                $where['username'] = $data['username'];
                $enewsmember = Db::name('enewsmember')->field('userid,groupid,username,checked')->where($where)->find();
                if (!empty($enewsmember)) {
                    if ($enewsmember['checked'] != 1) {
                        $this->error('当前用户已禁用');
                    } else {
                        $rnd=make_password(20);//取得随机密
                        Db::name('enewsmember')
                            ->where('userid',$enewsmember['userid'])
                            ->update(['rnd' => $rnd,'groupid'=>$enewsmember['groupid']]);
                        $lifetime=(int)$data['lifetime'];
                        $logincookie=0;
                        if($lifetime)
                        {
                            $logincookie=time()+$lifetime;
                        }
                        Session::set('enewsmember_userid', $enewsmember['userid']);
                        Session::set('enewsmember_groupid', $enewsmember['groupid']);
                        Session::set('enewsmember_username', $enewsmember['username']);
                        Session::set('enewsmember_rnd', $rnd);
                        Session::set('expire', $logincookie);
                        Session::set('returnurl', $data['ecmsfrom']);
                        //自动登录到帝国

                        $set1=esetcookie("mlusername",$data['username'],$logincookie);
                        $set2=esetcookie("mluserid",$enewsmember['userid'],$logincookie);
                        $set3=esetcookie("mlgroupid",$enewsmember['groupid'],$logincookie);
                        $set4=esetcookie("mlrnd",$rnd,$logincookie);
                        $set4=esetcookie("returnurl",$data['ecmsfrom']);

                        $enewsmemberadd = Db::name('enewsmemberadd')->field('userid,loginnum')->where('userid',$enewsmember['userid'])->find();
                        Db::name('enewsmemberadd')->update(
                            [
                                'userid' => $enewsmemberadd['userid'],
                                'lasttime' => time(),
                                'lastip' => egetip(),
                                'lastipport' => egetipport(),
                                'loginnum' => $enewsmemberadd['loginnum']+1
                            ]
                        );

                        $returnurl = Cookie::get('returnurl');
                        if(!$returnurl){
                            $returnurl = 'ucenter/index/index';
                        }
                        $this->success('登录成功', $returnurl);
                    }
                } else {
                    $this->error('用户名或密码错误');
                }
            }
        }
    }


}