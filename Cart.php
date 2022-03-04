<?php

require_once __DIR__ . '/Address.php';

class Cart
{
    public $products = [];

    use Address;

    /*  public function __construct($address)
    {
        $this->address = $address;
    } */

    /**
     * Get the value of products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @return  self
     */


    public function setProducts($products)
    {
        foreach ($products as $product) {
            if (!$product instanceof Product) throw new Exception('Not a Product');
            $this->products[$product->getId()] = $product;
        }
    }
}
