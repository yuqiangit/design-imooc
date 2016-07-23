<?php

/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/22
 * Time: 上午11:45
 */
namespace IMooc;

class Object
{
    private $array = [];

    public static function hello($name) {
        echo 'hello-' . $name;
    }

    public function __set($name, $value) {
        echo __METHOD__ . '<br>';
        $this->array[$name] = $value;
    }

    public function __get($name) {
        echo __METHOD__ . '<br>';
        return $this->array[$name];
    }

    public function __call($name, $arguments) {
        echo __METHOD__ . '<br>';
    }
}