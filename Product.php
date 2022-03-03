<?php

class Product
{
    public $id;
    protected $name;
    public $price;


    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }
}
