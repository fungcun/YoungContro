<?php
/**
 * Created by PhpStorm.
 * User: 15731
 * Date: 2019/5/9
 * Time: 9:56
 */

namespace Tools;


class T{
    //跳转函数
    public static function jump($msg,$url){
        echo '<script> alert(" '.$msg.' ");location.href="'.$url.'" </script>';
        exit;
    }
}