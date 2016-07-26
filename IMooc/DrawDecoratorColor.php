<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/26
 * Time: 下午2:55
 */

namespace IMooc;


class DrawDecoratorColor implements DrawDecorator
{
    private $color;

    public function __construct($color) {
        $this->color = $color;
    }

    function beforeDraw() {
        echo "<div style='background-color:{$this->color}'>";
    }

    function afterDraw() {
        echo '</div>';
    }
}