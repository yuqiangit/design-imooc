<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/25
 * Time: 上午11:25
 */
namespace IMooc;
class Register
{

    private static $objects = array();

    public static function set($name, $value) {
        self::$objects[$name] = $value;
    }

    public static function _unset($name) {
        unset(self::$objects[$name]);
    }

    public static function get($name) {
        if (isset($objects[$name])) {
            return self::$objects[$name];
        }
        return null;


    }
}