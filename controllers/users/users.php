<?php 

require_once('../../models/usersController.php');
function users(){
    $UserRepository = new UserRepository();
    $UserRepository->connection = new DatabaseConnection();
    $utulisateurs =  $UserRepository->getUsers();
    $OrderRepository = new OrderRepository();
    $OrderRepository->connection = new DatabaseConnection();
    require ('../../views/users/users.php');
}
