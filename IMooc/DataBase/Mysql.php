<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/25
 * Time: 下午2:14
 */
namespace IMooc\DataBase;

use IMooc\IDataBase;

class Mysql implements IDataBase
{

    private $conn;

    public function connect($host, $name, $passwd, $db_name) {
        $conn = mysql_connect($host, $name, $passwd);
        mysql_selectdb($db_name, $conn);
        $this->conn = $conn;
    }

    public function query($sql) {
        return mysql_query($sql, $this->conn);
    }

    public function close() {
        mysql_close($this->conn);
    }
}