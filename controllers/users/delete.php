<?php 

require_once('../../models/usersController.php');
function delete($id){
    $UserRepository = new UserRepository();
    $UserRepository->connection = new DatabaseConnection();
    $UserRepository->deleteUser($id);
}
