<?php 



function orders(){
    $ordersRepository = new OrderRepository();
    $ordersRepository->connection = new DatabaseConnection();
    $commandes = $ordersRepository->getOrders();
    require ('../../views/orders/orders.php');
}
