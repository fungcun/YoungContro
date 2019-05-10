<?php
//设置字符集
header('Content-Type:text/html;charset=utf-8');

//加载配置文件
require './Conf/conf.php';

//获得方法 和 控制器
$c=$_GET['c'] ?? 'Login';   // default the a is 'index'
$a=$_GET['a'] ?? 'login';   // default the c is 'index'

//构造 控制器 文件路径
$Controllername = "\\Controllers\\{$c}Controller";

//根据 控制器名 创建对象
$Controller = new $Controllername();

//使用 控制器 上的 方法
$Controller->$a();

//自动加载类 ———— $cls 是自动加载 的 类名
function __autoload($cls){
    //将 $cls 中的 \ 替换为 /
    $cls= str_replace("\\", "/", $cls);

    //加载 控制器文件
    require "./{$cls}.class.php ";
}