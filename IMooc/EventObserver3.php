<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/26
 * Time: 下午2:39
 */
namespace IMooc;
class EventObserver3 implements EventObserver{

    public function update($event_info = null) {
        echo '*3';
    }
}