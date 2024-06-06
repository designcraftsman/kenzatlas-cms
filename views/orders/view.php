<?php 


require('../../src/orderController.php') ;
$commande = getOrder();
$produitscommandés = getOrderDetails();
$prixTotal = getTotalPrice($produitscommandés);
 require ('../../templates/orders/view.php');

