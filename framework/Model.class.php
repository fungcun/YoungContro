<?php

namespace Framework;

use Tools\DB;

/**
 *  基础模型，用于连接数据库
 */
class Model{
    //put your code here
    public $db;
    public function __construct() {
        //创建数据库操作对象
        $this->db = DB::create();
    }
}
