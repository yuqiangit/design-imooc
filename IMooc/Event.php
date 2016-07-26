<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/26
 * Time: 下午2:22
 */
namespace IMooc;
class Event extends EventGenerator
{
    public function trigger() {
        echo "Event<br>";
        $this->notify();
    }
}