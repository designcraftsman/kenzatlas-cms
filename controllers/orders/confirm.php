<?php 

require_once ('../../models/orderController.php');
function confirm($numero){
    $orderRepository = new OrderRepository();
    $orderRepository->connection = new DatabaseConnection();
    $orderRepository->confirmOrder($numero);
    header('Location: ../orders/index.php');
}
