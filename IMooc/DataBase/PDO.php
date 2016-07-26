<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/25
 * Time: 下午2:14
 */
namespace IMooc\DataBase;



use IMooc\IDataBase;

class PDO implements IDataBase
{

    /**
     * @var \PDO
     */
    protected $conn;

    public function connect($host, $name, $passwd, $db_name) {
        $conn = new \PDO("mysql:host=$host;dbname=$db_name", $name, $passwd);
        $this->conn = $conn;
        $this->conn->query('set names utf8');
    }

    public function query($sql) {
        $result =  $this->conn->query($sql,\PDO::FETCH_ASSOC);
        return $result;
    }

    public function close() {
        unset($this->conn);
    }
}