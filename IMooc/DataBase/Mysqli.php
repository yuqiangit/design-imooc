<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/25
 * Time: 下午2:14
 */
namespace IMooc\DataBase;

use IMooc\IDataBase;

class Mysqli implements IDataBase
{

    private $conn;

    public function connect($host, $name, $passwd, $db_name) {
        $conn = mysqli_connect($host, $name, $passwd, $db_name);
        var_dump($conn);
        $this->conn = $conn;
    }

    public function query($sql) {
        return mysqli_query($this->conn, $sql);
    }

    public function close() {
        mysqli_close($this->conn);
    }
}