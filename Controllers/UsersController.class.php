<?php

namespace Controllers;
use Framework\Controller;
use Models\UsersModel;
use Tools\T;

/**
 *
 *
 */
class UsersController extends Controller {

    public $user;
    public function __construct(){
        //创建 模型 对象
        $this->user = new UsersModel();
    }

    public function add(){
        //1.接受数据
        //2.调用模型处理数据
        //3.加载视图文件
        $this->display("users/add");
    }

    public function save(){
        //1.接受数据
        $userdata = $_POST;
        //2.调用模型处理数据
        $r = $this->user->add($userdata);
        //结果集判断
        if($r){
            T::jump("注册成功！","index.php?c=Users&a=list");
        }
        //3.加载视图文件
    }

    public function list(){
        //1.接受数据
        //2.调用模型处理数据
        $res = $this->user->list();
        //3.加载视图文件
        $this->display("users/list");
    }
}
