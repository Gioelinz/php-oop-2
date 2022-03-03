<?php

require_once __DIR__ . '/CreditCard.php';

class Customer
{
    public $name;
    public $last_name;
    public $age;
    public $credit_card;
    public $is_registered;
    public $discount;

    public function __construct($name, $last_name, $age, $credit_card, $is_registered = false)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->setCreditCard($credit_card);
        $this->is_registered = $is_registered;
        $this->discount = $this->setDiscount();
    }

    private function setCreditCard($credit_card)
    {
        if (!$credit_card instanceof CreditCard) return false;
        $this->credit_card = $credit_card;
    }

    private function setDiscount()
    {
        return $this->is_registered ? $this->discount = 20 : $this->discount = 0;
    }

    public function getDiscount()
    {
        return 'Possiedi il ' . $this->discount . '%' . ' ' . 'di sconto';
    }

    public function getBalance()
    {
        return $this->credit_card->balance . '€';
    }

    public function buyProduct($product)
    {
        if ($this->credit_card->expire < date('Y')) {
            return 'La tua Carta risulta scaduta!';
        } else {
            if ($product->price > $this->credit_card->balance) {
                return 'Transazione Rifiutata, Fondi Insufficenti!';
            } else {
                if ($this->discount > 0) {
                    $price = $product->price - $product->price / 100 * $this->discount;
                    $this->credit_card->balance -= $price;
                    return "Transazione approvata, id prodotto: $product->id, Prodotto:" . $product->getName() . ", hai ricevuto uno sconto del $this->discount% ed hai speso $price €";
                } else {
                    $this->credit_card->balance -= $product->price;
                    return "Transazione approvata, id prodotto: $product->id, Prodotto:" . $product->getName() . ",  hai speso $product->price €";
                }
            }
        }
    }
}
