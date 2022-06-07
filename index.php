<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->
<?php
require_once __DIR__ . '/Classes/prodotti.php';
 require_once __DIR__ . '/Classes/registrato.php';

$prodotto1 = new Prodotti('Royal Canin','Alimento Umido',10);
$prodotto2 = new Prodotti('Whiskas','Snack',15);
$prodotto3 = new Prodotti('Tigerino','Lettiera',20);
$prodotto4 = new Prodotti('Smilla','Cuccia',11);


 $utente = new Utente('abdel qader','mourchid');
 $utente->setProdotti($prodotto1);
 var_dump($utente);

 $utente1 = new registrato('abdel qader','mourchid','amsis','sss');
 var_dump($utente1);


?>