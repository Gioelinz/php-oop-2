<?php

/* L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. */

require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Toys.php';


$my_card = new CreditCard('5532576735221221', '341', 2022, 20);

$customer = new Customer('Gioele', 'Runza', 22, $my_card, true);

$product = new Product(1, 'Croccantini', 10);


$toy = new Toys(2, 'Osso Di Gomma', 5, 'Cane');


/* echo $customer->getBalance();

echo $customer->buyProduct($product);

echo $customer->getBalance(); */

// var_dump($product);


// data corrente
//echo date("d-m-Y");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>

<body>
    <p>Carta n: <strong><?= $my_card->number ?></strong></p>
    <address>Scadenza: <?= $my_card->expire ?></address>

    <h1>Stai acquistando: <?= $toy->getName() ?></h1>
    <h2>Possiedi <?= $customer->getBalance() ?></h2>
    <h3><?= $customer->buyProduct($toy) ?></h3>
    <h2>Adesso possiedi <?= $customer->getBalance() ?></h2>
</body>

</html>