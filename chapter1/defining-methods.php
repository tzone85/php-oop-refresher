<?php

class Basket {
    public $itemsTotal;
    public $shippingCost;

    public function calculateSubTotal() {
        $subtotal = $this->itemsTotal + $this->itemsTotal;
        return $subtotal;
    }

}

$myBasket = new Basket();

$myBasket->itemsTotal = 40;
$myBasket->shippingCost = 60;

var_dump($myBasket->calculateSubTotal());

// print_r($myBasket);

