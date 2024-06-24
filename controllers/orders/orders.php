<?php 

require_once('../../lib/database.php') ;
require_once ('../../models/orderController.php') ;
function orders(){
    $ordersRepository = new OrderRepository();
    $ordersRepository->connection = new DatabaseConnection();
    $commandes = $ordersRepository->getOrders();
    require ('../../views/orders/orders.php');
}
