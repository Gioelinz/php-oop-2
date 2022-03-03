<?php

/* L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. */

require_once __DIR__ . '/Customer.php';


$my_card = new CreditCard('5555777722221111', '341', '20-01-2023');

$customer = new Customer('Gioele', 'Runza', 22, $my_card, true);


var_dump($customer);
