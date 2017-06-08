<?php
/**
 * Created by haoyiguan.
 * User: lele
 * Date: 2017/6/4 0004
 * Time: 16:14
 */

namespace app\index\controller;


use think\Controller;

class Login extends  Controller
{
    //显示登陆页面
    public  function  showLoginPage(){

        return $this->fetch('',['title'=>'登陆']);
    }

    public function  login(){
        return 'POSTtest';
    }

}