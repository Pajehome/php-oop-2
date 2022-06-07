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


 $utente = new Utente('Mimmo','Spirit');
 $utente->setProdotti($prodotto1);
 $utente->setProdotti($prodotto2);
 $utente->setProdotti($prodotto3);
 $utente->setProdotti($prodotto4);


 $utente1 = new registrato('Pinco','Pallino','','pincopallino@gmail.com');
 $prezzoscontato = $utente1->getDiscount($prodotto1->getPrezzo());
 $prodotto1->setPrezzo($prezzoscontato);
 $utente1->setProdotti($prodotto1);
 

 $prezzoscontato2 = $utente1->getDiscount($prodotto1->getPrezzo());
 $prodotto2->setPrezzo($prezzoscontato2);
 $utente1->setProdotti($prodotto2);


 $prezzoscontato3 = $utente1->getDiscount($prodotto2->getPrezzo());
 $prodotto2->setPrezzo($prezzoscontato3);
 $utente1->setProdotti($prodotto3);


 $prezzoscontato4 = $utente1->getDiscount($prodotto3->getPrezzo());
 $prodotto2->setPrezzo($prezzoscontato4);
 $utente1->setProdotti($prodotto4);
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2><?php echo $utente->getNome().' '.$utente->getCognome() ?></h2>
        <ul>
         <?php foreach ($utente->getProdotti() as $prodotto){?>
         <li><?php echo $prodotto->getNome() ?>
             <?php echo $prodotto->getTipo() ?>
             <?php echo $prodotto->getPrezzo().' €' ?>
         </li>
         <?php } ?>
        </ul>
    </div>

    <div>
        <h2><?php echo $utente1->getNome().' '.$utente1->getCognome() ?> Registrato</h2>
        <ul>
         <?php foreach ($utente1->getProdotti() as $prodotto){?>
         <li><?php echo $prodotto->getNome() ?>
             <?php echo $prodotto->getTipo() ?>
             <?php echo $prodotto->getPrezzo().' €' ?>
         </li>
         <?php } ?>
        </ul>
    </div>
   
</body>
</html>