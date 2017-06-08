<?php
/**
 * Created by haoyiguan.
 * User: lele
 * Date: 2017/6/8 0008
 * Time: 16:43
 */

namespace app\index\controller;


use think\Controller;

class Admin extends Controller
{
    public  function  index(){
        return $this->fetch('admin-index',['title'=>'管理界面']);
    }

}