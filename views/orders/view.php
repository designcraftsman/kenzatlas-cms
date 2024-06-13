<?php 


require('../../src/orderController.php') ;
$commande = getOrder();
$produitscommandés = getOrderDetails();

 require ('../../templates/orders/view.php');

