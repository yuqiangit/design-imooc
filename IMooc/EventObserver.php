<?php

/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/26
 * Time: 下午2:25
 */
namespace IMooc;
interface EventObserver
{
    public function update($event_info = null);
}