<?php 

require_once('../../models/usersController.php');
function view($id){
    $UserRepository = new UserRepository();
    $UserRepository->connection = new DatabaseConnection();
    $utulisateur =  $UserRepository->getUser($id);
    $OrderRepository = new OrderRepository();
    $OrderRepository->connection = new DatabaseConnection();
    require ('../../views/users/view.php');
}

 

