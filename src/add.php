	
<?php
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=classicmodels', 'root', '');

    // Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
    $pdo -> exec("SET NAMES UTF8");   

		$query = $pdo->prepare('INSERT INTO customers(customerName, contactFirstName, contactLastName, phone, addressLine1, addressLine2, city, postalCode, state, country, salesRepEmployeeNumber, creditLimit) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)');
        $query -> execute([$_POST["customerName"],$_POST["contactFirstName"],$_POST["contactLastName"],$_POST["phone"],$_POST["addressLine1"],$_POST["addressLine2"],$_POST["city"],$_POST["postalCode"],$_POST["state"],$_POST["country"],$_POST["salesRepEmployeeNumber"],$_POST["creditLimit"]]);
		echo "les informations sont maintenant enregistré";
		
		
	include 'index.php';
		?> 
		

	
		