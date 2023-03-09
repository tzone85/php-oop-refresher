<?php

class Bid
{
    private $minimumBid = 5;    // set this as a default only for demo purposes
    private $bidAmount;

    /**
     * @param mixed $amount
     */
    public function setBidAmount($amount)
    {
        if ($amount < $this->minimumBid) {
            $this->bidAmount = $this->minimumBid;
            return;
        }

        $this->bidAmount = $amount;
    }

    /**
     * @return mixed
     */
    public function getBidAmount()
    {
        return $this->bidAmount;
    }
}