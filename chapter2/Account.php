<?php

class Account
{
    public $accountNumber;
    public $balance;

    public function deposit($amount)
    {
        echo 'Depositing: '.$amount.'<br>';
    }

    public function withdraw($amount)
    {
        echo 'Withdrew: '.$amount.'<br>';
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }
}