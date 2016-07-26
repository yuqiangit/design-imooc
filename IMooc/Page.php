<?php

/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/25
 * Time: 下午3:01
 */
namespace IMooc;
class Page
{
    /**
     * @var StrategyUser
     */
    private $strategy;

    public function index() {
        echo $this->strategy->showAd();
        echo '<br>';
        echo $this->strategy->showCategory();
    }

    public function setStrategy(StrategyUser $strategy) {
        $this->strategy = $strategy;
    }
}