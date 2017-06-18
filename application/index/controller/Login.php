<?php
/**
 * Created by haoyiguan.
 * User: lele
 * Date: 2017/6/4 0004
 * Time: 16:14
 */

namespace app\index\controller;


use think\Controller;
use think\Db;

class Login extends  Controller
{
    //显示登陆页面
    public  function  showLoginPage ()   :string  {

       return $this->fetch('',['title'=>'登陆']);
    }



    public  function  login() :int{
        $username=$this->request->param('username');
        $password=$this->request->param('password');
        $isAjax=$this->request->isAjax();
        //判断如果不是ajax就返回0
        if (!$isAjax){
            return 0;
        }
        $res=Db::table('admin_user')->where('username',$username)->where('password',$password)->find();
        if ($res==null){
            return 0;
        }else{
            $this->loged($res);
            return 1;
        }


    }

    private function loged(array $user){

    }

}