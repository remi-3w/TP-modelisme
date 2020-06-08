
<?php

$pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=classicmodels', 'root', '');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$pdo->exec('SET NAMES UTF8');

// Récupération des différentes lignes de la commande.
$query = $pdo->prepare(
    'SELECT
        productName,
        priceEach,
        quantityOrdered,
        priceEach * quantityOrdered AS totalPrice
     FROM orderdetails
     INNER JOIN products ON products.productCode = orderdetails.productCode
     WHERE orderNumber = ?
     ORDER BY orderLineNumber' // Tri par numéro de ligne indiqué dans la base de données
);

$query->execute(array($_GET['orderNumber']));
$contact1 = $query->fetch();
var_dump($contact1);


$query = $pdo->prepare(
    "SELECT * FROM `orders` WHERE orderNumber=:num ") ;


// Demande à PDO d'envoyer la requête à MySQL pour exécution.
$query->bindvalue(":num",$_GET["orderNumber"],PDO::PARAM_INT);
		
// Demande à PDO d'envoyer la requête à MySQL pour exécution.
$isok=$query->execute();


$contact = $query->fetch();
var_dump($contact);

include 'templates/update_command.php';

