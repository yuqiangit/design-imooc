<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/25
 * Time: 下午2:56
 */
namespace IMooc;
class StrategyFemale implements StrategyUser{

    public function showAd() {
        echo  '女';
    }

    public function showCategory() {
        echo  '连衣裙';
    }
}