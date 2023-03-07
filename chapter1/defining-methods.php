<?php

class Basket {
    public $itemsTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal() {
        $subtotal = $this->itemsTotal + $this->itemsTotal - $this->discount;
        return $subtotal;
    }

}

$myBasket = new Basket();

$myBasket->itemsTotal = 40;
$myBasket->shippingCost = 60;
$myBasket->discount = 30;

var_dump($myBasket->calculateSubTotal());

// print_r($myBasket);

