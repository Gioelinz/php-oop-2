<?php

class Customer
{
    public $name;
    public $last_name;
    public $age;
    public $credit_card;
    public $is_registered;

    public function __construct($name, $last_name, $age, $credit_card, $is_registered = false)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->credit_card = $credit_card;
        $this->is_registered = $is_registered;
    }
}

$customer = new Customer('Gioele', 'Runza', 22, 'obj', true);


var_dump($customer);
