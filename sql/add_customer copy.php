<!-- !-- Page d'ajout d'un client --> 
<h2><i class="fa fa-pencil"></i> Enregistrement d'un nouveau client</h2>

<!-- Formulaire de saisie d'un nouveau client-->


<form class="generic-form" action="" method="post">
    <fieldset>
        <legend><i class="fa fa-sticky-note-o"></i> Nouveau client</legend>
        <ul>
            <li>            
                <label for="customerName">Société :</label>
                <input type="text" id="customerName" name="customerName" required> 
            </li>
            <li>
                <label for="contactFirstName">Nom </label>
                <input type="text" id="contactFirstName" name="contactFirstName"required>
            </li>
            <li>
                <label for="contactLastName">Prénom</label>
                <input type="text" id="contactLastName" name="contactLastName" required>
            </li>
            <li>
                <label for="adressLine1">adresse</label>
                <input type="text" id="adressLine1" name="adressLine1"required >
            </li>
            <li>
                <label for="adressLine2">adress2</label>
                <input type="text" id="adressLine2" name="adressLine2" >
            </li>
            <li>
                <label for="city">Ville</label>
                <input type="text" id="city" name="city"required >
            </li>
            <li>
                <label for="postalCode">Code postale</label>
                <input type="number" id="postalCode" name="postalCode" required>
            </li>
            <li>
                <label for="phone">téléphone</label>
                <input type="tel" id="phone" name="phone" required >
            </li>
            <li>
                <label for="state">Etat</label>
                <input type="text" id="state" name="state">
            </li>
            <li>
                <label for="country">Pays</label>
                <input type="text" id="country" name="country" required>
            </li>
            <li>
                <label for="salesRepEmployeeNumber">n°vendeur rattaché</label>
                <input type="number" id="salesRepEmployeeNumber" name="salesRepEmployeeNumber" >
            </li>
            <li>
                <label for="creditLimit"> crédit</label>
                <input type="number" id="creditLimit" name="creditLimit" >
            </li>
            <li>
                <button class="button button-primary" type="submit">Enregistrer</button>
                <a class="button button-cancel" href="add-command.php">Annuler</a>
            </li>
        </ul>
    </fieldset>
</form>

<?php
	$pdo = new PDO('mysql:host=localhost:3306;dbname=classicmodels', 'root', '');

    // Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
    $pdo->exec('SET NAMES UTF8');


    if(isset($_POST['customerName']) 
    AND isset($_POST['contactFirstName'])
    AND isset($_POST['contactLastName'])
    AND isset($_POST['adressLine1'])
    AND isset($_POST['adressLine2'])
    AND isset($_POST['city'])
    AND isset($_POST['postalCode'])
    AND isset($_POST['country']))  
           
    {


		$query = $pdo->prepare
	( 
			"INSERT INTO 
				customers(customerName, contactFirstname, contactLastName, adressLine1, adressLine2, city, postalCode, country)
				VALUES(?,?,?,?,?,?,?,?)"
	);
                
       $query->execute(array
           (
        $_POST['customerName'],
        $_POST['contactFirstName'],
        $_POST['contactLastName'],
        $_POST['adressLine1'],
        $_POST['adressLine2'],
        $_POST['city'],
        $_POST['postalCode'],
        $_POST['country'],
    )
        )
    ;
     }
?>
