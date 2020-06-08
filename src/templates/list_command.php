  
    <div >
        <div class="container-fluid center">
        <h1>Bons de commande</h1>
        <table class="standard-table">
            <caption> fin de liste établie </caption>
            <thead>
                <tr>
                    <th>Commande</th>
                    <th>Date de la commande</th>
                    <th>Date de livraison</th>
                    <th>Statut</th>
                </tr>
            </thead>
              <tbody>
                <?php
           
               foreach ($orders as $order): 
               
                ?> 
                    <tr>
                        <td>
                            <a href="order-form.php?orderNumber=<?= $order['orderNumber'] ?>"><?= $order['orderNumber'] ?></a>
                        </td>
                        <td><?= $order['orderDate'] ?></td>
                        <td><?= $order['shippedDate'] ?></td>
                        <td><?= $order['status'] ?></td>
                        
                        <td><a href="update-command.php?orderNumber=<?= $order['orderNumber'] ?>"  class="text"><i class="fa fa-pencil-alt "></i> modifier</a></td>
                        <td><a href="delete-command.php?orderNumber=<?= $order['orderNumber'] ?>"  class="text-danger"><i class="fa fa-times-circle "></i> delete</a></td>
                        
                    </tr>
                   
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
                </div>
   
     

