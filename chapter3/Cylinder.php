<?php

namespace chapter3;
require_once 'NonCuboidShape.php';
class Cylinder extends NonCuboidShape
{
    /**
     * calculate the volume [V=πr2h]
     * @return float
     */

    public function volume(): float
    {
        return pi() * pow($this->dimensions['radius'], 2) * $this->dimensions['height'];
    }
}