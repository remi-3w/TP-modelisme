
<?php

$pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=classicmodels', 'root', '');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$pdo->exec('SET NAMES UTF8');

//Si la variable $_POST['truc'] existe et n'est pas vide, alors $truc = $_POST['truc']  sinon elle vaut NULL 
$_POST['comments']= !empty($_POST['comments']) ? $_POST['comments'] : NULL;
$_POST['status']= !empty($_POST['status']) ? $_POST['status'] : NULL;   
$_POST['shippedDate']= !empty($_POST['shippedDate']) ? $_POST['shippedDate'] : NULL;   
$_POST['customerNumber']= !empty($_POST['customerNumber']) ? $_POST['customerNumber'] : NULL;        
$_POST['orderDate']= !empty($_POST['orderDate']) ? $_POST['orderDate'] : NULL;        

$query = $pdo->prepare
(
    'SELECT
        customerNumber,
        contactLastName,
        contactFirstName
        FROM customers'

);
$query->execute();
$customers=$query->fetchAll(PDO::FETCH_ASSOC);

$query2 = $pdo->prepare
(
    'SELECT
        productCode,
        productName
    FROM products' 
);
// Demande à PDO d'envoyer la requête à MySQL pour exécution.
$query2->execute();

$products=$query2->fetchAll(PDO::FETCH_ASSOC);


    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=classicmodels', 'root', '');

    // Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
    $pdo -> exec("SET NAMES UTF8");   

		$query23 = $pdo->prepare(
            'INSERT INTO orders(
                orderDate,
                shippedDate,
                status,
                comments,
                customerNumber) VALUES(?,?,?,?,?)');

        $query23 -> execute(
            [$_POST["orderDate"],
            $_POST["shippedDate"],
            $_POST["status"],
            $_POST["comments"],
            $_POST["customerNumber"]]);

            $order1=$query23->fetchAll(PDO::FETCH_ASSOC);
            var_dump($order1);

//Si la variable $_POST['truc'] existe et n'est pas vide, alors $truc = $_POST['truc']  sinon elle vaut NULL 
$_POST['customerNumber']= !empty($_POST['customerNumber']) ? $_POST['customerNumber'] : NULL;     
		

include 'templates/add_command.php';
 