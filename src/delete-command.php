
<?php

$pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=classicmodels', 'root', '');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$pdo->exec('SET NAMES UTF8');

$query = $pdo->prepare(
    "DELETE FROM `orders` WHERE orderNumber=:num  LIMIT 1") ;


// Demande à PDO d'envoyer la requête à MySQL pour exécution.
$query->bindvalue(":num",$_GET["orderNumber"],PDO::PARAM_INT);
		
// Demande à PDO d'envoyer la requête à MySQL pour exécution.
$isok=$query->execute();

if ($isok){
$message = "la suppression est réussi";
}else{
$message = "la suppression est en echec";
}
include 'templates/delete_command.php';