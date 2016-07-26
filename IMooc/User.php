<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/25
 * Time: 下午4:49
 */
namespace IMooc;

use IMooc\DataBase\PDO;

class User
{
    private $db;

    public function __construct($id) {
        $this->db = new PDO();
        $this->db->connect('127.0.0.1', 'root', '123456', 'liking');
        $result = $this->db->query("select * from t_user WHERE id = $id limit 1");
        $result = $result->fetchAll();
        $this->name = $result[0]['name'];
        $this->id = $id;
    }

    public function __destruct() {
        $sql = "update t_user set name = '{$this->name}' where id = '{$this->id}'";
        $result = $this->db->query($sql);
    }
}
