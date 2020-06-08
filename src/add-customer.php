
<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=classicmodels', 'root', '');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$pdo->exec('SET NAMES UTF8');

//Si la variable $_POST['truc'] existe et n'est pas vide, alors $truc = $_POST['truc']  sinon elle vaut NULL 
$_POST['creditLimit']= !empty($_POST['creditLimit']) ? $_POST['creditLimit'] : NULL;
$_POST['salesRepEmployeeNumber']= !empty($_POST['salesRepEmployeeNumber']) ? $_POST['salesRepEmployeeNumber'] : NULL;   
$_POST['country']= !empty($_POST['country']) ? $_POST['country'] : NULL;   
$_POST['state']= !empty($_POST['state']) ? $_POST['state'] : NULL;        
$_POST['postalCode']= !empty($_POST['postalCode']) ? $_POST['postalCode'] : NULL;
$_POST['city']= !empty($_POST['city']) ? $_POST['city'] : NULL;
$_POST['addressLine2']= !empty($_POST['addressLine2']) ? $_POST['addressLine2'] : NULL;   
$_POST['addressLine1']= !empty($_POST['addressLine1']) ? $_POST['addressLine1'] : NULL;   
$_POST['phone']= !empty($_POST['phone']) ? $_POST['phone'] : NULL;        
$_POST['contactLastName']= !empty($_POST['contactLastName']) ? $_POST['contactLastName'] : NULL;                
$_POST['contactFirstName']= !empty($_POST['contactFirstName']) ? $_POST['contactFirstName'] : NULL;        
$_POST['customerName']= !empty($_POST['customerName']) ? $_POST['customerName'] : NULL;                $_POST['customerNumber']= !empty($_POST['customerNumber']) ? $_POST['customerNumber'] : NULL;        
              

$query = $pdo->prepare
(
    'SELECT
        customerNumber
         FROM customers
     INNER JOIN orders ON orders.customerNumber = customers.customerNumber'

);
// Demande à PDO d'envoyer la requête à MySQL pour exécution.
$query->execute();



include 'templates/add_customer.php';