<?php 


require_once('../../models/orderController.php') ;
function view($numero){
    $orderRepository = new OrderRepository();
    $orderRepository->connection = new DatabaseConnection();
    $commande = $orderRepository->getOrder($numero);
    $produits = $orderRepository->getOrderDetails($numero);
    require ('../../views/orders/view.php');
}
