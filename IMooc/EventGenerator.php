<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/26
 * Time: 下午2:26
 */
namespace IMooc;
abstract class EventGenerator
{
    private $observers = array();

    public function addObserver(EventObserver $observer) {
        $this->observers[] = $observer;
    }

    public function notify() {
        /** @var EventObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update('info');
        }
    }
}