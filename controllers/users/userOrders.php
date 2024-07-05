<?php 

require_once('../../models/usersController.php');
function userOrders($id){
    $UserRepository = new UserRepository();
    $UserRepository->connection = new DatabaseConnection();
    $utulisateur = $UserRepository->getUser($id);
    $OrderRepository = new OrderRepository();
    $OrderRepository->connection = new DatabaseConnection();
    $commandes = $OrderRepository->getUserOrders($id);
    require_once('../../views/users/userOrders.php');
}
