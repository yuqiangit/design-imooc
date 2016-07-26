<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/25
 * Time: 下午2:58
 */
namespace IMooc;
class StrategyMale implements StrategyUser
{

    public function showAd() {
         echo '男';
    }

    public function showCategory() {
        echo 'iphone';
    }
}