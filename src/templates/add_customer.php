<?php 
require 'head.php';
?>

<!-- !-- Page d'ajout d'un client --> 
<h2><i class="far fa-save"></i> Enregistrement d'un nouveau client</h2>

<!-- Formulaire de saisie d'un nouveau client-->


<form class="generic-form" action="add.php" method="post" class="">
    <fieldset>
        <legend><i class="fa fa-address-book"></i> Nouveau client</legend>
        <ul>
            <li>            
                <label for="customerName">Société :</label>
                <input type="text" id="customerName" name="customerName">
            </li>
            <li>
                <label for="contactFirstName">Prénom </label>
                <input type="text" id="contactFirstName" name="contactFirstName">
            </li>
            <li>
                <label for="contactLastName">Nom</label>
                <input type="text" id="contactLastName" name="contactLastName" >
            </li>
            <li>
                <label for="phone">téléphone</label>
                <input type="tel" id="phone" name="phone" >
            </li>
            <li>
                <label for="addressline1">adresse</label>
                <input type="text" id="addressLine1" name="addressLine1" >
            </li>
            <li>
                <label for="adressline2">adress2</label>
                <input type="text" id="addresseLine2" name="addressLine2">
            </li>
            <li>
                <label for="city">Ville</label>
                <input type="text" id="city" name="city" >
            </li>
            <li>
                <label for="postalcode">Code postale</label>
                <input type="number" id="postalCode" name="postalCode">
            </li>
           
            <li>
                <label for="state">Etat</label>
                <input type="text" id="state" name="state">
            </li>
            <li>
                <label for="country">Pays</label>
                <input type="text" id="country" name="country" >
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
                <a class="button button-cancel" href="index.php">Annuler</a>
            </li>
        </ul>
    </fieldset>
</form>

<?php
    require 'footer.php';
    ?>
