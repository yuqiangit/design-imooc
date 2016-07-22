<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/22
 * Time: 上午11:23
 */
//require 'Test1.php';
//require 'Test2.php';


spl_autoload_register('auto_load');
Test1::hello();
Test2::hello();

function auto_load($class){
    require __DIR__.'/'.$class.'.php';
}