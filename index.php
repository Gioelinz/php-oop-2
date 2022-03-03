<?php

/* L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. */

require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Toys.php';


$my_card = new CreditCard('5555777722221111', '341', 2022, 10);

$customer = new Customer('Gioele', 'Runza', 22, $my_card, true);

$product = new Product(1, 'Croccantini', 10);


$toy = new Toys(2, 'Osso Di Gomma', 5, 'Cane');


var_dump($customer);

echo $customer->buyProduct($toy);

var_dump($customer);

// var_dump($product);

//var_dump($toy->getName());

//echo $customer->getDiscount();

// data corrente
//echo date("d-m-Y");
