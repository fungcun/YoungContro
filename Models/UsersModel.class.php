<?php
namespace Models;

use Framework\Model;
use Tools\T;

class UsersModel extends Model {

    public function add($date){
        //数据判断
        if(empty($date['username'])){
            T::jump("账号不能为空!","index.php?c=Users&a=add");
        }

        if(strlen($date['password']) <6 ){
            T::jump("密码应该不少于6位!","index.php?c=Users&a=add");
        }

        //1.构造 SQL
        $sql = "insert into users(username,userpassword,userage,usersex,usertel,usermail,useraddress,usertime,userip) 
                values( 
                '{$date['username']}','{$date['password']}','{$date['age']}','{$date['sex']}','{$date['tel']}','{$date['mail']}','{$date['address']}',
                '{$date['usertime']}','{$date['userip']}'
                 )";

        //执行 SQL 语句
        return $this->db->query($sql);
    }

    public function list(){
        //1.构造 SQL
        $sql="select * from users";
        return $this->db->getAll($sql);
    }
}