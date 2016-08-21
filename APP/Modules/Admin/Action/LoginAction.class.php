<?php
/**
 * Created by PhpStorm.
 * User: zyf
 * Date: 2016/8/21
 * Time: 19:03
 *
 * 后台登录
 */
Class LoginAction extends Action{
    //登录页面视图
    Public function index(){
        $this->display();
    }

    //验证码
    Public function verify(){
        Import('Class.Image',APP_PATH);
        Image::verify();
    }
}
