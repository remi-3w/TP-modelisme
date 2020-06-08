<?php 
require 'head.php';
?>

<!-- !-- Page d'ajout d'un article --> 
<h2><i class=""></i> Modification de commande</h2>

<!-- Formulaire de saisie d'un nouvel article -->

<!-- on verifie si le client existe deja, et on propose de creer un nouveau client avec un bouton -->
<form class="generic-form" action="" method="post">
    <fieldset>
        <legend><i class="fas fa-address-book"></i> bon de commande</legend>
            <ul>
                <li>
                    <!-- Selection du n° client depuis la base de donnée --> 
                    <label for="customerNumber">Client :</label>
                    <select id="customerNumber" name="customerNumber">
                        <option value="">Séléctionnez un client</option>                
                        <?php foreach($customers as $customer):?>                     
                        <option value= "<?$customer["customerNumber"] ?>"><? echo ($customer["customerNumber"]).' '.($customer["contactLastName"]).' '.($customer["contactFirstName"]) ;?> </option>                     <?php endforeach ?>
                    </select>             
                </li>           
                    <a href="add-customer.php">Créer le client</a>                 
                <li>
                    <label for="product">Produit :</label>
                        <select id="product" name="product" >
                            <option>Séléctionnez un produit</option>                
                            <?php foreach($products as $product):?>                    
                            <option value= "<?$product["productCode"] ?>" ><? echo ($product["productCode"]).' '.($product["productName"]) ;?> </option> 
                            <?php endforeach ?>
                        </select>
                </li>
                <li>
                    <Label for="quantité">Quantité :</label>
                    <input id="quantite" name="quantité" value="<?php $contact1["quantityOrdered"]; ?>" >
                </li>
                <li>
                    <Label for="orderDate">Date de commande :</label>
                    <input type="date" id="orderDate" name="orderDate" value="<?php $contact["orderDate"]; ?>" >    
                </li>  
                <li>
                    <Label for="shippedDate">Date de livraison :</label>
                    <input type="date" id="shippedDate" name="shippedDate" value="<?php $contact["shippedDate"]; ?>">
                </li>
                <li>
                    <Label for="status">Status:</Label>
                        <select id="status" name="status">
                            <option value="<?php $contact["shippedDate"]; ?>"><?php $contact["shippedDate"]; ?></option>     
                            <option value="disputed">disputed</option>                      
                            <option value="cancelled">cancelled</option>
                            <option value="in progress">in progress</option>
                            <option value="on hold">on hold</option>
                            <option value="resolved">resolved</option>
                            <option value="shipped">shipped</option>
                        </select>
                </li>
                <li>
                    <Label for="comments">Commentaire :</label>
                    <input type="textarea" id="comments" name="comments" value="<? $contact["comments"]?>">
                </li>           
            <li>
                <button class="button button-primary" type="submit">Enregistrer les modifications</button>
                <a class="button button-cancel" href="index.php">Annuler</a>
               
            </li>
        </ul>
    </fieldset>
</form>










<?php
    require 'footer.php';
    ?>