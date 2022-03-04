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

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expire
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Set the value of expire
     *
     * @return  self
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;

        return $this;
    }

    /**
     * Get the value of balance
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }
}
