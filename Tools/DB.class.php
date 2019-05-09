<?php

namespace Tools;

class DB{
    //设置一个 静态属性 用于标识 DB类 是否创建,如果创建就保存到 属性 中
    public static $iscreate;

    //私有的连接标识
    private $link;

    //公有的错误提示
    public $erorr;

    //私有的构造方法
    private function __construct() {
        $this->link=@mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT, CHARSET) or die("数据库来连接错误！");
        mysqli_query($this->link, 'set names utf8');
    }

    //私有的克隆方法
    private function __clone() {

    }
    // 公有的 静态的 创建对象 的方法
    public static function create(){
        //判断 $iscreate 是否为空
       if( self::$iscreate == null ){
           //创建 DB类 的对象，保存在 $iscreate 中
           self::$iscreate = new DB();
       }
       //返回创建好的 DB类 对象
       return self::$iscreate;
    }


//功能函数：

    //getOne方法，用于查询一条数据
    public function getOne($sql){
        //查询数据
        $re = mysqli_query($this->link, $sql);

        //判断 SQL 是否执行成功
        $this->result($re);

        //以数组的形式返回一条数据
        return mysqli_fetch_assoc($re);
    }

    //getAll方法，用于查询所有数据
    public function getAll($sql){
        //查询数据
        $res = mysqli_query($this->link, $sql);

        //判断 SQL 是否执行成功
        $this->result($res);

        //以数组的形式返回一条数据
        return mysqli_fetch_all($res,1);
    }

    //query方法，用于执行一条SQL
    public function query($sql){
        $r = mysqli_query($this->link, $sql);

        //判断 SQL 是否执行成功
        $this->result($r);

        return $r;
    }

    //result 方法，用于检查 SQL 的执行结果
    public function result($re){
        if($re === false){
            echo 'SQL 执行错误 ！';
            exit;
        }
    }
}
