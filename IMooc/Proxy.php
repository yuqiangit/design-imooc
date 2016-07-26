<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/26
 * Time: 下午5:46
 */
namespace IMooc;
class Proxy implements IUserProxy
{

    public function getInfo($id) {
        $db = Factory::createDataBase();
        $db->connect('127.0.0.1','root','123456','liking');
        $result = $db->query("select * from t_user where id = '{$id}'");
        return $result->fetchAll();

    }

    public function updateInfo($id,$name) {
        $db = Factory::createDataBase();
        $db->connect('127.0.0.1','root','123456','liking');
        $db->query("update t_user set name = '{$name}' where id = '{$id}'");
    }
}