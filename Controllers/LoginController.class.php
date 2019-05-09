<?php
/**
 * Created by PhpStorm.
 * User: 15731
 * Date: 2019/5/9
 * Time: 14:24
 */

namespace Controllers;


use Framework\Controller;

class LoginController extends Controller
{
    public $login;
    public function __construct(){
        //创建 LoginModel 对象
//        $this->login = new
    }

    //加载登陆界面的方法
    public function login(){
        //1.接收数据
        //2.调用模型处理数据
        //3.加载视图文件
        $this->display("admin/login");
    }
    //检查登陆的方法
    public function check(){
        //1.接收数据
        $admindate = $_POST;
        //2.调用模型处理数据
        //3.加载视图文件
    }

}