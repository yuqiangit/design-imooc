<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/26
 * Time: 下午2:55
 */

namespace IMooc;


class DrawDecoratorSize implements DrawDecorator
{
    private $size;

    public function __construct($size) {
        $this->size = $size;
    }

    function beforeDraw() {
        echo "<div style='font-size:{$this->size} px'>";
    }

    function afterDraw() {
        echo '</div>';
    }
}