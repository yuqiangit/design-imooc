<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/25
 * Time: 上午10:44
 */
namespace IMooc;

class Factory
{
    public static function createDataBase() {
        $db = DataBase::getInstance();
        return $db;
    }

    public static function createUser($id) {
        $key = 'user_' . $id;
        $user = Register::get($key);
        if (!$user) {
            $user = new User($id);
            Register::set($key, $user);
        }
        return $user;
    }
}