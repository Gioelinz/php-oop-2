<?php

class CreditCard
{
    public $number;
    public $cvv;
    public $expire;
    public $balance;

    public function __construct($number, $cvv, $expire, $balance = 0)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->expire = $expire;
        $this->balance = $balance;
    }
}
