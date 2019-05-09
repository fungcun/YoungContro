<?php
/**
 * Created by PhpStorm.
 * User: 15731
 * Date: 2019/5/9
 * Time: 14:15
 */

namespace Framework;


class Controller
{
    //创建 dispaly 方法 用于加载视图文件
    public function display($url){
        $str = './Views/'.$url.'.html';
        require "{$str}";
    }
}