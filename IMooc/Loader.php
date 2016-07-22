<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/22
 * Time: 下午5:14
 */
namespace IMooc;
class Loader
{
    static function autoload($class) {
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}