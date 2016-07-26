<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/23
 * Time: 下午5:46
 */
namespace IMooc;
use IMooc\DataBase\PDO;


/**
 * Interface todo 重构
 * Class DataBase
 * @package IMooc
 */

interface IDataBase{
    public function connect($host,$name,$passwd,$db_name);
    public function query($sql);
    public function close();
}

class DataBase
{
    private static $db;


    private function __construct() {

    }

    public static function getInstance() {
        if (self::$db) {
            return self::$db;
        } else {
            self::$db = new PDO();
            return self::$db;
        }
    }

    public function where($info) {
        return $this;
    }

    public function limit($info) {
        return $this;

    }

    public function order($info) {
        return $this;
    }
}