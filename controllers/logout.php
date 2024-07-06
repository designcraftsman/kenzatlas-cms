<?php 
session_start();
if($_SESSION['login'] == false){
    header('Location: ../../index.php');
}else{
require_once('../lib/database.php');
require_once('../models/userController.php');
$adminRepository = new AdminRepository();
$adminRepository->connection = new DatabaseConnection();
$adminRepository->logout();
header('Location: ../index.php');
}