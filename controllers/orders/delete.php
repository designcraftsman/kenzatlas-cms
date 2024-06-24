<?php 

require_once ('../../models/orderController.php');
function delete($numero){
    $orderRepository = new OrderRepository();
    $orderRepository->connection = new DatabaseConnection();
    $orderRepository->deleteOrder($numero);
    header('Location: ../orders/index.php');
}



