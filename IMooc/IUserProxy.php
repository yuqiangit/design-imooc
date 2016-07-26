<?php

/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/26
 * Time: 下午5:42
 */
namespace IMooc;
interface IUserProxy
{
    public function getInfo($id);
    public function updateInfo($id,$name);
}