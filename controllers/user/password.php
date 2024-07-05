<?php 

require_once('../../models/userController.php');
function password(){
    $adminRepository = new AdminRepository();
    $adminRepository->connection = new DatabaseConnection();
    $admin = $adminRepository->getAdmin();
    $adminRepository->changePassword();
    require ('../../views/user/password.php');
}

