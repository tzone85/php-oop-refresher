<?php

namespace chapter3;

require_once 'NonCuboidShape.php';
class Sphere extends NonCuboidShape
{

    public function volume(): float
    {
        return 4/3*pi()*pow($this->dimensions['radius'], 3);
    }
}